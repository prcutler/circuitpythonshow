from typing import List, Optional

from sqlalchemy.future import select

from data import db_session
from data.transcript import Transcript

# ### ADD TRANSCRIPT ####
async def create_transcript(
    season: int,
    episode_number: int,
    transcript_1: str,
    transcript_2: str,
) -> Transcript:

    transcript = Transcript()

    transcript.season = season
    transcript.episode_number = episode_number
    transcript.transcript_1 = transcript_1
    transcript.transcript_2 = transcript_2

    async with db_session.create_async_session() as session:
        print("Add to database from service")
        session.add(transcript)
        await session.commit()

    return transcript


# ### GET TRANSCRIPT BY EPISODE NUMBER ####
async def get_transcript_1(episode_number) -> int:
    async with db_session.create_async_session() as session:
        query = select(Transcript.transcript_1).filter(
            Transcript.episode_number == episode_number
        )

        result = await session.execute(query)
        return result.scalar()
