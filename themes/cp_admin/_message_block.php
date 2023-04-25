<?php declare(strict_types=1);

if (session()->has('message')): ?>
    <Alert variant="success" class="mb-4"><?= esc(session('message')) ?></Alert>
<?php endif; ?>

<?php if (session()->has('error')): ?>
    <Alert variant="danger" class="mb-4"><?= esc(session('error')) ?></Alert>
<?php endif; ?>

<?php if (session()->has('errors')): ?>
    <Alert variant="danger" class="mb-4">
        <ul>
            <?php foreach (session('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </Alert>
<?php endif; ?>

<?php if (session()->has('warning')): ?>
    <Alert variant="warning" class="mb-4"><?= esc(session('warning')) ?></Alert>
<?php endif; ?>

<?php if (session()->has('warnings')): ?>
    <Alert variant="warning" class="mb-4">
        <ul>
            <?php foreach (session('warnings') as $warning): ?>
                <li><?= esc($warning) ?></li>
            <?php endforeach; ?>
        </ul>
    </Alert>
<?php endif; ?>
