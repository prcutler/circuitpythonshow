from typing import Optional
from xmlrpc.client import Boolean

from starlette.requests import Request

from viewmodels.shared.viewmodel import ViewModelBase


class EpisodeAddViewModel(ViewModelBase):
    def __init__(self, request: Request):
        super().__init__(request)
        
        self.season: Optional[int] = None
        self.episode_number: Optional[int] = None
        self.episode_title: Optional[str] = None
        self.youtube: Optional[str] = None
        self.guest_first_name: Optional[str] = None
        self.guest_last_name: Optional[str] = None
        self.topic: Optional[str] = None
        self.record_date: Optional[str] = None
        self.publish_date: Optional[str] = None
        self.guest_image: Optional[str] = None
        self.guest_bio: Optional[str] = None
        self.show_notes: Optional[str] = None
        self.sponsor1: Optional[str] = None
        self.sponsor2: Optional[str] = None
        self.published: Optional[str] = None

    async def load(self):
        form = await self.request.form()
        self.season = form.get('season')
        self.episode_number = form.get('episode_number')
        self.episode_title = form.get('episode_title')
        self.youtube = form.get('youtube')
        self.guest_first_name = form.get('guest_first_name')
        self.guest_last_name = form.get('guest_last_name')
        self.topic = form.get('topic')
        self.record_date = form.get('record_date')
        self.publish_date = form.get('publish_date')
        self.guest_image = form.get('guest_image')
        self.guest_bio = form.get('guest_bio')
        self.show_notes = form.get('show_notes')
        self.sponsor1 = form.get('sponsor1')
        self.sponsor2 = form.get('sponsor2')
        self.published = form.get('published')

        if not self.season or not self.season.strip():
            self.error = "The season is required."
        if not self.episode_number or not self.episode_number.strip():
            self.error = "The episode number is required."
        if not self.published:
            self.error = "The published field is required."
