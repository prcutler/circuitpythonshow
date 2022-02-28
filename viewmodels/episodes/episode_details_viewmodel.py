from typing import List, Optional
from xmlrpc.client import Boolean
import fastapi
import fastapi_chameleon

from starlette.requests import Request

from viewmodels.shared.viewmodel import ViewModelBase
from services import episode_service
from services import shownotes_service
from data.episode import Episode
from data.shownotes import ShowNotes


class EpisodeDetailsViewModel(ViewModelBase):
    def __init__(self, episode_number, request: Request):
        super().__init__(request)

        self.episode_number: Optional[int] = episode_number
        # print(self.episode_number)
        self.topic: Optional[str] = None

        self.publish_date: Optional[str] = None
        self.record_date: Optional[str] = None

        self.episode_info = []
        self.episode_length: [str] = "0"

        self.shownotes: List[ShowNotes] = []

        self.timestamp_1: [str] = ""
        self.timestamp_2: [str] = ""
        self.timestamp_3: [str] = ""
        self.timestamp_4: [str] = ""
        self.timestamp_5: [str] = ""
        self.timestamp_6: [str] = ""
        self.timestamp_7: [str] = ""
        self.timestamp_8: [str] = ""
        self.timestamp_9: [str] = ""
        self.timestamp_10: [str] = ""

    async def load(self, episode_number):

        self.episode_number = episode_number

        self.episode_info = await episode_service.get_episode_info(self.episode_number)

        if self.episode_info is None:
            return

        self.episode_length = await episode_service.get_episode_length(
            self.episode_number
        )

        self.publish_date = await episode_service.get_publish_date(self.episode_number)
        self.record_date = await episode_service.get_record_date(self.episode_number)

        episode = int(episode_number)
        self.shownotes = await shownotes_service.get_shownotes(episode)

        self.timestamp_1 = await episode_service.get_timestamp_seconds(self.episode_number, 1)
        self.timestamp_2 = await episode_service.get_timestamp_seconds(self.episode_number, 2)
        self.timestamp_3 = await episode_service.get_timestamp_seconds(self.episode_number, 3)
        self.timestamp_4 = await episode_service.get_timestamp_seconds(self.episode_number, 4)
        self.timestamp_5 = await episode_service.get_timestamp_seconds(self.episode_number, 5)
        self.timestamp_6 = await episode_service.get_timestamp_seconds(self.episode_number, 6)
        self.timestamp_7 = await episode_service.get_timestamp_seconds(self.episode_number, 7)
        self.timestamp_8 = await episode_service.get_timestamp_seconds(self.episode_number, 8)
        self.timestamp_9 = await episode_service.get_timestamp_seconds(self.episode_number, 9)
        self.timestamp_10 = await episode_service.get_timestamp_seconds(self.episode_number, 10)




