<?php

declare(strict_types=1);

/**
 * Class CategorySeeder Inserts values in categories table in database
 *
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'parent_id' => null,
                'code' => 'arts',
                'apple_category' => 'Arts',
                'google_category' => 'Arts',
            ],
            [
                'id' => 2,
                'parent_id' => null,
                'code' => 'business',
                'apple_category' => 'Business',
                'google_category' => 'Business',
            ],
            [
                'id' => 3,
                'parent_id' => null,
                'code' => 'comedy',
                'apple_category' => 'Comedy',
                'google_category' => 'Comedy',
            ],
            [
                'id' => 4,
                'parent_id' => null,
                'code' => 'education',
                'apple_category' => 'Education',
                'google_category' => 'Education',
            ],
            [
                'id' => 5,
                'parent_id' => null,
                'code' => 'fiction',
                'apple_category' => 'Fiction',
                'google_category' => '',
            ],
            [
                'id' => 6,
                'parent_id' => null,
                'code' => 'government',
                'apple_category' => 'Government',
                'google_category' => 'Government & Organizations',
            ],
            [
                'id' => 7,
                'parent_id' => null,
                'code' => 'health_and_fitness',
                'apple_category' => 'Health & Fitness',
                'google_category' => 'Health',
            ],
            [
                'id' => 8,
                'parent_id' => null,
                'code' => 'history',
                'apple_category' => 'History',
                'google_category' => '',
            ],
            [
                'id' => 9,
                'parent_id' => null,
                'code' => 'kids_and_family',
                'apple_category' => 'Kids & Family',
                'google_category' => 'Kids & Family',
            ],
            [
                'id' => 10,
                'parent_id' => null,
                'code' => 'leisure',
                'apple_category' => 'Leisure',
                'google_category' => 'Games & Hobbies',
            ],
            [
                'id' => 11,
                'parent_id' => null,
                'code' => 'music',
                'apple_category' => 'Music',
                'google_category' => 'Music',
            ],
            [
                'id' => 12,
                'parent_id' => null,
                'code' => 'news',
                'apple_category' => 'News',
                'google_category' => 'News & Politics',
            ],
            [
                'id' => 13,
                'parent_id' => null,
                'code' => 'religion_and_spirituality',
                'apple_category' => 'Religion & Spirituality',
                'google_category' => 'Religion & Spirituality',
            ],
            [
                'id' => 14,
                'parent_id' => null,
                'code' => 'science',
                'apple_category' => 'Science',
                'google_category' => 'Science & Medicine',
            ],
            [
                'id' => 15,
                'parent_id' => null,
                'code' => 'society_and_culture',
                'apple_category' => 'Society & Culture',
                'google_category' => 'Society & Culture',
            ],
            [
                'id' => 16,
                'parent_id' => null,
                'code' => 'sports',
                'apple_category' => 'Sports',
                'google_category' => 'Sports & Recreation',
            ],
            [
                'id' => 17,
                'parent_id' => null,
                'code' => 'technology',
                'apple_category' => 'Technology',
                'google_category' => 'Technology',
            ],
            [
                'id' => 18,
                'parent_id' => null,
                'code' => 'true_crime',
                'apple_category' => 'True Crime',
                'google_category' => '',
            ],
            [
                'id' => 19,
                'parent_id' => null,
                'code' => 'tv_and_film',
                'apple_category' => 'TV & Film',
                'google_category' => 'TV & Film',
            ],
            [
                'id' => 20,
                'parent_id' => 1,
                'code' => 'books',
                'apple_category' => 'Books',
                'google_category' => '',
            ],
            [
                'id' => 21,
                'parent_id' => 1,
                'code' => 'design',
                'apple_category' => 'Design',
                'google_category' => '',
            ],
            [
                'id' => 22,
                'parent_id' => 1,
                'code' => 'fashion_and_beauty',
                'apple_category' => 'Fashion & Beauty',
                'google_category' => '',
            ],
            [
                'id' => 23,
                'parent_id' => 1,
                'code' => 'food',
                'apple_category' => 'Food',
                'google_category' => '',
            ],
            [
                'id' => 24,
                'parent_id' => 1,
                'code' => 'performing_arts',
                'apple_category' => 'Performing Arts',
                'google_category' => '',
            ],
            [
                'id' => 25,
                'parent_id' => 1,
                'code' => 'visual_arts',
                'apple_category' => 'Visual Arts',
                'google_category' => '',
            ],
            [
                'id' => 26,
                'parent_id' => 2,
                'code' => 'careers',
                'apple_category' => 'Careers',
                'google_category' => '',
            ],
            [
                'id' => 27,
                'parent_id' => 2,
                'code' => 'entrepreneurship',
                'apple_category' => 'Entrepreneurship',
                'google_category' => '',
            ],
            [
                'id' => 28,
                'parent_id' => 2,
                'code' => 'investing',
                'apple_category' => 'Investing',
                'google_category' => '',
            ],
            [
                'id' => 29,
                'parent_id' => 2,
                'code' => 'management',
                'apple_category' => 'Management',
                'google_category' => '',
            ],
            [
                'id' => 30,
                'parent_id' => 2,
                'code' => 'marketing',
                'apple_category' => 'Marketing',
                'google_category' => '',
            ],
            [
                'id' => 31,
                'parent_id' => 2,
                'code' => 'non_profit',
                'apple_category' => 'Non-Profit',
                'google_category' => '',
            ],
            [
                'id' => 32,
                'parent_id' => 3,
                'code' => 'comedy_interviews',
                'apple_category' => 'Comedy Interviews',
                'google_category' => '',
            ],
            [
                'id' => 33,
                'parent_id' => 3,
                'code' => 'improv',
                'apple_category' => 'Improv',
                'google_category' => '',
            ],
            [
                'id' => 34,
                'parent_id' => 3,
                'code' => 'stand_up',
                'apple_category' => 'Stand-Up',
                'google_category' => '',
            ],
            [
                'id' => 35,
                'parent_id' => 4,
                'code' => 'courses',
                'apple_category' => 'Courses',
                'google_category' => '',
            ],
            [
                'id' => 36,
                'parent_id' => 4,
                'code' => 'how_to',
                'apple_category' => 'How To',
                'google_category' => '',
            ],
            [
                'id' => 37,
                'parent_id' => 4,
                'code' => 'language_learning',
                'apple_category' => 'Language Learning',
                'google_category' => '',
            ],
            [
                'id' => 38,
                'parent_id' => 4,
                'code' => 'self_improvement',
                'apple_category' => 'Self-Improvement',
                'google_category' => '',
            ],
            [
                'id' => 39,
                'parent_id' => 5,
                'code' => 'comedy_fiction',
                'apple_category' => 'Comedy Fiction',
                'google_category' => '',
            ],
            [
                'id' => 40,
                'parent_id' => 5,
                'code' => 'drama',
                'apple_category' => 'Drama',
                'google_category' => '',
            ],
            [
                'id' => 41,
                'parent_id' => 5,
                'code' => 'science_fiction',
                'apple_category' => 'Science Fiction',
                'google_category' => '',
            ],
            [
                'id' => 42,
                'parent_id' => 7,
                'code' => 'alternative_health',
                'apple_category' => 'Alternative Health',
                'google_category' => '',
            ],
            [
                'id' => 43,
                'parent_id' => 7,
                'code' => 'fitness',
                'apple_category' => 'Fitness',
                'google_category' => '',
            ],
            [
                'id' => 44,
                'parent_id' => 7,
                'code' => 'medicine',
                'apple_category' => 'Medicine',
                'google_category' => '',
            ],
            [
                'id' => 45,
                'parent_id' => 7,
                'code' => 'mental_health',
                'apple_category' => 'Mental Health',
                'google_category' => '',
            ],
            [
                'id' => 46,
                'parent_id' => 7,
                'code' => 'nutrition',
                'apple_category' => 'Nutrition',
                'google_category' => '',
            ],
            [
                'id' => 47,
                'parent_id' => 7,
                'code' => 'sexuality',
                'apple_category' => 'Sexuality',
                'google_category' => '',
            ],
            [
                'id' => 48,
                'parent_id' => 9,
                'code' => 'education_for_kids',
                'apple_category' => 'Education for Kids',
                'google_category' => '',
            ],
            [
                'id' => 49,
                'parent_id' => 9,
                'code' => 'parenting',
                'apple_category' => 'Parenting',
                'google_category' => '',
            ],
            [
                'id' => 50,
                'parent_id' => 9,
                'code' => 'pets_and_animals',
                'apple_category' => 'Pets & Animals',
                'google_category' => '',
            ],
            [
                'id' => 51,
                'parent_id' => 9,
                'code' => 'stories_for_kids',
                'apple_category' => 'Stories for Kids',
                'google_category' => '',
            ],
            [
                'id' => 52,
                'parent_id' => 10,
                'code' => 'animation_and_manga',
                'apple_category' => 'Animation & Manga',
                'google_category' => '',
            ],
            [
                'id' => 53,
                'parent_id' => 10,
                'code' => 'automotive',
                'apple_category' => 'Automotive',
                'google_category' => '',
            ],
            [
                'id' => 54,
                'parent_id' => 10,
                'code' => 'aviation',
                'apple_category' => 'Aviation',
                'google_category' => '',
            ],
            [
                'id' => 55,
                'parent_id' => 10,
                'code' => 'crafts',
                'apple_category' => 'Crafts',
                'google_category' => '',
            ],
            [
                'id' => 56,
                'parent_id' => 10,
                'code' => 'games',
                'apple_category' => 'Games',
                'google_category' => '',
            ],
            [
                'id' => 57,
                'parent_id' => 10,
                'code' => 'hobbies',
                'apple_category' => 'Hobbies',
                'google_category' => '',
            ],
            [
                'id' => 58,
                'parent_id' => 10,
                'code' => 'home_and_garden',
                'apple_category' => 'Home & Garden',
                'google_category' => '',
            ],
            [
                'id' => 59,
                'parent_id' => 10,
                'code' => 'video_games',
                'apple_category' => 'Video Games',
                'google_category' => '',
            ],
            [
                'id' => 60,
                'parent_id' => 11,
                'code' => 'music_commentary',
                'apple_category' => 'Music Commentary',
                'google_category' => '',
            ],
            [
                'id' => 61,
                'parent_id' => 11,
                'code' => 'music_history',
                'apple_category' => 'Music History',
                'google_category' => '',
            ],
            [
                'id' => 62,
                'parent_id' => 11,
                'code' => 'music_interviews',
                'apple_category' => 'Music Interviews',
                'google_category' => '',
            ],
            [
                'id' => 63,
                'parent_id' => 12,
                'code' => 'business_news',
                'apple_category' => 'Business News',
                'google_category' => '',
            ],
            [
                'id' => 64,
                'parent_id' => 12,
                'code' => 'daily_news',
                'apple_category' => 'Daily News',
                'google_category' => '',
            ],
            [
                'id' => 65,
                'parent_id' => 12,
                'code' => 'entertainment_news',
                'apple_category' => 'Entertainment News',
                'google_category' => '',
            ],
            [
                'id' => 66,
                'parent_id' => 12,
                'code' => 'news_commentary',
                'apple_category' => 'News Commentary',
                'google_category' => '',
            ],
            [
                'id' => 67,
                'parent_id' => 12,
                'code' => 'politics',
                'apple_category' => 'Politics',
                'google_category' => '',
            ],
            [
                'id' => 68,
                'parent_id' => 12,
                'code' => 'sports_news',
                'apple_category' => 'Sports News',
                'google_category' => '',
            ],
            [
                'id' => 69,
                'parent_id' => 12,
                'code' => 'tech_news',
                'apple_category' => 'Tech News',
                'google_category' => '',
            ],
            [
                'id' => 70,
                'parent_id' => 13,
                'code' => 'buddhism',
                'apple_category' => 'Buddhism',
                'google_category' => '',
            ],
            [
                'id' => 71,
                'parent_id' => 13,
                'code' => 'christianity',
                'apple_category' => 'Christianity',
                'google_category' => '',
            ],
            [
                'id' => 72,
                'parent_id' => 13,
                'code' => 'hinduism',
                'apple_category' => 'Hinduism',
                'google_category' => '',
            ],
            [
                'id' => 73,
                'parent_id' => 13,
                'code' => 'islam',
                'apple_category' => 'Islam',
                'google_category' => '',
            ],
            [
                'id' => 74,
                'parent_id' => 13,
                'code' => 'judaism',
                'apple_category' => 'Judaism',
                'google_category' => '',
            ],
            [
                'id' => 75,
                'parent_id' => 13,
                'code' => 'religion',
                'apple_category' => 'Religion',
                'google_category' => '',
            ],
            [
                'id' => 76,
                'parent_id' => 13,
                'code' => 'spirituality',
                'apple_category' => 'Spirituality',
                'google_category' => '',
            ],
            [
                'id' => 77,
                'parent_id' => 14,
                'code' => 'astronomy',
                'apple_category' => 'Astronomy',
                'google_category' => '',
            ],
            [
                'id' => 78,
                'parent_id' => 14,
                'code' => 'chemistry',
                'apple_category' => 'Chemistry',
                'google_category' => '',
            ],
            [
                'id' => 79,
                'parent_id' => 14,
                'code' => 'earth_sciences',
                'apple_category' => 'Earth Sciences',
                'google_category' => '',
            ],
            [
                'id' => 80,
                'parent_id' => 14,
                'code' => 'life_sciences',
                'apple_category' => 'Life Sciences',
                'google_category' => '',
            ],
            [
                'id' => 81,
                'parent_id' => 14,
                'code' => 'mathematics',
                'apple_category' => 'Mathematics',
                'google_category' => '',
            ],
            [
                'id' => 82,
                'parent_id' => 14,
                'code' => 'natural_sciences',
                'apple_category' => 'Natural Sciences',
                'google_category' => '',
            ],
            [
                'id' => 83,
                'parent_id' => 14,
                'code' => 'nature',
                'apple_category' => 'Nature',
                'google_category' => '',
            ],
            [
                'id' => 84,
                'parent_id' => 14,
                'code' => 'physics',
                'apple_category' => 'Physics',
                'google_category' => '',
            ],
            [
                'id' => 85,
                'parent_id' => 14,
                'code' => 'social_sciences',
                'apple_category' => 'Social Sciences',
                'google_category' => '',
            ],
            [
                'id' => 86,
                'parent_id' => 15,
                'code' => 'documentary',
                'apple_category' => 'Documentary',
                'google_category' => '',
            ],
            [
                'id' => 87,
                'parent_id' => 15,
                'code' => 'personal_journals',
                'apple_category' => 'Personal Journals',
                'google_category' => '',
            ],
            [
                'id' => 88,
                'parent_id' => 15,
                'code' => 'philosophy',
                'apple_category' => 'Philosophy',
                'google_category' => '',
            ],
            [
                'id' => 89,
                'parent_id' => 15,
                'code' => 'places_and_travel',
                'apple_category' => 'Places & Travel',
                'google_category' => '',
            ],
            [
                'id' => 90,
                'parent_id' => 15,
                'code' => 'relationships',
                'apple_category' => 'Relationships',
                'google_category' => '',
            ],
            [
                'id' => 91,
                'parent_id' => 16,
                'code' => 'baseball',
                'apple_category' => 'Baseball',
                'google_category' => '',
            ],
            [
                'id' => 92,
                'parent_id' => 16,
                'code' => 'basketball',
                'apple_category' => 'Basketball',
                'google_category' => '',
            ],
            [
                'id' => 93,
                'parent_id' => 16,
                'code' => 'cricket',
                'apple_category' => 'Cricket',
                'google_category' => '',
            ],
            [
                'id' => 94,
                'parent_id' => 16,
                'code' => 'fantasy_sports',
                'apple_category' => 'Fantasy Sports',
                'google_category' => '',
            ],
            [
                'id' => 95,
                'parent_id' => 16,
                'code' => 'football',
                'apple_category' => 'Football',
                'google_category' => '',
            ],
            [
                'id' => 96,
                'parent_id' => 16,
                'code' => 'golf',
                'apple_category' => 'Golf',
                'google_category' => '',
            ],
            [
                'id' => 97,
                'parent_id' => 16,
                'code' => 'hockey',
                'apple_category' => 'Hockey',
                'google_category' => '',
            ],
            [
                'id' => 98,
                'parent_id' => 16,
                'code' => 'rugby',
                'apple_category' => 'Rugby',
                'google_category' => '',
            ],
            [
                'id' => 99,
                'parent_id' => 16,
                'code' => 'running',
                'apple_category' => 'Running',
                'google_category' => '',
            ],
            [
                'id' => 100,
                'parent_id' => 16,
                'code' => 'soccer',
                'apple_category' => 'Soccer',
                'google_category' => '',
            ],
            [
                'id' => 101,
                'parent_id' => 16,
                'code' => 'swimming',
                'apple_category' => 'Swimming',
                'google_category' => '',
            ],
            [
                'id' => 102,
                'parent_id' => 16,
                'code' => 'tennis',
                'apple_category' => 'Tennis',
                'google_category' => '',
            ],
            [
                'id' => 103,
                'parent_id' => 16,
                'code' => 'volleyball',
                'apple_category' => 'Volleyball',
                'google_category' => '',
            ],
            [
                'id' => 104,
                'parent_id' => 16,
                'code' => 'wilderness',
                'apple_category' => 'Wilderness',
                'google_category' => '',
            ],
            [
                'id' => 105,
                'parent_id' => 16,
                'code' => 'wrestling',
                'apple_category' => 'Wrestling',
                'google_category' => '',
            ],
            [
                'id' => 106,
                'parent_id' => 19,
                'code' => 'after_shows',
                'apple_category' => 'After Shows',
                'google_category' => '',
            ],
            [
                'id' => 107,
                'parent_id' => 19,
                'code' => 'film_history',
                'apple_category' => 'Film History',
                'google_category' => '',
            ],
            [
                'id' => 108,
                'parent_id' => 19,
                'code' => 'film_interviews',
                'apple_category' => 'Film Interviews',
                'google_category' => '',
            ],
            [
                'id' => 109,
                'parent_id' => 19,
                'code' => 'film_reviews',
                'apple_category' => 'Film Reviews',
                'google_category' => '',
            ],
            [
                'id' => 110,
                'parent_id' => 19,
                'code' => 'tv_reviews',
                'apple_category' => 'TV Reviews',
                'google_category' => '',
            ],
        ];

        foreach ($data as $categoryLine) {
            $this->db
                ->table('categories')
                ->ignore(true)
                ->insert($categoryLine);
        }
    }
}
