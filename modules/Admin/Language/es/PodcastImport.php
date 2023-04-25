<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'warning' =>
        'Este procedimiento puede llevar mucho tiempo. Como la versión actual no muestra ningún progreso mientras se ejecuta, no verás nada actualizado hasta que termine. En el caso de recibir un mensaje de error por falta de tiempo (Timeout error), incrementa el valor `max_execution_time` en la configuración del PHP del servidor.',
    'old_podcast_section_title' => 'Podcasts para importar',
    'old_podcast_section_subtitle' =>
        'Asegúrese de que tiene los derechos para este podcast antes de importarlo. Copiar y difundir un podcast sin los derechos apropiados es piratería y puede ser procesado.',
    'imported_feed_url' => 'URL del Feed',
    'imported_feed_url_hint' => 'El feed debe estar en formato xml o rss.',
    'new_podcast_section_title' => 'El nuevo Podcast',
    'advanced_params_section_title' => 'Parámetros avanzados',
    'advanced_params_section_subtitle' =>
        'Mantenga los valores por defecto si no tiene idea de para qué sirven los campos.',
    'slug_field' => 'Campo a utilizar para calcular el slug de episodio',
    'description_field' =>
        'Campo de origen usado para la descripción del episodio / mostrar notas',
    'force_renumber' => 'Forzar renumeración de episodios',
    'force_renumber_hint' =>
        'Utilice esto si su podcast no tiene números de episodios pero desea establecerlos durante la importación.',
    'season_number' => 'Número de Temporada',
    'season_number_hint' =>
        'Utilice esto si su podcast no tiene un número de temporada pero desea establecer uno durante la importación. Deje en blanco de lo contrario.',
    'max_episodes' => 'Número máximo de episodios a importar',
    'max_episodes_hint' => 'Dejar en blanco para importar todos los episodios',
    'lock_import' =>
        'Este feed está protegido. No puedes importarlo. Si eres el propietario, debes desprotegerlo en la plataforma de origen.',
    'submit' => 'Importar podcast',
];
