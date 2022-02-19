from typing import Optional
from xmlrpc.client import Boolean

from starlette.requests import Request

from viewmodels.shared.viewmodel import ViewModelBase


class TranscriptAddViewModel(ViewModelBase):
    def __init__(self, request: Request):
        super().__init__(request)

        self.season: Optional[int] = None
        self.episode_number: Optional[int] = None
        self.transcript_1: Optional[str] = None
        self.transcript_2: Optional[int] = None

        
        self.login_status = self.is_logged_in

    async def load(self):
        
        self.login_status = self.is_logged_in
        
        form = await self.request.form()

        self.season = form.get("season")
        self.episode_number = form.get("episode_number")
        self.transcript_1 = form.get("transcript_1")
        self.transcript_2 = form.get("transcript_2")
        
        if not self.episode_number or not self.episode_number.strip():
            self.error = "The episode number is required."
