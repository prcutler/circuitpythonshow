from typing import Optional, List
from sqlalchemy import false

from starlette.requests import Request

from data.user import User
from services import user_service, episode_service
from viewmodels.shared.viewmodel import ViewModelBase
from data.episode import Episode


class AdminViewModel(ViewModelBase):
    def __init__(self, request: Request):
        super().__init__(request)

        self.episode_number: Optional[int] = None
        self.episodes: List[Episode] = []
        
        self.login_status = None
        
 
    async def load(self):
        
        print("Logged in? ", self.is_logged_in)
        
        if self.is_logged_in is False:            
            self.login_status = False

        
        else:
            self.episodes = await episode_service.latest_episodes()
            
            self.login_status = True
            
            form = await self.request.form()
            self.episode_number = form.get("episode_number")
            
        
        
        


    
        
        
