<?php

declare(strict_types=1);

/**
 * Class AddAnalyticsPodcastsByCountry Creates analytics_podcasts_by_country table in database
 *
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace Modules\Analytics\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAnalyticsPodcastsByCountry extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'podcast_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'date' => [
                'type' => 'DATE',
            ],
            'country_code' => [
                'type' => 'VARCHAR',
                'constraint' => 3,
                'comment' => 'ISO 3166-1 code.',
            ],
            'hits' => [
                'type' => 'INT',
                'unsigned' => true,
                'default' => 1,
            ],
        ]);
        $this->forge->addPrimaryKey(['podcast_id', 'date', 'country_code']);
        $this->forge->addField('`created_at` timestamp NOT NULL DEFAULT current_timestamp()');
        $this->forge->addField(
            '`updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()',
        );
        $this->forge->createTable('analytics_podcasts_by_country');
    }

    public function down(): void
    {
        $this->forge->dropTable('analytics_podcasts_by_country');
    }
}
