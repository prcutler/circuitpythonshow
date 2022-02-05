from starlette.requests import Request
from typing import List, Optional

from viewmodels.shared.viewmodel import ViewModelBase
from services import episode_service
from data.episode import Episode


class AllEpisodesViewModel(ViewModelBase):
    def __init__(self, request: Request):
        super().__init__(request)
        
        self.episodes: List[Episode] = []       
        
        self.episode_count: int = 0
        
    async def load(self):
        
        print("Loading all viemodel...")
        self.episode_list = await episode_service.get_episode_by_id()
        self.episode_count: int = await episode_service.get_episode_count()
