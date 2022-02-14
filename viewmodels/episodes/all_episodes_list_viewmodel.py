from starlette.requests import Request
from typing import List, Optional

from viewmodels.shared.viewmodel import ViewModelBase
from services import episode_service
from data.episode import Episode


class AllEpisodesViewModel(ViewModelBase):
    def __init__(self, request: Request):
        super().__init__(request)

        self.episodes: List[Episode] = []

    async def load(self):

        self.episodes = await episode_service.latest_episodes()
