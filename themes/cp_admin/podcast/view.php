<?= $this->extend('_layout') ?>

<?= $this->section('title') ?>
<?= esc($podcast->title) ?>
<?= $this->endSection() ?>

<?= $this->section('pageTitle') ?>
<?= esc($podcast->title) ?>
<?= $this->endSection() ?>

<?= $this->section('headerRight') ?>
<Button uri="<?= route_to('podcast-edit', $podcast->id) ?>" variant="secondary" iconLeft="edit"><?= lang('Podcast.edit') ?></Button>
<Button uri="<?= route_to('episode-create', $podcast->id) ?>" variant="primary" iconLeft="add"><?= lang('Episode.create') ?></Button>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= view_cell('Modules\Admin\Controllers\PodcastController::latestEpisodes', [
    'limit' => 5,
    'podcastId' => $podcast->id,
]) ?>

<?= $this->endSection() ?>
