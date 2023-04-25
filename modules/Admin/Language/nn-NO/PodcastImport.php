<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'warning' =>
        'This procedure may take a long time. As the current version does not show any progress while it runs, you will not see anything updated until it is done. In case of timeout error, increase `max_execution_time` value.',
    'old_podcast_section_title' => 'Podkast å importera',
    'old_podcast_section_subtitle' =>
        'Syt for at du har rettane til podkasten før du importerer han. Å kopiera og kringkasta ein podkast utan løyve er ulovleg og straffbart.',
    'imported_feed_url' => 'URL til straumen',
    'imported_feed_url_hint' => 'Straumen må vera i xml- eller rss-format.',
    'new_podcast_section_title' => 'Den nye podkasten',
    'advanced_params_section_title' => 'Avanserte innstilingar',
    'advanced_params_section_subtitle' =>
        'Bruk standardverdiane viss du ikkje veit kva desse felta er til.',
    'slug_field' => 'Felt som skal brukast til å laga kortadressa til episoden',
    'description_field' =>
        'Kjeldefelt som skal brukast for å skildra episoden og syna notat',
    'force_renumber' => 'Tving renummerering av episodane',
    'force_renumber_hint' =>
        'Bruk dette viss podkasten din ikkje har episodenummer, men du vil laga nummer når du importerer.',
    'season_number' => 'Sesongnummer',
    'season_number_hint' =>
        'Bruk dette viss podkasten din ikkje har eit sesongnummer, men du vil laga eit når du importerer. La stå tomt i andre tilfelle.',
    'max_episodes' => 'Makstal på episodar å importera',
    'max_episodes_hint' => 'La stå tomt for å importera alle episodane',
    'lock_import' =>
        'Denne straumen er verna. Du kan ikkje importera han. Viss du er eigaren, må du ta bort vernet på den originale plattforma.',
    'submit' => 'Importer ein podkast',
];
