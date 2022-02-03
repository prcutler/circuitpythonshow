from starlette.requests import Request
from typing import List, Optional

from viewmodels.shared.viewmodel import ViewModelBase
from services import episode_service
from data import Episode


class IndexViewModel(ViewModelBase):
    def __init__(self, request: Request):
        super().__init__(request)
        
        self.episode_list: List[Episode] = []

    async def load(self):
        self.episode_list = await episode_service.list_all_episode_info()
