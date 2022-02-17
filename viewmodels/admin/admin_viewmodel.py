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

        self.login_status = self.is_logged_in
        
        self.episodes = await episode_service.latest_episodes()
            
           
        form = await self.request.form()
        self.episode_number = form.get("episode_number")
            
        
        
        


    
        
        
