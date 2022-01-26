import datetime
from typing import List, Optional
import sqlalchemy as sa

from data.modelbase import SqlAlchemyBase

class Episode(SqlAlchemyBase):
    
    __tablename__='episodes'
    
    id: str = sa.Column(sa.Integer, primary_key=True, autoincrement=True)
    guest_firstname: str = sa.Column(sa.String)
    guest_lastname: str = sa.Column(sa.String)
    record_date: datetime.datetime = sa.Column(sa.DateTime)
    publish_date: datetime.datetime = sa.Column(sa.DateTime)
    topic: str = sa.Column(sa.String)
    season: int = sa.Column(sa.Integer)
    episode: int = sa.Column(sa.Integer)
    guest_image: str = sa.Column(sa.String)
    guest_bio: str = sa.Column(sa.String)
    show_notes : str = sa.Column(sa.String)
    
    
    