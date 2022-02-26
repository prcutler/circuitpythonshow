import sqlalchemy as sa

from data.modelbase import SqlAlchemyBase


class Transcript(SqlAlchemyBase):

    __tablename__ = "transcripts"
    
    id: int = sa.Column(sa.Integer, primary_key=True, autoincrement=True)

    season: int = sa.Column(sa.Integer)
    episode_number: int = sa.Column(sa.Integer, index=True)
    transcript_1: str = sa.Column(sa.String)
    transcript_2: str = sa.Column(sa.String, nullable=True)
