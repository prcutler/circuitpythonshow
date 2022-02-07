import fastapi
from fastapi_chameleon import template
from starlette import status
from starlette.requests import Request

from services import episode_service

from viewmodels.episodes.all_episodes_list_viewmodel import AllEpisodesViewModel
from viewmodels.episodes.episode_details_viewmodel import EpisodeDetailsViewModel
from viewmodels.shared.viewmodel import ViewModelBase

router = fastapi.APIRouter()


#### SHOW ALL EPISODES ####
@router.get("/episodes/all")
@template(template_file="episodes/all.pt")
async def all(self, episode_number, request: Request):
    vm = AllEpisodesViewModel(episode_number, request)
    print("Loading viewmodel")
    await vm.load()
    return vm.to_dict()


#### EPISODE DETAIL TEMPLATE ####
@router.get("/episodes/{episode_number}")
@template(template_file="episodes/episode-detail.pt")
async def details(episode_number, request: Request):
    vm = EpisodeDetailsViewModel(episode_number, request)
    await vm.load(episode_number)

    return vm.to_dict()


#### TEMP FILES UNTIL DONE ####
@router.get("/episodes/0/trailer")
@template(template_file="episodes/episode0-trailer.pt")
def all():
    return {}


@router.get("/episodes/0/transcripts/episode0-transcript")
@template(template_file="episodes/transcripts/episode0-transcript.pt")
def all():
    return {}
