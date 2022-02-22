from typing import List, Optional

import sqlalchemy.orm
from sqlalchemy import func
from sqlalchemy.future import select

from datetime import datetime, timedelta
import pendulum

from data import db_session
from data.episode import Episode


#### CREATE EPISODE ####
async def create_episode(
    season: int,
    episode_number: int,
    episode_title: str,
    youtube_url: str,
    guest_firstname: str,
    guest_lastname: str,
    topic: str,
    record_date: str,
    record_date_converted: str,
    publish_date: str,
    publish_date_converted: str,
    guest_image: str,
    guest_bio_1: str,
    guest_bio_2: str,
    sponsor_1: str,
    sponsor_2: str,
    published: int,
    episode_length: int,
    episode_length_converted: str,
    captivate_url: str,
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
    episode.record_date_converted = record_date_converted
    episode.publish_date = publish_date
    episode.publish_date_converted = publish_date_converted
    episode.guest_image = guest_image
    episode.guest_bio_1 = guest_bio_1
    episode.guest_bio_2 = guest_bio_2
    episode.sponsor_1 = sponsor_1
    episode.sponsor_2 = sponsor_2
    episode.published = published
    episode.episode_length = episode_length
    episode.episode_length_string = episode_length_converted
    episode.captivate_url = captivate_url

    async with db_session.create_async_session() as session:
        session.add(episode)
        await session.commit()

    return episode


#### EDIT EPISODE ####
async def edit_episode(
    season: int,
    episode: int,
    episode_title: str,
    youtube_url: str,
    guest_firstname: str,
    guest_lastname: str,
    topic: str,
    record_date: str,
    record_date_converted: str,
    publish_date: str,
    publish_date_converted: str,
    guest_image: str,
    guest_bio_1: str,
    guest_bio_2: str,
    sponsor_1: str,
    sponsor_2: str,
    published: int,
    episode_length: int,
    episode_length_converted: str,
    captivate_url: str,
):

    async with db_session.create_async_session() as session:
        query = select(Episode).filter(Episode.episode_number == episode)
        results = await session.execute(query)
        print("Service results: ", results)
        
        episode_results = results.scalar()
        
        print("Episode: ", episode)
        print("Service episode query is ", episode)

        print(season, type(season))
        episode_results.season = season
        episode_results.episode_number = episode
        episode_results.episode_title = episode_title
        episode_results.youtube_url = youtube_url
        episode_results.guest_firstname = guest_firstname
        episode_results.guest_lastname = guest_lastname
        episode_results.topic = topic
        episode_results.record_date = record_date
        
        
        episode_results.record_date_converted = record_date_converted
        
        episode_results.publish_date = publish_date
        
        
        episode_results.publish_date_converted = publish_date_converted
        episode_results.guest_image = guest_image
        
        episode_results.guest_bio_1 = guest_bio_1
        episode_results.guest_bio_2 = guest_bio_2
        episode_results.sponsor_1 = sponsor_1
        episode_results.sponsor_2 = sponsor_2
        episode_results.published = published
        episode_results.episode_length = episode_length
        episode_results.episode_length_string = episode_length_converted
        episode_results.captivate_url = captivate_url

        await session.commit()

    return episode


### GET LIST OF ALL PUBLISHED EPISODES ###
async def latest_episodes() -> List[Episode]:
    async with db_session.create_async_session() as session:
        query = (
            select(Episode)
            .filter(Episode.published == 1)
            .order_by(Episode.episode_number.desc())
        )

        results = await session.execute(query)
        episodes = results.scalars()
        # print("Episodes: ", episodes, type(episodes))

        return episodes


### GET EPISODE INFO BY ID ###
async def get_episode_info(episode_id) -> (Episode):
    async with db_session.create_async_session() as session:
        query = (
            select(Episode)
            .filter(Episode.episode_number == episode_id)
            .order_by(Episode.episode_number.desc())
        )

        results = await session.execute(query)
        episode_info = results.scalar()
        # print("Episodes: ", episodes, type(episodes))

        return episode_info


async def get_episode_length(episode_number) -> int:
    async with db_session.create_async_session() as session:
        query = select(Episode.episode_length).filter(
            Episode.episode_number == episode_number
        )
        result = await session.execute(query)

        results_seconds = result.scalar()
        # print(type(results_seconds), results_seconds)

        def convert(results_seconds):
            string_result = str(timedelta(seconds=results_seconds))
            # print("Conversion: ", string_result)

            return string_result

        conversion_time = convert(results_seconds)
        return conversion_time


def convert_episode_length(episode_length):
    int_episode_length = int(episode_length)
    episode_length_converted = str(timedelta(seconds=int_episode_length))
    # print(episode_length_converted, "in service")

    return episode_length_converted


#### GET LAST EPISODE PUBLISH AND RECORDED DATES ####
async def get_publish_date(episode_number) -> int:
    async with db_session.create_async_session() as session:
        query = select(Episode.publish_date).filter(
            Episode.episode_number == episode_number
        )
        result = await session.execute(query)

    publish_results = result.scalar()

    pend_object = pendulum.parse(publish_results)
    publish_date = pend_object.to_formatted_date_string()

    return publish_date


async def get_record_date(episode_number) -> int:
    async with db_session.create_async_session() as session:
        query = select(Episode.record_date).filter(
            Episode.episode_number == episode_number
        )
        result = await session.execute(query)

        publish_results = result.scalar()

    pend_object = pendulum.parse(publish_results)
    record_date = pend_object.to_formatted_date_string()

    return record_date


def convert_dates(form_date):
    format = "%Y%m%d"
    # print(form_date)
    pend_object = pendulum.parse(form_date)
    pend_convert = pend_object.to_date_string()
    # print("Pendulum says: ", pend_convert)
    results_dates_converted = pend_convert
    # print("Convert in service: ", results_dates_converted)

    return results_dates_converted


#### GET EPISODE COUNT ####
async def get_episode_count() -> int:
    async with db_session.create_async_session() as session:
        query = select(func.count(Episode.id).filter(Episode.published == 1))
        result = await session.execute(query)

        return result.scalar()


#### GET GUEST NAMES ####
async def get_guest_firstname() -> str:
    async with db_session.create_async_session() as session:
        query = (
            select(Episode.guest_firstname)
            .filter(Episode.published == 1)
            .order_by(Episode.episode_number.desc())
        )
        result = await session.execute(query)

        return result.scalar()


async def get_guest_lastname() -> str:
    async with db_session.create_async_session() as session:
        query = (
            select(Episode.guest_lastname)
            .filter(Episode.published == 1)
            .order_by(Episode.episode_number.desc())
        )
        result = await session.execute(query)

        return result.scalar()


#### GET LAST EPISODE NUMBER ####
async def get_last_episode_number() -> int:
    async with db_session.create_async_session() as session:
        query = (
            select(Episode.episode_number)
            .filter(Episode.published == 1)
            .order_by(Episode.episode_number.desc())
        )
        result = await session.execute(query)

        return result.scalar()


#### GET THE EPISODE TOPIC BY EPISODE NUMBER ####
async def get_episode_topic(episode_number) -> str:
    async with db_session.create_async_session() as session:
        query = select(Episode).filter(Episode.episode_number == episode_number)
        result = await session.execute(query)

        # print("Result: ", type(result.scalar), result.scalar())

        return result.scalar()


#### GET LAST EPISODE TOPIC ####
async def get_last_topic() -> int:
    async with db_session.create_async_session() as session:
        query = (
            select(Episode.topic)
            .filter(Episode.published == 1)
            .order_by(Episode.episode_number.desc())
        )
        result = await session.execute(query)

        return result.scalar()


### GET LIST OF ALL EPISODE NUMBERS FOR ADMIN PANEL ###
async def get_episode_number_list() -> List[Episode]:
    async with db_session.create_async_session() as session:
        query = select(Episode).order_by(Episode.episode_number.desc())

        results = await session.execute(query)
        episode_number_list = results.scalars()
        # print("Episodes: ", episodes, type(episodes))

        return episode_number_list
