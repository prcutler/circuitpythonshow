from typing import Optional
from xmlrpc.client import DateTime

from starlette.requests import Request

from services import user_service
from viewmodels.shared.viewmodel import ViewModelBase


class EpisodeEntryViewModel(ViewModelBase):
    def __init__(self, request: Request):
        super().__init__(request)
        
        self.episode_number: Optional[int] = None
        self.guest_first_name: Optional[str] = None
        self.guest_last_name: Optional[str] = None
        self.recorded_date: Optional[DateTime] = None
        self.publish_date: Optional[DateTime] = None
        self.topic: Optional[str] = None
        self.season: Optional[int] = None
        self.episode: Optional[int] = None
        self.guest_image: Optional[str] = None
        self.guest_biography: Optional[str] = None
        self.show_notes: Optional[str] = None
        
        async def load(self):
            form = await self.request.form()
            self.id = form.get('id')
            self.guest_first_name = form.get('guest_first_name')
            self.guest_last_name = form.get('guest_last_name')
            self.recorded_date = form.get('recorded_date')
            self.publish_date = form.get('publish_date')
            self.topic = form.get('topic')
            self.season = form.get('season')
            self.episode = form.get('episode')
            self.guest_image = form.get('guest_image')
            self.guest_biography = form.get('guest_biography')
            self.show_notes = form.get('show_notes')