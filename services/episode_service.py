from typing import List, Optional

import sqlalchemy.orm
from sqlalchemy import func
from sqlalchemy.future import select

import datetime

from data import db_session
from data.episode import Episode


async def create_episode(
    season: int,
    episode_number: int,
    episode_title: str,
    youtube_url: str,
    guest_firstname: str,
    guest_lastname: str,
    topic: str,
    record_date: str,
    publish_date: str,
    guest_image: str,
    guest_bio: str,
    sponsor_1: str,
    sponsor_2: str,
    published: int,
    show_notes: str,
    episode_length: str
) -> Episode:

    episode = Episode()

    episode.season = season
    episode.episode_number = episode_number
    episode.episode_title = episode_title
    episode.youtube_url = youtube_url
    episode.guest_firstname = guest_firstname
    episode.guest_lastname = guest_lastname
    episode.topic = topic
    episode.record_date = record_date
    episode.publish_date = publish_date
    episode.guest_image = guest_image
    episode.guest_bio = guest_bio
    episode.sponsor_1 = sponsor_1
    episode.sponsor_2 = sponsor_2
    episode.published = published
    episode.show_notes = show_notes
    episode.episode_length = episode_length

    async with db_session.create_async_session() as session:
        session.add(episode)
        await session.commit()

    return episode


async def latest_episodes(limit: int = 5) -> List[Episode]:
    async with db_session.create_async_session() as session:
        query = select(Episode) \
            .options(
            sqlalchemy.orm.joinedload(Episode.Episode)) \
            .order_by(Episode.created_date.desc()) \
            .limit(limit)

        results = await session.execute(query)
        episodes = results.scalars()

        return list({r.episode for r in episodes})
    
    
### GET ALL EPISODES ###

async def get_episode_by_id() -> Optional[Episode]:
    async with db_session.create_async_session() as session:
        query = select(Episode).filter(Episode.id).order_by(Episode.id.desc())
        result = await session.execute(query)

        
        results = await session.execute(query)
        episodes = results.scalar()
        
        print(episodes, type(episodes))
        return episodes
        
        
#### GET EPISODE COUNT ####
    
async def get_episode_count() -> int:
    async with db_session.create_async_session() as session:
        query = select(func.count(Episode.id))
        result = await session.execute(query)
        
        print("Result: ", result.scalar())
        return result.scalar()
        
        