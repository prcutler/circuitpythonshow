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
        # self.episode_number = episode_number
        self.topic: str = ""
        
    async def load(self):
        
        print("Loading all viewmodel...")
        self.episodes = await episode_service.latest_episodes()
        self.episode_count: int = await episode_service.get_episode_count()
        
        # self.topic: str = await episode_service.get_episode_topic(self.episode_number)