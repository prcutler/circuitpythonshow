<?= lang('Subscription.emails.greeting', [], $subscription->podcast->language_code) ?><br/><br/>

<?= lang('Subscription.emails.deleted', [
    'podcastTitle' => '<strong>' . $subscription->podcast->title . '</strong>',
], $subscription->podcast->language_code, false) ?>

<?= $this->include('subscription/email/_footer') ?>
