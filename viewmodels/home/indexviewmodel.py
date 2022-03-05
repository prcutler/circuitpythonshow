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
        
        self.old_episode_number: Optional[int] = None
        self.old_publish_date: Optional[str] = None
        
        self.publish_date: str = ""

        self.old_episode_number: Optional[int] = None
        self.old_publish_date: Optional[str] = None

        self.old_episode: List[Episode] = []

    async def load(self):

        self.episode_count: int = await episode_service.get_episode_count()
        self.episode_number = await episode_service.get_last_episode_number()
        
        self.episodes = await episode_service.get_episode_info(self.episode_number)
        self.publish_date = await episode_service.get_publish_date(self.episode_number)
        
        self.old_episode_number = self.episode_number - 1
        print("Old ep #", self.old_episode_number)
        
        self.old_episode = await episode_service.get_episode_info(self.old_episode_number)
        self.old_publish_date = await episode_service.get_publish_date(self.old_episode_number)

        self.episodes = await episode_service.get_episode_info(self.episode_number)
        self.publish_date = await episode_service.get_publish_date(self.episode_number)

        if self.episode_number > 1:
            self.old_episode_number = self.episode_number - 1
        else:
            self.old_episode_number = self.episode_number

        self.old_episode = await episode_service.get_episode_info(
            self.old_episode_number
        )
        self.old_publish_date = await episode_service.get_publish_date(
            self.old_episode_number
        )

