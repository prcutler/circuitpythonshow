import datetime
from typing import List, Optional
import sqlalchemy as sa

from data.modelbase import SqlAlchemyBase


class Episode(SqlAlchemyBase):

    __tablename__ = "transcripts"

    season: int = sa.Column(sa.Integer)
    episode_number: int = sa.Column(sa.Integer, index=True)
    transcript_1: str = sa.Column(sa.String)
    transcript_2: str = sa.Column(sa.String)
