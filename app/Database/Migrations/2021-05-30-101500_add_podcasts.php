<?php

declare(strict_types=1);

/**
 * Class AddPodcasts Creates podcasts table in database
 *
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPodcasts extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'guid' => [
                'type' => 'CHAR',
                'constraint' => 36,
            ],
            'actor_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'handle' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],
            'description_markdown' => [
                'type' => 'TEXT',
            ],
            'description_html' => [
                'type' => 'TEXT',
            ],
            'cover_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'banner_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true,
            ],
            'language_code' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'category_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'default' => 0,
            ],
            'parental_advisory' => [
                'type' => 'ENUM',
                'constraint' => ['clean', 'explicit'],
                'null' => true,
            ],
            'owner_name' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],
            'owner_email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'publisher' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true,
            ],
            'type' => [
                'type' => 'ENUM',
                'constraint' => ['episodic', 'serial'],
                'default' => 'episodic',
            ],
            'copyright' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true,
            ],
            'episode_description_footer_markdown' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'episode_description_footer_html' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'is_blocked' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
            'is_completed' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
            'is_locked' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1,
            ],
            'imported_feed_url' => [
                'type' => 'VARCHAR',
                'constraint' => 512,
                'comment' =>
                    'The RSS feed URL if this podcast was imported, NULL otherwise.',
                'null' => true,
            ],
            'new_feed_url' => [
                'type' => 'VARCHAR',
                'constraint' => 512,
                'comment' =>
                    'The RSS new feed URL if this podcast is moving out, NULL otherwise.',
                'null' => true,
            ],
            'payment_pointer' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'comment' => 'Wallet address for Web Monetization payments',
                'null' => true,
            ],
            'location_name' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true,
            ],
            'location_geo' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => true,
            ],
            'location_osm' => [
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => true,
            ],
            'custom_rss' => [
                'type' => 'JSON',
                'null' => true,
            ],
            'partner_id' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => true,
            ],
            'partner_link_url' => [
                'type' => 'VARCHAR',
                'constraint' => 512,
                'null' => true,
            ],
            'partner_image_url' => [
                'type' => 'VARCHAR',
                'constraint' => 512,
                'null' => true,
            ],
            'is_premium_by_default' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
            'created_by' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'updated_by' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'published_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        // TODO: remove name in favor of username from actor
        $this->forge->addUniqueKey('handle');
        $this->forge->addUniqueKey('guid');
        $this->forge->addUniqueKey('actor_id');
        $this->forge->addForeignKey('actor_id', config('Fediverse')->tablesPrefix . 'actors', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('cover_id', 'media', 'id');
        $this->forge->addForeignKey('banner_id', 'media', 'id', '', 'SET NULL');
        $this->forge->addForeignKey('category_id', 'categories', 'id');
        $this->forge->addForeignKey('language_code', 'languages', 'code');
        $this->forge->addForeignKey('created_by', 'users', 'id');
        $this->forge->addForeignKey('updated_by', 'users', 'id');
        $this->forge->createTable('podcasts');
    }

    public function down(): void
    {
        $this->forge->dropTable('podcasts');
    }
}
