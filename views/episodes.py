import asyncio

import fastapi
from fastapi_chameleon import template
from starlette import status
from starlette.requests import Request

from services import episode_service

from viewmodels.episodes.episodes_viewmodel import EpisodeEntryViewModel

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

@router.post('/episodes/add-episode', include_in_schema=False)
@template()
async def register(request: Request):
    vm = EpisodeEntryViewModel(request)
    await vm.load()

    if vm.error:
        return vm.to_dict()

    # Create the account
    account = await user_service.create_account(vm.username, vm.email, vm.password)

    # Login user
    response = fastapi.responses.RedirectResponse(url='/account', status_code=status.HTTP_302_FOUND)
    # cookie_auth.set_auth(response, account.id)

    return response