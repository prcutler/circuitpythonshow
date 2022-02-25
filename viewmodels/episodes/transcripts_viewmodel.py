from starlette.requests import Request
from typing import List, Optional

from viewmodels.shared.viewmodel import ViewModelBase
from services import transcripts_service
from data.transcript import Transcript


class TranscriptsViewModel(ViewModelBase):
    def __init__(self, episode_number, request: Request):
        super().__init__(request)

        self.episode_number = episode_number

        self.transcript_1 = ""
        self.transcript_2 = ""

    async def load(self, episode_number):

        self.episode_number = episode_number

        self.transcript_1 = await transcripts_service.get_transcript_1(
            self.episode_number
        )