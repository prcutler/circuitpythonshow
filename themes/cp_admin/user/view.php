<?= $this->extend('_layout') ?>

<?= $this->section('title') ?>
<?= lang('User.view', [
    'username' => esc($user->username),
]) ?>
<?= $this->endSection() ?>

<?= $this->section('pageTitle') ?>
<?= lang('User.view', [
    'username' => esc($user->username),
]) ?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<?= view('_partials/_user_info.php', [
    'user' => $user,
]) ?>

<?= $this->endSection() ?>
