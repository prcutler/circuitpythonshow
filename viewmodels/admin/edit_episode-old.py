from typing import Optional
from xmlrpc.client import Boolean

from starlette.requests import Request
from services import episode_service

from viewmodels.shared.viewmodel import ViewModelBase


class EditEpisodeViewModel(ViewModelBase):
    def __init__(self, request: Request):
        super().__init__(request)

        self.season: Optional[int] = None
        self.episode_number: Optional[int] = None
        self.episode_title: Optional[str] = None
        self.youtube_url: Optional[str] = None
        self.guest_firstname: Optional[str] = None
        self.guest_lastname: Optional[str] = None
        self.topic: Optional[str] = None
        self.record_date: Optional[str] = None
        self.publish_date: Optional[str] = None
        self.guest_image: Optional[str] = None
        self.guest_bio: Optional[str] = None
        self.sponsor_1: Optional[str] = None
        self.sponsor_2: Optional[str] = None
        self.published: Optional[str] = None
        self.episode_length: Optional[int] = None
        self.captivate_url: Optional[str] = None

    async def load(self):
        form = await self.request.form()

        self.season = form.get("season")
        self.episode_number = form.get("episode_number")
        self.episode_title = form.get("episode_title")
        self.youtube_url = form.get("youtube_url")
        self.guest_firstname = form.get("guest_firstname")
        self.guest_lastname = form.get("guest_lastname")
        self.topic = form.get("topic")
        
        self.record_date = form.get("record_date")
        print("record_date: ", self.record_date)
        self.record_date_converted = episode_service.convert_dates(self.record_date)
        print("record_date_converted: ", self.record_date_converted)
        
        self.publish_date = form.get("publish_date")
        self.publish_date_converted = episode_service.convert_dates(self.publish_date)
        
        self.guest_image = form.get("guest_image")
        self.guest_bio = form.get("guest_bio")
        self.sponsor_1 = form.get("sponsor_1")
        self.sponsor_2 = form.get("sponsor_2")
        self.published = form.get("published")
        self.episode_length = form.get("episode_length")
        
        print("Episode length: ", self.episode_length)
        self.episode_length_string = episode_service.convert_episode_length(self.episode_length)
        
        self.captivate_url = form.get("captivate_url")

        if not self.season or not self.season.strip():
            self.error = "The season is required."
        if not self.episode_number or not self.episode_number.strip():
            self.error = "The episode number is required."
        if not self.published:
            self.error = "The published field is required."
