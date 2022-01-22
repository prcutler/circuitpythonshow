from datetime import datetime
from typing import List, Optional


class Episode:
    def __init__(
        self,
        record_date: datetime.date,
        release_date: datetime.date,
        guest: str,
        topic: str,
        season: int,
        episode: int,
        guest_image: Optional[str],
        guest_bio: Optional[str],
   ):
        self.record_date = record_date
        self.release_date = release_date
        self.guest = guest
        self.topic = topic
        self.season = season
        self.episode = episode
        self.guest_image = guest_image
        self.guest_bio = guest_bio
