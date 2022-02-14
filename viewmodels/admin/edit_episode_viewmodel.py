from typing import List, Optional
from xmlrpc.client import Boolean

from starlette.requests import Request
from services import episode_service

from viewmodels.shared.viewmodel import ViewModelBase


class EditEpisodeViewModel(ViewModelBase):
    def __init__(self, episode_number, request: Request):
        super().__init__(request)

        self.episode_number: Optional[int] = episode_number

    async def load(self, episode_number):
        
        self.episode_number = episode_number


