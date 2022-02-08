import fastapi
from fastapi_chameleon import template
from starlette import status
from starlette.requests import Request

from services import episode_service

from viewmodels.admin.add_episode import EpisodeAddViewModel
from viewmodels.shared.viewmodel import ViewModelBase
from viewmodels.admin.admin_viewmodel import AdminViewModel

router = fastapi.APIRouter()


###########  ADMIN HOMEPAGE ##############


@router.get("/admin/index")
@template(template_file="admin/index.pt")
async def index(request: Request):
    vm = AdminViewModel(request)
    
    await vm.load()

    print(vm.user)
    if vm.admin == False:
        return fastapi.responses.RedirectResponse(
            url="/about", status_code=status.HTTP_302_FOUND
        )

    else:

        return vm.to_dict()


###########  ADD EPISODE ##############


@router.get("/admin/add-episode", include_in_schema=False)
@template(template_file="admin/add-episode.pt")
def register(request: Request):
    vm = EpisodeAddViewModel(request)
    return vm.to_dict()


@router.post("/admin/add-episode", include_in_schema=False)
@template()
async def register(request: Request):
    vm = EpisodeAddViewModel(request)
    await vm.load()

    if vm.error:
        return vm.to_dict()

    # Add the episode
    episode = await episode_service.create_episode(
        vm.season,
        vm.episode_number,
        vm.episode_title,
        vm.youtube_url,
        vm.guest_firstname,
        vm.guest_lastname,
        vm.topic,
        vm.record_date,
        vm.publish_date,
        vm.guest_image,
        vm.guest_bio,
        vm.sponsor_1,
        vm.sponsor_2,
        vm.published,
        vm.episode_length,
        vm.captivate_url
    )

    # Redirect to the episode page
    response = fastapi.responses.RedirectResponse(
        url="/episodes/all", status_code=status.HTTP_302_FOUND
    )

    return response

