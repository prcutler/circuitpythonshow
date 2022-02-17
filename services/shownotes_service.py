from typing import List, Optional
from unittest import result

import sqlalchemy.orm
from sqlalchemy import func
from sqlalchemy.future import select

from data import db_session
from data.shownotes import ShowNotes


#### ADD SHOW NOTES ####
async def create_show_notes(
    season: int,
    episode: int,
    published: int,
    timestamp_1: int,
    notes_1: str,
    link_1: str,
    link_text_1: str,
    timestamp_2: int,
    notes_2: str,
    link_2: str,
    link_text_2: str,
    timestamp_3: int,
    notes_3: str,
    link_3: str,
    link_text_3: str,
    timestamp_4: int,
    notes_4: str,
    link_4: str,
    link_text_4: str,
    timestamp_5: int,
    notes_5: str,
    link_5: str,
    link_text_5: str,
    timestamp_6: int,
    notes_6: str,
    link_6: str,
    link_text_6: str,
    timestamp_7: int,
    notes_7: str,
    link_7: str,
    link_text_7: str,
    timestamp_8: int,
    notes_8: str,
    link_8: str,
    link_text_8: str,
    timestamp_9: int,
    notes_9: str,
    link_9: str,
    link_text_9: str,
    timestamp_10: int,
    notes_10: str,
    link_10: str,
    link_text_10: str,
) -> ShowNotes:

    shownotes = ShowNotes()

    shownotes.season = season
    shownotes.episode = episode
    shownotes.published = published

    shownotes.timestamp_1 = timestamp_1
    shownotes.notes_1 = notes_1
    shownotes.link_1 = link_1
    shownotes.link_text_1 = link_text_1

    shownotes.timestamp_2 = timestamp_2
    shownotes.notes_2 = notes_2
    shownotes.link_2 = link_2
    shownotes.link_text_2 = link_text_2

    shownotes.timestamp_3 = timestamp_3
    shownotes.notes_3 = notes_3
    shownotes.link_3 = link_3
    shownotes.link_text_3 = link_text_3

    shownotes.timestamp_4 = timestamp_4
    shownotes.notes_4 = notes_4
    shownotes.link_4 = link_4
    shownotes.link_text_4 = link_text_4

    shownotes.timestamp_5 = timestamp_5
    shownotes.notes_5 = notes_5
    shownotes.link_5 = link_5
    shownotes.link_text_5 = link_text_5

    shownotes.timestamp_6 = timestamp_6
    shownotes.notes_6 = notes_6
    shownotes.link_6 = link_6
    shownotes.link_text_6 = link_text_6

    shownotes.timestamp_7 = timestamp_7
    shownotes.notes_7 = notes_7
    shownotes.link_7 = link_7
    shownotes.link_text_7 = link_text_7

    shownotes.timestamp_8 = timestamp_8
    shownotes.notes_8 = notes_8
    shownotes.link_8 = link_8
    shownotes.link_text_8 = link_text_8

    shownotes.timestamp_9 = timestamp_9
    shownotes.notes_9 = notes_9
    shownotes.link_9 = link_9
    shownotes.link_text_9 = link_text_9

    shownotes.timestamp_ = timestamp_10
    shownotes.notes_10 = notes_10
    shownotes.link_10 = link_10
    shownotes.link_text_10 = link_text_10

    async with db_session.create_async_session() as session:
        print("Add to database from service")
        session.add(shownotes)
        await session.commit()

    return shownotes


#### GET SHOW NOTES ####
async def get_shownotes(episode_number) -> List[ShowNotes]:
    async with db_session.create_async_session() as session:
        query = select(ShowNotes).filter(ShowNotes.episode == episode_number)

        results = await session.execute(query)
        shownotes = results.scalar()
        # print(shownotes)

        return shownotes
    
    
#### EDIT SHOW NOTES ####
async def edit_show_notes(
    season: int,
    episode: int,
    timestamp_1: int,
    notes_1: str,
    timestamp_2: int,
    notes_2: str,
):
    async with db_session.create_async_session() as session:
        print("Add to database from service")

        query = select(ShowNotes).filter(ShowNotes.episode == episode)

        results = await session.execute(query)
        shownotes = results.scalar()
        
        shownotes.season = season
        shownotes.episode = episode

        shownotes.timestamp_1 = timestamp_1
        shownotes.notes_1 = notes_1

        shownotes.timestamp_2 = timestamp_2
        shownotes.notes_2 = notes_2
            
        await session.commit()
    
    return shownotes
