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

@router.get("/episodes/episodes/0/trailer")
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
    #episode = await episode.create_account(vm.season)

    # Login user
    response = fastapi.responses.RedirectResponse(url='/episodes/all', status_code=status.HTTP_302_FOUND)

    return response