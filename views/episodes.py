import fastapi
from fastapi_chameleon import template

router = fastapi.APIRouter()


@router.get("/episodes/all")
@template(template_file="episodes/all.pt")
def all():
    return {}
