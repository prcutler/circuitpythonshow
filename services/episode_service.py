from typing import Optional

from sqlalchemy import func
from sqlalchemy.future import select

import datetime

from data import db_session
from data.user import Episode

async def create_episode(season: int, episode_number: int, episode_title: str, youtube: str, 
                         first_name: str, last_name: str, topic: str, record_date: datetime.datetime,
                         publish_date: datetime.datetime, guest_image: str, guest_bio: str, sponsor_1: str, 
                         sponsor_2: str, published: bool):
    episode = Episode()
    
    create_episode.season = season
    create_episode.episode_number = episode_number
    create_episode.episode_title = episode_title
    create_episode.youtube = youtube
    create_episode.first_name = first_name
    create_episode.last_name = last_name
    create_episode.topic = topic
    create_episode.record_date = record_date
    create_episode.publish_date = publish_date
    create_episode.guest_image = guest_image
    create_episode.guest_bio = guest_bio
    create_episode.sponsor_1 = sponsor_1
    create_episode.sponsor_2 = sponsor_2
    create_episode.published = published
    
    async with db_session.create_async_session() as session:
        session.add(episode)
        await session.commit()
        
    return episode

