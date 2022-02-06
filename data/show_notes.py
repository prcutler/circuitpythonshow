import datetime
import sqlalchemy as sa

from data.modelbase import SqlAlchemyBase


class User(SqlAlchemyBase):
    __tablename__ = "show_notes"

    id: int = sa.Column(sa.Integer, primary_key=True, autoincrement=True)
    season: int = sa.Column(sa.Integer)
    episode: int = sa.Column(sa.Integer, index=True,)
    timestamp_2: str = sa.Column(sa.String)
    notes_2: str = sa.Column(sa.String)
    timestamp_3: str = sa.Column(sa.String)
    notes_3: str = sa.Column(sa.String)
    timestamp_4: str = sa.Column(sa.String)
    notes_4: str = sa.Column(sa.String)
    timestamp_5: str = sa.Column(sa.String)
    notes_5: str = sa.Column(sa.String)
    timestamp_6: str = sa.Column(sa.String)
    notes_6: str = sa.Column(sa.String)
    timestamp_7: str = sa.Column(sa.String)
    notes_7: str = sa.Column(sa.String)
    timestamp_8: str = sa.Column(sa.String)
    notes_8: str = sa.Column(sa.String)
    timestamp_9: str = sa.Column(sa.String)
    notes_9: str = sa.Column(sa.String)
    timestamp_10: str = sa.Column(sa.String)
    notes_10: str = sa.Column(sa.String)
    timestamp_11: str = sa.Column(sa.String)
    notes_11: str = sa.Column(sa.String)
    timestamp_12: str = sa.Column(sa.String)
    notes_12: str = sa.Column(sa.String)
    
