from typing import List, Optional
from xmlrpc.client import Boolean

from starlette.requests import Request
from services import episode_service

from viewmodels.shared.viewmodel import ViewModelBase


class EditEpisodeViewModel(ViewModelBase):
    def __init__(self, episode_number, request: Request):
        super().__init__(request)

        self.login_status = self.is_logged_in

        self.episode_number: Optional[int] = episode_number
        self.episode_info = []

        self.season: Optional[int] = None
        self.episode_title: Optional[str] = None
        self.youtube_url: Optional[str] = None
        self.guest_firstname: Optional[str] = None
        self.guest_lastname: Optional[str] = None
        self.topic: Optional[str] = None
        self.record_date: Optional[str] = None
        self.record_date_converted: Optional[str] = None
        self.publish_date: Optional[str] = None
        self.publish_date_converted: Optional[str] = None
        self.guest_image: Optional[str] = None
        self.guest_bio_1: Optional[str] = None
        self.guest_bio_2: Optional[str] = None
        self.sponsor_1: Optional[str] = None
        self.sponsor_2: Optional[str] = None
        self.published: Optional[int] = None
        self.episode_length: Optional[int] = None
        self.episode_length_string: Optional[str] = None
        self.captivate_url: Optional[str] = None

    async def load(self):

        self.login_status = self.is_logged_in

        self.episode_number = self.episode_number
        print("Viewmodel Episode Number: ", self.episode_number)
        self.episode_info = await episode_service.get_episode_info(self.episode_number)

        form = await self.request.form()

        self.season = form.get("season")
        self.episode_title = form.get("episode_title")
        self.youtube_url = form.get("youtube_url")
        self.guest_firstname = form.get("guest_firstname")
        self.guest_lastname = form.get("guest_lastname")
        self.topic = form.get("topic")
        self.record_date = form.get("record_date")
        # self.record_date_converted = episode_service.convert_dates(self.record_date)
        self.publish_date = form.get("publish_date")
        # self.publish_date_converted = episode_service.convert_dates(self.publish_date)
        self.guest_image = form.get("guest_image")
        self.guest_bio_1 = form.get("guest_bio_1")
        self.guest_bio_2 = form.get("guest_bio_2")
        self.sponsor_1 = form.get("sponsor_1")
        self.sponsor_2 = form.get("sponsor_2")
        self.published = form.get("published")
        self.episode_length = form.get("episode_length")
        # self.episode_length_string = episode_service.convert_episode_length(self.episode_length)
        self.captivate_url = form.get("captivate_url")
