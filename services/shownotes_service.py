from typing import List, Optional

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
    
  
    async with db_session.create_async_session() as session:
        print("Add to database from service")
        session.add(shownotes)
        await session.commit()
    
    return shownotes
    
