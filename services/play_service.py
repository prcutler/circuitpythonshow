import random

import data.config as config
from data.album import AlbumInfo
from data.config import my_data
from data.single import SingleInfo
import paho.mqtt.client as mqtt
import time
from PIL import Image


class RandomRecordService:
    @staticmethod
    def get_folder_count2(folder):

        # print(folder)
        lp_count = len(my_data.identity().collection_folders[folder].releases)
        # print(lp_count)

        random_lp = random.randint(0, lp_count)
        # print("Random # = ", random_lp)

        random_album_release_id = (
            my_data.identity().collection_folders[folder].releases[random_lp].release.id
        )
        # print("Random_ID = ", random_album_release_id)

        return random_album_release_id

    @staticmethod
    def get_album_data(album_release_id):

        release_data = config.my_data

        artist_count = 0

        for artist_name in release_data.release(album_release_id).artists:
            artist_name = (
                release_data.release(album_release_id).artists[artist_count].name
            )

            artist_count += 1
            # print(artist_name)

        artist_id = release_data.release(album_release_id).artists[0].name
        artist_url = release_data.release(album_release_id).artists[0].url

        release_id = album_release_id
        release_url = release_data.release(release_id).url
        release_title = release_data.release(album_release_id).title

        #        print("release title in service: , ", release_title)

        release_image_url = release_data.release(album_release_id).images[0]["uri"]
        #        print("release image url in service: , ", release_image_url)
        
        # Publish image URL to local Pi / matrix via MQTT
        
        def on_message(client, userdata, message):
            print("message received ", str(message.payload.decode("utf-8")))
            print("message topic=", message.topic)
            print("message qos=", message.qos)
            print("message retain flag=", message.retain)
            
        def on_publish(client, userdata, result):
            print("data published \n")
            pass
            
        client = mqtt.Client("silversaucer")
        client.on_publish = on_publish
        client.on_message = on_message
        
        client.username_pw_set(config.mqtt_user, config.mqtt_pw)
        client.connect(config.mqtt_broker, config.mqtt_port)
        client.publish(topic=config.mqtt_topic, payload="release_image_url")
        
        client.loop_start
        time.sleep(8)
        client.loop_stop
        
        
        print(client.publish(config.mqtt_topic, release_image_url))

        genres = release_data.release(album_release_id).genres
        album_release_date = release_data.release(album_release_id).year

        main_release_date = release_data.release(album_release_id).master.fetch("year")
        if main_release_date == 0:
            main_release_date = album_release_date
        else:
            main_release_date = main_release_date

        track_title = []
        track_duration = []
        track_position = []

        for tracks in release_data.release(album_release_id).tracklist:
            track_title.append(tracks.title)
            track_duration.append(tracks.duration)
            track_position.append(tracks.position)
            # print(track_title, type(track_title))

        #        tracklist = release_data.release(album_release_id).tracklist.title
        #        print(tracklist)
        
        album_info = AlbumInfo(
            release_id,
            release_url,
            artist_id,
            artist_name,
            release_title,
            artist_url,
            release_image_url,
            genres,
            # discogs_main_id,
            main_release_date,
            album_release_date,
            track_title,
            track_duration,
            track_position,
        )
        #        print("release title in album_info: ", album_info.release_title)

        #print(
        #    album_info.artist_name,
        #    album_info.release_id,
        #    album_info.release_title,
            # album_info.release_image_url,
            # album_info.genres,
            # album_info.album_release_date,
            # album_info.main_release_date,
            # album_info.track_title,
            # album_info.track_duration,
            # album_info.track_position
        #)

        return album_info

        return album_info

    def single_random_folder():
        get_single_random_folder = random.randint(1, 3)

        return get_single_random_folder
    
    def get_image(album_release_id):
        release_data = config.my_data

        release_image_url = release_data.release(album_release_id).images[0]["uri"]
        print("release image url in service: , ", release_image_url)

        img = Image.open("release_image_url")
        img.show()

        resize64_img = img.resize((64, 64))
        rgb_img = resize64_img.convert('P')

        rgb_img.save('albumart.bmp')

