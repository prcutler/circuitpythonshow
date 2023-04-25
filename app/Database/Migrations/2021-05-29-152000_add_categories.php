<?php

declare(strict_types=1);

/**
 * Class AddCategories Creates categories table in database
 *
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCategories extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'parent_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true,
            ],
            'code' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
            ],
            'apple_category' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
            ],
            'google_category' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey('code');
        $this->forge->addForeignKey('parent_id', 'categories', 'id');
        $this->forge->createTable('categories');
    }

    public function down(): void
    {
        $this->forge->dropTable('categories');
    }
}
