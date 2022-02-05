from starlette.requests import Request
from typing import List, Optional

from viewmodels.shared.viewmodel import ViewModelBase
from services import episode_service
from data import Episode


class IndexViewModel(ViewModelBase):
    def __init__(self, request: Request):
        super().__init__(request)
        
        # self.episode_list: List[Episode] = []
        self.episode_number: int = 0
        self.esiposde_count: int = 0
        
    async def load(self):
        
        #self.episode_list = await episode_service.get_episode_by_id()
        #print(self.episode_list)
        self.episode_count: int = await episode_service.get_epiosde_count()
