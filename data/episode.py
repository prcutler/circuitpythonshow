import datetime
from typing import List, Optional
import sqlalchemy as sa

from data.modelbase import SqlAlchemyBase


class Episode(SqlAlchemyBase):

    __tablename__ = "episodes"

    id: int = sa.Column(sa.Integer, primary_key=True, autoincrement=True)

    season: int = sa.Column(sa.Integer)
    episode_number: int = sa.Column(sa.Integer)
    episode_title: str = sa.Column(sa.String)
    youtube_url: str = sa.Column(sa.String)
    guest_firstname: str = sa.Column(sa.String)
    guest_lastname: str = sa.Column(sa.String)
    topic: str = sa.Column(sa.String)
    record_date: str = sa.Column(sa.String)
    publish_date: str = sa.Column(sa.String)
    guest_image: str = sa.Column(sa.String)
    guest_bio: str = sa.Column(sa.String)
    sponsor_1: str = sa.Column(sa.String)
    sponsor_2 = sa.Column(sa.String)
    published: int = sa.Column(sa.Integer)
    episode_length: str = sa.Column(sa.String)
    
    
