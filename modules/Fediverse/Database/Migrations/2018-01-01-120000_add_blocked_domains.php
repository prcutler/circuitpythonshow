<?php

declare(strict_types=1);

/**
 * Class AddBlockedDomains Creates blocked_domains table in database
 *
 * @copyright  2021 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace Modules\Fediverse\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlockedDomains extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addPrimaryKey('name');
        $this->forge->createTable(config('Fediverse')->tablesPrefix . 'blocked_domains');
    }

    public function down(): void
    {
        $this->forge->dropTable(config('Fediverse')->tablesPrefix . 'blocked_domains');
    }
}
