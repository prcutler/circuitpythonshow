import asyncio

import fastapi
from fastapi_chameleon import template
from starlette import status
from starlette.requests import Request

from services import episode_service

from viewmodels.episodes.add_episode import EpisodeAddViewModel



router = fastapi.APIRouter()


@router.get("/episodes/all")
@template(template_file="episodes/all.pt")
def all():
    return {}

@router.get("/episodes/episode-template")
@template(template_file="episodes/episode-template.pt")
def all():
    return {}

@router.get("/episodes/0/trailer")
@template(template_file="episodes/episode0-trailer.pt")
def all():
    return {}

@router.get("/episodes/0/transcripts/episode0-transcript")
@template(template_file="episodes/transcripts/episode0-transcript.pt")
def all():
    return {}

###########  ADD EPISODE  ##############

@router.get('/episodes/add-episode', include_in_schema=False)
@template(template_file="episodes/add-episode.pt")
def register(request: Request):
    vm = EpisodeAddViewModel(request)
    return vm.to_dict()


@router.post('/episodes/add-episode', include_in_schema=False)
@template()
async def register(request: Request):
    vm = EpisodeAddViewModel(request)
    await vm.load()

    if vm.error:
        return vm.to_dict()

    # Add the episode
    episode = await episode_service.create_episode(vm.season, vm.episode_number, vm.episode_title, 
                                                vm.youtube_url, vm.guest_firstname, vm.guest_lastname, vm.topic,
                                                vm.record_date, vm.publish_date, vm.guest_image, vm.guest_bio,
                                                vm.sponsor_1, vm.sponsor_2, vm.published, vm.show_notes)

    # Redirect to the episode page
    response = fastapi.responses.RedirectResponse(url='/episodes/all', status_code=status.HTTP_302_FOUND)

    return response


################# EPISODE DETAILS #####################

