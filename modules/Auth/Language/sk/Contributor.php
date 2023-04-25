<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'podcast_contributors' => 'Prispievatelia podcastu',
    'view' => "Príspevky používateľa {username} do podcastu {podcastTitle}",
    'add' => 'Pridať prispievateľa',
    'add_contributor' => 'Pridať prispievateľa pre {0}',
    'edit_role' => 'Upraviť rolu pre {0}',
    'edit' => 'Upraviť',
    'remove' => 'Odstrániť',
    'list' => [
        'username' => 'Meno používateľa',
        'role' => 'Rola',
    ],
    'form' => [
        'user' => 'Používateľ',
        'user_placeholder' => 'Vybrať používateľa…',
        'role' => 'Rola',
        'role_placeholder' => 'Vybrať jeho úlohu…',
        'submit_add' => 'Pridať prispievateľa',
        'submit_edit' => 'Aktualizovať rolu',
    ],
    'delete_form' => [
        'title' => 'Remove {contributor}',
        'disclaimer' =>
            'You are about to remove {contributor} from contributors. They will not be able to access "{podcastTitle}" anymore.',
        'understand' => 'I understand, I want to remove {contributor} from "{podcastTitle}"',
        'submit' => 'Remove',
    ],
    'messages' => [
        'editSuccess' => 'Role successfully changed!',
        'editOwnerError' => "You can't edit the podcast owner!",
        'removeOwnerError' => "Nemôžete odstrániť vlastníka podcastu!",
        'removeSuccess' =>
            'Úspešne ste odstránili používateľa {username} z podcastu {podcastTitle}',
        'alreadyAddedError' =>
            "Prispievateľa, ktorého sa usiľujete pridať je už pridaný!",
    ],
];
