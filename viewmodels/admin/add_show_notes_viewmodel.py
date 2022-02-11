from typing import Optional
from xmlrpc.client import Boolean

from starlette.requests import Request

from viewmodels.shared.viewmodel import ViewModelBase


class ShowNotesAddViewModel(ViewModelBase):
    def __init__(self, request: Request):
        super().__init__(request)

        self.season: Optional[int] = None
        self.episode: Optional[int] = None
        self.published: Optional[int] = None
        
        self.timestamp_1: Optional[int] = None
        self.notes_1: Optional[str] = None
        self.link_1: Optional[str] = None
        
        self.timestamp_2: Optional[int] = None
        self.notes_2: Optional[str] = None
        self.link_2: Optional[str] = None
        
        self.timestamp_3: Optional[int] = None
        self.notes_3: Optional[str] = None
        self.link_3: Optional[str] = None
        
        self.timestamp_4: Optional[int] = None
        self.notes_4: Optional[str] = None
        self.link_4: Optional[str] = None
        
        self.timestamp_5: Optional[int] = None
        self.notes_5: Optional[str] = None
        self.link_5: Optional[str] = None
        
        self.timestamp_6: Optional[int] = None
        self.notes_6: Optional[str] = None
        self.link_6: Optional[str] = None
        
        self.timestamp_7: Optional[int] = None
        self.notes_7: Optional[str] = None
        self.link_7: Optional[str] = None
        
        self.timestamp_8: Optional[int] = None
        self.notes_8: Optional[str] = None
        self.link_8: Optional[str] = None
        
        self.timestamp_9: Optional[int] = None
        self.notes_9: Optional[str] = None
        self.link_9: Optional[str] = None
        
        self.timestamp_10: Optional[int] = None
        self.notes_10: Optional[str] = None
        self.link_10: Optional[str] = None        
        


    async def load(self):
        form = await self.request.form()
        
        self.season = form.get("season")
        self.episode = form.get("episode")
        self.published = form.get("published")
        
        self.timestamp_1 = form.get("timestamp_1")
        self.notes_1 = form.get("notes_1")
        self.link_1 = form.get("link_1")
        
        self.timestamp_2 = form.get("timestamp_2")
        self.notes_2 = form.get("notes_2")
        self.link_2 = form.get("link_2")
        
        self.timestamp_3: Optional[int] = None
        self.notes_3: Optional[str] = None
        self.link_3: Optional[str] = None
        
        self.timestamp_4: Optional[int] = None
        self.notes_4: Optional[str] = None
        self.link_4: Optional[str] = None
        
        self.timestamp_5: Optional[int] = None
        self.notes_5: Optional[str] = None
        self.link_5: Optional[str] = None
        
        self.timestamp_6: Optional[int] = None
        self.notes_6: Optional[str] = None
        self.link_6: Optional[str] = None
        
        self.timestamp_7: Optional[int] = None
        self.notes_7: Optional[str] = None
        self.link_7: Optional[str] = None
        
        self.timestamp_8: Optional[int] = None
        self.notes_8: Optional[str] = None
        self.link_8: Optional[str] = None
        
        self.timestamp_9: Optional[int] = None
        self.notes_9: Optional[str] = None
        self.link_9: Optional[str] = None
        
        self.timestamp_10: Optional[int] = None
        self.notes_10: Optional[str] = None
        self.link_10: Optional[str] = None
        
        print("Adding show notes from viewmodel", self.season, self.episode)

        if not self.season or not self.season.strip():
            self.error = "The season is required."
        if not self.episode or not self.episode.strip():
            self.error = "The episode number is required."
