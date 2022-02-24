from starlette.requests import Request
from typing import List, Optional

from viewmodels.shared.viewmodel import ViewModelBase

from services import episode_service
from data.episode import Episode


class IndexViewModel(ViewModelBase):
    def __init__(self, request: Request):
        super().__init__(request)

        self.episodes: List[Episode] = []
        self.episode_count: int = 0
        self.episode_number: int = 0

        self.guest_firstname: str = ""
        self.guest_lastname: str = ""

        self.topic: str = ""

    async def load(self):

        self.episodes = await episode_service.latest_episodes()
        self.episode_count: int = await episode_service.get_episode_count()
        self.episode_number = await episode_service.get_last_episode_number()
        
        self.publish_date = await episode_service.get_publish_date(self.episode_number)

        self.guest_firstname = await episode_service.get_guest_firstname()
        self.guest_lastname = await episode_service.get_guest_lastname()

        self.topic = await episode_service.get_last_topic()
        
    
