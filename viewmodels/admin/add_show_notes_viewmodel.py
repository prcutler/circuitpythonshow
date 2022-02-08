from typing import Optional
from xmlrpc.client import Boolean

from starlette.requests import Request

from viewmodels.shared.viewmodel import ViewModelBase


class ShowNotesAddViewModel(ViewModelBase):
    def __init__(self, request: Request):
        super().__init__(request)

        self.season: Optional[int] = None
        self.episode_number: Optional[int] = None
        self.notes_1: Optional[str] = None
        self.timestamp_1: Optional[int] = None
        self.notes_2: Optional[str] = None
        self.timestamp_2: Optional[int] = None
        self.notes_3: Optional[str] = None
        self.timestamp_3: Optional[int] = None
        self.notes_4: Optional[str] = None
        self.timestamp_4: Optional[int] = None
        self.notes_5: Optional[str] = None
        self.timestamp_5: Optional[int] = None
        self.notes_6: Optional[str] = None
        self.timestamp_6: Optional[int] = None
        self.notes_7: Optional[str] = None
        self.timestamp_7: Optional[int] = None
        self.notes_8: Optional[str] = None
        self.timestamp_8: Optional[int] = None
        self.notes_9: Optional[str] = None
        self.timestamp_9: Optional[int] = None
        self.notes_10: Optional[str] = None
        self.timestamp_10: Optional[int] = None
        self.notes_11: Optional[str] = None
        self.timestamp_11: Optional[int] = None
        self.notes_12: Optional[str] = None
        self.timestamp_12: Optional[int] = None

    async def load(self):
        form = await self.request.form()

        self.season = form.get("season")
        self.episode_number = form.get("episode_number")
        self.note_1 = form.get("notes_1")
        self.timestamp_1 = form.get("timestamp_1")
        self.notes_2 = form.get("notes_2")
        self.timestamp_2 = form.get("timestamp_2")
        self.notes_3 = form.get("notes_3")
        self.timestamp_3 = form.get("timestamp_3")
        self.notes_4 = form.get("notes_4")
        self.timestamp_4 = form.get("timestamp_4")
        self.notes_5 = form.get("notes_5")
        self.timestamp_5 = form.get("timestamp_5")
        self.notes_6 = form.get("notes_6")
        self.timestamp_6 = form.get("timestamp_6")
        self.notes_7 = form.get("notes_7")
        self.timestamp_7 = form.get("timestamp_7")
        self.notes_8 = form.get("notes_8")
        self.timestamp_8 = form.get("timestamp_8")
        self.notes_9 = form.get("notes_9")
        self.timestamp_9 = form.get("timestamp_9")
        self.notes_10 = form.get("notes_10")
        self.timestamp_10 = form.get("timestamp_10")
        self.notes_11 = form.get("notes_11")
        self.timestamp_11 = form.get("timestamp_11")
        self.notes_12 = form.get("notes_12")
        self.timestamp_12 = form.get("timestamp_12")

        if not self.season or not self.season.strip():
            self.error = "The season is required."
        if not self.episode_number or not self.episode_number.strip():
            self.error = "The episode number is required."
