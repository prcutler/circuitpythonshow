from typing import List, Optional

import sqlalchemy.orm
from sqlalchemy import func
from sqlalchemy.future import select

import datetime

from data import db_session
from data.transcript import Transcript
from data.episode import Episode

async def create_transcript(
    season: int, 
    episode_number: int,
    published: int,
    transcript_1: str,
    transcript_2: str,
) -> Transcript:
    
    transcript = Transcript()
    
    transcript.season = season
    transcript.episode_number = episode_number
    transcript.published = published
    transcript.transcript_1 = transcript_1
    transcript.transcript_2 = transcript_2
    
    async with db_session.create_async_session() as session:
        session.add(transcript)
        await session.commit()
    
    return transcript


#### GET TRANSCRIPT BY EPISODE NUMBER ####
async def get_transcript_1(episode_number) -> int:
    async with db_session.create_async_session() as session:
        query = (
            select(Transcript.transcript_1)
            .filter(Transcript.episode_number == episode_number)
            )

        result = await session.execute(query)
        return result.scalar()