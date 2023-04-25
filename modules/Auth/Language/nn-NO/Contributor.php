<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'podcast_contributors' => 'Podkast-bidragsytarar',
    'view' => "{username} sitt bidrag til {podcastTitle}",
    'add' => 'Legg til bidragsytar',
    'add_contributor' => 'Legg til bidragsytar til {0}',
    'edit_role' => 'Oppdater rolla for {0}',
    'edit' => 'Rediger',
    'remove' => 'Fjern',
    'list' => [
        'username' => 'Brukarnamn',
        'role' => 'Rolle',
    ],
    'form' => [
        'user' => 'Brukar',
        'user_placeholder' => 'Vel ein brukar…',
        'role' => 'Rolle',
        'role_placeholder' => 'Vel rolle…',
        'submit_add' => 'Legg til bidragsytar',
        'submit_edit' => 'Oppdater rolla',
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
        'removeOwnerError' => "Du kan ikkje fjerna podkast-eigaren!",
        'removeSuccess' =>
            'Du har fjerna {username} frå {podcastTitle}',
        'alreadyAddedError' =>
            "Denne bidragsytaren er allereie lagt til!",
    ],
];
