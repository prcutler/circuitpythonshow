import fastapi
from fastapi_chameleon import template

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