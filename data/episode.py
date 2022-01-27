import datetime
import sqlalchemy as sa

from data.modelbase import SqlAlchemyBase

class Episode(SqlAlchemyBase):
    __tablename__='episodes'
    
    id: int = sa.Column(sa.Integer, primary_key=True, autoincrement=True)
    season: int = sa.Column(sa.Integer)
    episode_number: int = sa.Column(sa.Integer)


    
    