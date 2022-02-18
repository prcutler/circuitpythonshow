import datetime
import sqlalchemy as sa

from data.modelbase import SqlAlchemyBase


class ShowNotes(SqlAlchemyBase):
    __tablename__ = "shownotes"

    id: int = sa.Column(sa.Integer, primary_key=True, autoincrement=True)
    
    season: int = sa.Column(sa.Integer)
    episode: int = sa.Column(sa.Integer, index=True)
    published: int = sa.Column(sa.Integer, index=True)

    timestamp_1: int = sa.Column(sa.Integer)
    notes_1: str = sa.Column(sa.String)
    link_1: str = sa.Column(sa.String)
    link_text_1: str = sa.Column(sa.String)

    timestamp_2: int = sa.Column(sa.Integer)
    notes_2: str = sa.Column(sa.String)
    link_2: str = sa.Column(sa.String)
    link_text_2: str = sa.Column(sa.String)

    timestamp_3: int = sa.Column(sa.Integer)
    notes_3: str = sa.Column(sa.String)
    link_3: str = sa.Column(sa.String)
    link_text_3: str = sa.Column(sa.String)
    
    timestamp_4: int = sa.Column(sa.Integer)
    notes_4: str = sa.Column(sa.String)
    link_4: str = sa.Column(sa.String)
    link_text_4: str = sa.Column(sa.String)
    
    timestamp_5: int = sa.Column(sa.Integer)
    notes_5: str = sa.Column(sa.String)
    link_5: str = sa.Column(sa.String)
    link_text_5: str = sa.Column(sa.String)
    
    timestamp_6: int = sa.Column(sa.Integer)
    notes_6: str = sa.Column(sa.String)
    link_6: str = sa.Column(sa.String)
    link_text_6: str = sa.Column(sa.String)
    
    timestamp_7: int = sa.Column(sa.Integer)
    notes_7: str = sa.Column(sa.String)
    link_7: str = sa.Column(sa.String)
    link_text_7: str = sa.Column(sa.String)
    
    timestamp_8: int = sa.Column(sa.Integer)
    notes_8: str = sa.Column(sa.String)
    link_8: str = sa.Column(sa.String)
    link_text_8: str = sa.Column(sa.String)
    
    timestamp_9: int = sa.Column(sa.Integer)
    notes_9: str = sa.Column(sa.String)
    link_9: str = sa.Column(sa.String)
    link_text_9: str = sa.Column(sa.String)
   
    timestamp_10: int = sa.Column(sa.Integer)
    notes_10: str = sa.Column(sa.String)
    link_10: str = sa.Column(sa.String)
    link_text_10: str = sa.Column(sa.String)
    
