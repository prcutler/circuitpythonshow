from typing import List, Optional
from xmlrpc.client import Boolean
import fastapi
import fastapi_chameleon

from starlette.requests import Request

from viewmodels.shared.viewmodel import ViewModelBase
from services import episode_service
from data.episode import Episode


class EpisodeDetailsViewModel(ViewModelBase):
    def __init__(self, episode_number, request: Request):
        super().__init__(request)

        self.episode_number: Optional[int] = episode_number
        # print(self.episode_number)
        self.topic: Optional[str] = None

        self.publish_date: Optional[str] = None
        self.record_date: Optional[str] = None

        self.episode_info = []
        self.episode_length = "0"

    async def load(self, episode_number):

        self.episode_number = episode_number
        # self.episode_info = await episode_service.get_episode_info(self.episode_number)
        # self.publish_date = await episode_service.get_publish_date(self.episode_number)

        self.topic = await episode_service.get_episode_topic(self.episode_number)
        print("Topic: ", self.topic)

        self.episode_info = await episode_service.get_episode_info(self.episode_number)
        
        self.episode_length = await episode_service.get_episode_length(
            self.episode_number
        )
        print("Viewmodel conversion: ", self.episode_length)

        self.publish_date = await episode_service.get_publish_date(self.episode_number)
        self.record_date = await episode_service.get_record_date(self.episode_number)
