import datetime
import sqlalchemy as sa

from data.modelbase import SqlAlchemyBase


class User(SqlAlchemyBase):
    
    __tablename__ = 'users'
    
    id: int = sa.Column(sa.Integer, primary_key=True, autoincrement=True)
    username: str = sa.Column(sa.String, unique=True)
    password: str = sa.Column(sa.String)
    su: bool = sa.Column(sa.Boolean)
    

