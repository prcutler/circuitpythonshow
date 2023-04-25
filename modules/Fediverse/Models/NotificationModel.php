<?php

declare(strict_types=1);

/**
 * @copyright  2022 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace Modules\Fediverse\Models;

use Modules\Fediverse\Entities\Notification;

class NotificationModel extends BaseUuidModel
{
    /**
     * @var string
     */
    protected $table = 'notifications';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string
     */
    protected $returnType = Notification::class;

    /**
     * @var bool
     */
    protected $useTimestamps = true;

    /**
     * @var string[]
     */
    protected $uuidFields = ['post_id', 'activity_id'];

    /**
     * @var string[]
     */
    protected $allowedFields = [
        'actor_id',
        'target_actor_id',
        'post_id',
        'activity_id',
        'type',
        'read_at',
        'created_at',
        'updated_at',
    ];
}
