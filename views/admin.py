import fastapi
from fastapi_chameleon import template
from starlette import status
from starlette.requests import Request

from services import episode_service, transcripts_service

from viewmodels.admin.add_episode import EpisodeAddViewModel
from viewmodels.shared.viewmodel import ViewModelBase
from viewmodels.admin.admin_viewmodel import AdminViewModel
from viewmodels.admin.add_show_notes_viewmodel import ShowNotesAddViewModel
from viewmodels.admin.add_transcripts_viewmodel import TranscriptAddViewModel

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
        vm.captivate_url,
    )

    # Redirect to the episode page
    response = fastapi.responses.RedirectResponse(
        url="/episodes/all", status_code=status.HTTP_302_FOUND
    )

    return response


###########  EDIT EPISODE ##############


@router.get("/admin/edit-episode", include_in_schema=False)
@template(template_file="admin/edit-episode.pt")
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
        vm.captivate_url,
    )

    # Redirect to the episode page
    response = fastapi.responses.RedirectResponse(
        url="/episodes/all", status_code=status.HTTP_302_FOUND
    )

    return response


###########  ADD SHOWNOTES ##############


@router.get("/admin/add-show-notes", include_in_schema=False)
@template("admin/add_show_notes.pt")
def add_show_notes(request: Request):
    vm = ShowNotesAddViewModel(request)
    return vm.to_dict()


@router.post("/admin/add-show-notes", include_in_schema=False)
@template()
async def add_show_notes(request: Request):
    vm = ShowNotesAddViewModel(request)
    await vm.load()

    if vm.error:
        return vm.to_dict()

    # Add the show notes
    show_notes = await episode_service.create_show_notes(
        vm.season,
        vm.episode_number,
        vm.published,
        vm.notes_1,
        vm.timestamp_1,
        vm.notes_2,
        vm.timestamp_2,
        vm.notes_3,
        vm.timestamp_3,
        vm.notes_4,
        vm.timestamp_4,
        vm.notes_5,
        vm.timestamp_5,
        vm.notes_6,
        vm.timestamp_6,
        vm.notes_7,
        vm.timestamp_7,
        vm.notes_8,
        vm.timestamp_8,
        vm.notes_9,
        vm.timestamp_9,
        vm.notes_10,
        vm.timestamp_10,
        vm.notes_11,
        vm.timestamp_11,
        vm.notes_12,
        vm.timestamp_12,
    )

    # Redirect to the episode page
    response = fastapi.responses.RedirectResponse(
        url="/episodes/all", status_code=status.HTTP_302_FOUND
    )

    return response


###########  ADD Transcripts ##############
@router.get("/admin/add-transcripts", include_in_schema=False)
@template(template_file="admin/add-transcripts.pt")
def add_show_notes(request: Request):
    vm = TranscriptAddViewModel(request)
    return vm.to_dict()


@router.post("/admin/add-transcripts", include_in_schema=False)
@template()
async def add_transcripts(request: Request):
    vm = TranscriptAddViewModel(request)
    await vm.load()

    if vm.error:
        return vm.to_dict()

    # Add the transcript
    transcript = await transcripts_service.create_transcript(
        vm.season,
        vm.episode_number,
        vm.transcript_1,
        vm.transcript_2,
        vm.published,
    )

    # Redirect to the episode page
    response = fastapi.responses.RedirectResponse(
        url="/episodes/all", status_code=status.HTTP_302_FOUND
    )

    return response
