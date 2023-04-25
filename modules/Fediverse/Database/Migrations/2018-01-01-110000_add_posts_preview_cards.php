<?php

declare(strict_types=1);

/**
 * Class AddPostsPreviewCards Creates posts_preview_cards table in database
 *
 * @copyright  2021 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace Modules\Fediverse\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPostsPreviewCards extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'post_id' => [
                'type' => 'BINARY',
                'constraint' => 16,
            ],
            'preview_card_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ]);

        $tablesPrefix = config('Fediverse')
            ->tablesPrefix;

        $this->forge->addPrimaryKey(['post_id', 'preview_card_id']);
        $this->forge->addForeignKey('post_id', $tablesPrefix . 'posts', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('preview_card_id', $tablesPrefix . 'preview_cards', 'id', '', 'CASCADE');
        $this->forge->createTable($tablesPrefix . 'posts_preview_cards');
    }

    public function down(): void
    {
        $this->forge->dropTable(config('Fediverse')->tablesPrefix . 'posts_preview_cards');
    }
}
