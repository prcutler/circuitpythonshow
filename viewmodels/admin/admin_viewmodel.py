from typing import Optional
from sqlalchemy import false

from starlette.requests import Request

from data.user import User
from services import user_service
from viewmodels.shared.viewmodel import ViewModelBase


class AdminViewModel(ViewModelBase):
    def __init__(self, request: Request):
        super().__init__(request)

        self.logged_in = None
        
    async def load(self):
        
        print(self.is_logged_in)
        if self.is_logged_in is False:
            self.logged_in = False
        else:
            print("Viewmodel True statement")
            self.logged_in = True
        
        


    
        
        
