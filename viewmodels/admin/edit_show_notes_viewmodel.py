from typing import Optional
from xmlrpc.client import Boolean

from starlette.requests import Request

from viewmodels.shared.viewmodel import ViewModelBase
from services import shownotes_service


class EditShowNotesViewModel(ViewModelBase):
    def __init__(self, episode_number, request: Request):
        super().__init__(request)

        self.episode_number: Optional[int] = episode_number
        self.shownotes_list = []
        
        self.season: Optional[int] = None
        
        self.timestamp_1: Optional[int] = None
        self.notes_1: Optional[str] = None
        
        self.timestamp_2: Optional[int] = None
        self.notes_2: Optional[str] = None
        
        self.login_status = self.is_logged_in

        
    async def load(self):
        
        self.login_status = self.is_logged_in
        
        self.episode_number = self.episode_number
        self.shownotes = await shownotes_service.get_shownotes(self.episode_number)
        
        form = await self.request.form()
        
        self.season = form.get("season")
        
        self.timestamp_1 = form.get("timestamp_1")
        self.notes_1 = form.get("notes_1")
        
        self.timestamp_2 = form.get("timestamp_2")
        self.notes_2 = form.get("notes_2")

        

