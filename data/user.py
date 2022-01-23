import datetime
import sqlalchemy as sa

from data.modelbase import SqlAlchemyBase


class User(SqlAlchemyBase):
    
    __tablename__ = 'users'
    
    id = sa.Column(sa.Integer, primary_key=True, autoincrement=True)
    name = sa.Column(sa.String)
    email = sa.Column(sa.String, index=True, unique=True)
    created_date = sa.Column(sa.DateTime)
    

