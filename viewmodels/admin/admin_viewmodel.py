from typing import Optional

from starlette.requests import Request

from data.user import User
from services import user_service
from viewmodels.shared.viewmodel import ViewModelBase


class AdminViewModel(ViewModelBase):
    def __init__(self, request: Request):
        super().__init__(request)
        
        self.user: Optional[User] = None
        
        user_id = self.user_id
        
        
    async def load(self):
        self.user = await user_service.get_user_by_id(self.user_id)
        
        if self.user_id == None:
            self.error = "You must be logged in to view this page."

        