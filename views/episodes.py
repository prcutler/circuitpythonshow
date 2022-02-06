import fastapi
from fastapi_chameleon import template
from starlette import status
from starlette.requests import Request

from services import episode_service

from viewmodels.episodes.all_episodes import AllEpisodesViewModel
from viewmodels.shared.viewmodel import ViewModelBase

router = fastapi.APIRouter()


#### SHOW ALL EPISODES ####
@router.get("/episodes/all")
@template(template_file="episodes/all.pt")
async def all(request: Request):
    vm = AllEpisodesViewModel(request)
    print("Loading viewmodel")
    await vm.load()
    return vm.to_dict()


#### EPISODE DETAIL TEMPLATE ####
@router.get("/episodes/{episode_number}")
@template(template_file="episodes/episode-template.pt")
def all():
    return {}


#### TEMP FILES UNTIL DONE ####
@router.get("/episodes/0/trailer")
@template(template_file="episodes/episode0-trailer.pt")
def all():
    return {}


@router.get("/episodes/0/transcripts/episode0-transcript")
@template(template_file="episodes/transcripts/episode0-transcript.pt")
def all():
    return {}
