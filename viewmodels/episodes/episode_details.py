from typing import Optional
from xmlrpc.client import Boolean

from starlette.requests import Request

from viewmodels.shared.viewmodel import ViewModelBase

from services import episode_service


class EpisodeDetailsViewModel(ViewModelBase):
    def __init__(self, episode_id, request: Request):
        super().__init__(request)

        self.season: Optional[int] = None
        self.episode_number: Optional[int] = episode_id
        self.episode_title: Optional[str] = None
        self.youtube_url: Optional[str] = None
        self.guest_firstname: Optional[str] = None
        self.guest_lastname: Optional[str] = None
        self.topic: Optional[str] = None
        self.record_date: Optional[str] = None
        self.publish_date: Optional[str] = None
        self.guest_image: Optional[str] = None
        self.guest_bio: Optional[str] = None
        self.sponsor_1: Optional[str] = None
        self.sponsor_2: Optional[str] = None
        self.published: Optional[str] = None
        self.episode_length: Optional[str] = None
        
    async def load(self):
        self.episode_number = await episode_service.latest_episode_id(self.episode_number)
  