<?php declare(strict_types=1);

$isPodcastArea = isset($podcast) && ! isset($episode);
$isEpisodeArea = isset($podcast) && isset($episode);
?>

<!DOCTYPE html>
<html lang="<?= service('request')
    ->getLocale() ?>">

<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="noindex">

    <title><?= $this->renderSection('title') ?> | Castopod Admin</title>
    <meta name="description" content="Castopod is an open-source hosting platform made for podcasters who want engage and interact with their audience."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/x-icon" href="<?= get_site_icon_url('ico') ?>" />
    <link rel="apple-touch-icon" href="<?= get_site_icon_url('180') ?>">
    <link rel="manifest" href="<?= route_to('webmanifest') ?>">

    <link rel='stylesheet' type='text/css' href='<?= route_to('themes-colors-css') ?>' />
    <?= service('vite')
        ->asset('styles/index.css', 'css') ?>
    <?= service('vite')
        ->asset('js/admin.ts', 'js') ?>
    <?= service('vite')
        ->asset('js/admin-audio-player.ts', 'js') ?>
</head>

<body class="relative grid items-start min-h-screen bg-base grid-cols-admin grid-rows-admin">
    <?= $this->include('_partials/_nav_header') ?>
    <?= $this->include('_partials/_nav_aside') ?>
    <main class="relative max-w-full col-start-1 row-start-2 col-span-full md:col-start-2 md:col-span-1">
        <header class="z-40 flex items-center px-4 border-b bg-elevated md:px-12 sticky-header-outer border-subtle">
            <div class="flex flex-col justify-end w-full -mt-4 sticky-header-inner">
                <?= render_breadcrumb('text-xs items-center flex') ?>
                <div class="flex justify-between py-1">
                    <div class="flex flex-wrap items-center">
                    <?php if (($isEpisodeArea && $episode->is_premium) || ($isPodcastArea && $podcast->is_premium)): ?>
                        <div class="inline-flex items-center">
                            <IconButton uri="<?= route_to('subscription-list', $podcast->id) ?>" glyph="exchange-dollar" variant="secondary" size="large" class="p-0 mr-2 border-0"><?= ($isEpisodeArea && $episode->is_premium) ? lang('PremiumPodcasts.episode_is_premium') : lang('PremiumPodcasts.podcast_is_premium') ?></IconButton>
                            <Heading tagName="h1" size="large" class="truncate"><?= $this->renderSection('pageTitle') ?></Heading>
                        </div>
                        <?php else: ?>
                            <Heading tagName="h1" size="large" class="truncate"><?= $this->renderSection('pageTitle') ?></Heading>
                        <?php endif; ?>
                        <?= $this->renderSection('headerLeft') ?>
                    </div>
                    <div class="flex items-center flex-shrink-0 gap-x-2"><?= $this->renderSection('headerRight') ?></div>
                </div>
            </div>
        </header>
        <?php if ($isPodcastArea && $podcast->publication_status !== 'published'): ?>
                <?= publication_status_banner($podcast->published_at, $podcast->id, $podcast->publication_status) ?>
        <?php endif ?>
        <div class="px-2 py-8 mx-auto md:px-12">
            <?= view('_message_block') ?>
            <?= $this->renderSection('content') ?>
        </div>
    </main>
</body>