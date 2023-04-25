<?php

declare(strict_types=1);

/**
 * Class PlatformsSeeder Inserts values in platforms table in database
 *
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PlatformSeeder extends Seeder
{
    public function run(): void
    {
        $podcastingData = [
            [
                'slug' => 'amazon',
                'type' => 'podcasting',
                'label' => 'Amazon Music and Audible',
                'home_url' => 'https://music.amazon.com/',
                'submit_url' => 'https://podcasters.amazon.com/',
            ],
            [
                'slug' => 'antennapod',
                'type' => 'podcasting',
                'label' => 'AntennaPod',
                'home_url' => 'https://antennapod.org/',
                'submit_url' => 'https://antennapod.org/documentation/podcasters-hosters/add-on-antennapod',
            ],
            [
                'slug' => 'apple',
                'type' => 'podcasting',
                'label' => 'Apple Podcasts',
                'home_url' => 'https://www.apple.com/itunes/podcasts/',
                'submit_url' =>
                    'https://podcastsconnect.apple.com/my-podcasts/new-feed',
            ],
            [
                'slug' => 'blubrry',
                'type' => 'podcasting',
                'label' => 'Blubrry',
                'home_url' => 'https://www.blubrry.com/',
                'submit_url' => 'https://www.blubrry.com/addpodcast.php',
            ],
            [
                'slug' => 'breaker',
                'type' => 'podcasting',
                'label' => 'Breaker',
                'home_url' => 'https://www.breaker.audio/',
                'submit_url' => 'https://podcasters.breaker.audio/',
            ],
            [
                'slug' => 'castbox',
                'type' => 'podcasting',
                'label' => 'Castbox',
                'home_url' => 'https://castbox.fm/',
                'submit_url' =>
                    'https://helpcenter.castbox.fm/portal/kb/articles/submit-my-podcast',
            ],
            [
                'slug' => 'castopod',
                'type' => 'podcasting',
                'label' => 'Castopod',
                'home_url' => 'https://castopod.org/',
                'submit_url' => 'https://castopod.org/instances',
            ],
            [
                'slug' => 'castro',
                'type' => 'podcasting',
                'label' => 'Castro',
                'home_url' => 'http://castro.fm/',
                'submit_url' =>
                    'https://castro.fm/support/link-to-your-podcast-in-castro',
            ],
            [
                'slug' => 'chartable',
                'type' => 'podcasting',
                'label' => 'Chartable',
                'home_url' => 'https://chartable.com/',
                'submit_url' => 'https://chartable.com/podcasts/submit',
            ],
            [
                'slug' => 'deezer',
                'type' => 'podcasting',
                'label' => 'Deezer',
                'home_url' => 'https://www.deezer.com/',
                'submit_url' => 'https://podcasters.deezer.com/submission',
            ],
            [
                'slug' => 'fyyd',
                'type' => 'podcasting',
                'label' => 'fyyd',
                'home_url' => 'https://fyyd.de/',
                'submit_url' => 'https://fyyd.de/add-feed',
            ],
            [
                'slug' => 'google',
                'type' => 'podcasting',
                'label' => 'Google Podcasts',
                'home_url' => 'https://podcasts.google.com/about',
                'submit_url' =>
                    'https://search.google.com/search-console/about',
            ],
            [
                'slug' => 'ivoox',
                'type' => 'podcasting',
                'label' => 'Ivoox',
                'home_url' => 'https://www.ivoox.com/',
                'submit_url' => 'http://www.ivoox.com/upload-podcast_u.html',
            ],
            [
                'slug' => 'listennotes',
                'type' => 'podcasting',
                'label' => 'ListenNotes',
                'home_url' => 'https://www.listennotes.com/',
                'submit_url' => 'https://www.listennotes.com/submit/',
            ],
            [
                'slug' => 'overcast',
                'type' => 'podcasting',
                'label' => 'Overcast',
                'home_url' => 'https://overcast.fm/',
                'submit_url' => 'https://overcast.fm/podcasterinfo',
            ],
            [
                'slug' => 'playerfm',
                'type' => 'podcasting',
                'label' => 'Player.Fm',
                'home_url' => 'https://player.fm/',
                'submit_url' => 'https://player.fm/importer/feed',
            ],
            [
                'slug' => 'pocketcasts',
                'type' => 'podcasting',
                'label' => 'Pocketcasts',
                'home_url' => 'https://www.pocketcasts.com/',
                'submit_url' => 'https://www.pocketcasts.com/submit/',
            ],
            [
                'slug' => 'podbean',
                'type' => 'podcasting',
                'label' => 'Podbean',
                'home_url' => 'https://www.podbean.com/',
                'submit_url' => 'https://www.podbean.com/site/submitPodcast',
            ],
            [
                'slug' => 'podcastaddict',
                'type' => 'podcasting',
                'label' => 'Podcast Addict',
                'home_url' => 'https://podcastaddict.com/',
                'submit_url' => 'https://podcastaddict.com/submit',
            ],
            [
                'slug' => 'podcastindex',
                'type' => 'podcasting',
                'label' => 'Podcast Index',
                'home_url' => 'https://podcastindex.org/',
                'submit_url' => 'https://podcastindex.org/add',
            ],
            [
                'slug' => 'podchaser',
                'type' => 'podcasting',
                'label' => 'Podchaser',
                'home_url' => 'https://www.podchaser.com/',
                'submit_url' => 'https://www.podchaser.com/creators/edit',
            ],
            [
                'slug' => 'podcloud',
                'type' => 'podcasting',
                'label' => 'podCloud',
                'home_url' => 'https://podcloud.fr/',
                'submit_url' => 'https://podcloud.fr/studio/podcasts/new',
            ],
            [
                'slug' => 'podinstall',
                'type' => 'podcasting',
                'label' => 'Podinstall',
                'home_url' => 'https://www.podinstall.com/',
                'submit_url' => 'https://www.podinstall.com/claim.html',
            ],
            [
                'slug' => 'podlink',
                'type' => 'podcasting',
                'label' => 'pod.link',
                'home_url' => 'https://pod.link/',
                'submit_url' => 'https://pod.link',
            ],
            [
                'slug' => 'podtail',
                'type' => 'podcasting',
                'label' => 'Podtail',
                'home_url' => 'https://podtail.com/',
                'submit_url' => 'https://podtail.com/about/faq/',
            ],
            [
                'slug' => 'podfriend',
                'type' => 'podcasting',
                'label' => 'Podfriend',
                'home_url' => 'https://www.podfriend.com/',
                'submit_url' => 'https://podcastindex.org/add',
            ],
            [
                'slug' => 'podverse',
                'type' => 'podcasting',
                'label' => 'Podverse',
                'home_url' => 'https://podverse.fm/',
                'submit_url' =>
                    'https://docs.google.com/forms/d/e/1FAIpQLSdewKP-YrE8zGjDPrkmoJEwCxPl_gizEkmzAlTYsiWAuAk1Ng/viewform',
            ],
            [
                'slug' => 'radiopublic',
                'type' => 'podcasting',
                'label' => 'RadioPublic',
                'home_url' => 'https://radiopublic.com/',
                'submit_url' => 'https://podcasters.radiopublic.com/signup',
            ],
            [
                'slug' => 'spotify',
                'type' => 'podcasting',
                'label' => 'Spotify',
                'home_url' => 'https://www.spotify.com/',
                'submit_url' => 'https://podcasters.spotify.com/submit',
            ],
            [
                'slug' => 'spreaker',
                'type' => 'podcasting',
                'label' => 'Spreaker',
                'home_url' => 'https://www.spreaker.com/',
                'submit_url' => 'https://www.spreaker.com/cms/shows/rss-import',
            ],
            [
                'slug' => 'stitcher',
                'type' => 'podcasting',
                'label' => 'Stitcher',
                'home_url' => 'https://www.stitcher.com/',
                'submit_url' => 'https://partners.stitcher.com/join',
            ],
            [
                'slug' => 'tunein',
                'type' => 'podcasting',
                'label' => 'TuneIn',
                'home_url' => 'https://tunein.com/',
                'submit_url' =>
                    'https://help.tunein.com/contact/add-podcast-S19TR3Sdf',
            ],
            [
                'slug' => 'anytime',
                'type' => 'podcasting',
                'label' => 'Anytime Podcast Player',
                'home_url' => 'https://anytimeplayer.app/',
                'submit_url' => '',
            ],
            [
                'slug' => 'breez',
                'type' => 'podcasting',
                'label' => 'Breez',
                'home_url' => 'https://breez.technology/',
                'submit_url' => '',
            ],
            [
                'slug' => 'castamatic',
                'type' => 'podcasting',
                'label' => 'Castamatic',
                'home_url' => 'https://castamatic.com/',
                'submit_url' => '',
            ],
            [
                'slug' => 'castcoverage',
                'type' => 'podcasting',
                'label' => 'CastCoverage',
                'home_url' => 'http://castcoverage.com/',
                'submit_url' => '',
            ],
            [
                'slug' => 'curiocaster',
                'type' => 'podcasting',
                'label' => 'CurioCaster',
                'home_url' => 'https://curiocaster.com/',
                'submit_url' => '',
            ],
            [
                'slug' => 'escapepod',
                'type' => 'podcasting',
                'label' => 'Escapepod',
                'home_url' => 'http://y20k.org/escapepod/',
                'submit_url' => '',
            ],
            [
                'slug' => 'fountain',
                'type' => 'podcasting',
                'label' => 'Fountain',
                'home_url' => 'https://www.fountain.fm/',
                'submit_url' => '',
            ],
            [
                'slug' => 'gpodder',
                'type' => 'podcasting',
                'label' => 'gPodder',
                'home_url' => 'https://gpodder.org/',
                'submit_url' => '',
            ],
            [
                'slug' => 'hypercatcher',
                'type' => 'podcasting',
                'label' => 'HyperCatcher',
                'home_url' => 'https://hypercatcher.com/',
                'submit_url' => '',
            ],
            [
                'slug' => 'ivyfm',
                'type' => 'podcasting',
                'label' => 'Ivy Podcast Discovery',
                'home_url' => 'https://ivy.fm/',
                'submit_url' => '',
            ],
            [
                'slug' => 'jumplink',
                'type' => 'podcasting',
                'label' => 'JumpLink',
                'home_url' => 'https://jump.link/',
                'submit_url' => 'https://jump.link/a/accounts/signup/',
            ],
            [
                'slug' => 'kasts',
                'type' => 'podcasting',
                'label' => 'Kasts',
                'home_url' => 'https://apps.kde.org/kasts/',
                'submit_url' => '',
            ],
            [
                'slug' => 'playapod',
                'type' => 'podcasting',
                'label' => 'Playapod',
                'home_url' => 'https://playapod.com/',
                'submit_url' => '',
            ],
            [
                'slug' => 'plink',
                'type' => 'podcasting',
                'label' => 'Plink',
                'home_url' => 'https://plinkhq.com/',
                'submit_url' => '',
            ],
            [
                'slug' => 'podcastchapters',
                'type' => 'podcasting',
                'label' => 'Podcast Chapters',
                'home_url' => 'https://chaptersapp.com/',
                'submit_url' => '',
            ],
            [
                'slug' => 'podcastguru',
                'type' => 'podcasting',
                'label' => 'Podcast Guru',
                'home_url' => 'https://podcastguru.io/',
                'submit_url' => 'https://podcastguru.io/promote-your-podcast/',
            ],
            [
                'slug' => 'podlp',
                'type' => 'podcasting',
                'label' => 'PodLP',
                'home_url' => 'https://podlp.com/',
                'submit_url' => 'https://podlp.com/submit.html',
            ],
            [
                'slug' => 'podnews',
                'type' => 'podcasting',
                'label' => 'podnews',
                'home_url' => 'https://podnews.net/podcast/subscribe-pages',
                'submit_url' => '',
            ],
            [
                'slug' => 'podstation',
                'type' => 'podcasting',
                'label' => 'podStation',
                'home_url' => 'https://podstation.github.io/',
                'submit_url' => '',
            ],
            [
                'slug' => 'sphinxchat',
                'type' => 'podcasting',
                'label' => 'Sphinx',
                'home_url' => 'https://sphinx.chat/',
                'submit_url' => '',
            ],
            [
                'slug' => 'tsacdop',
                'type' => 'podcasting',
                'label' => 'Tsacdop',
                'home_url' => 'https://www.tsacdop.app/',
                'submit_url' => '',
            ],
            [
                'slug' => 'zion',
                'type' => 'podcasting',
                'label' => 'Zion',
                'home_url' => 'https://getzion.com/',
                'submit_url' => 'https://shop.n2n2.chat/',
            ],
        ];

        $fundingData = [
            [
                'slug' => 'paypal',
                'type' => 'funding',
                'label' => 'Paypal',
                'home_url' => 'https://www.paypal.com/',
                'submit_url' => 'https://www.paypal.com/paypalme/my/grab',
            ],
            [
                'slug' => 'fosspay',
                'type' => 'funding',
                'label' => 'fosspay',
                'home_url' => 'https://git.sr.ht/~sircmpwn/fosspay',
                'submit_url' => '',
            ],
            [
                'slug' => 'gofundme',
                'type' => 'funding',
                'label' => 'GoFundMe',
                'home_url' => 'https://www.gofundme.com/',
                'submit_url' => 'https://www.gofundme.com/sign-up',
            ],
            [
                'slug' => 'helloasso',
                'type' => 'funding',
                'label' => 'helloasso',
                'home_url' => 'https://www.helloasso.com/',
                'submit_url' => 'https://auth.helloasso.com/inscription',
            ],
            [
                'slug' => 'indiegogo',
                'type' => 'funding',
                'label' => 'Indiegogo',
                'home_url' => 'https://www.indiegogo.com/',
                'submit_url' => 'https://www.indiegogo.com/start-a-campaign#/',
            ],
            [
                'slug' => 'kickstarter',
                'type' => 'funding',
                'label' => 'Kickstarter',
                'home_url' => 'https://www.kickstarter.com/',
                'submit_url' => 'https://www.kickstarter.com/learn',
            ],
            [
                'slug' => 'kisskissbankbank',
                'type' => 'funding',
                'label' => 'KissKissBankBank',
                'home_url' => 'https://www.kisskissbankbank.com/',
                'submit_url' =>
                    'https://www.kisskissbankbank.com/en/financer-mon-projet',
            ],
            [
                'slug' => 'liberapay',
                'type' => 'funding',
                'label' => 'Liberapay',
                'home_url' => 'https://liberapay.com/',
                'submit_url' => 'https://liberapay.com/sign-up',
            ],
            [
                'slug' => 'patreon',
                'type' => 'funding',
                'label' => 'Patreon',
                'home_url' => 'https://www.patreon.com/',
                'submit_url' => 'https://www.patreon.com/create',
            ],
            [
                'slug' => 'tipeee',
                'type' => 'funding',
                'label' => 'Tipeee',
                'home_url' => 'https://tipeee.com/',
                'submit_url' => 'https://tipeee.com/register/',
            ],
            [
                'slug' => 'ulule',
                'type' => 'funding',
                'label' => 'Ulule',
                'home_url' => 'https://www.ulule.com/',
                'submit_url' => 'https://www.ulule.com/projects/create/#/',
            ],
        ];

        $socialData = [
            [
                'slug' => 'discord',
                'type' => 'social',
                'label' => 'Discord',
                'home_url' => 'https://discord.com/',
                'submit_url' => 'https://discord.com/register',
            ],
            [
                'slug' => 'facebook',
                'type' => 'social',
                'label' => 'Facebook',
                'home_url' => 'https://www.facebook.com/',
                'submit_url' =>
                    'https://www.facebook.com/pages/creation/?ref_type=comet_home',
            ],
            [
                'slug' => 'funkwhale',
                'type' => 'social',
                'label' => 'Funkwhale',
                'home_url' => 'https://funkwhale.audio/',
                'submit_url' => 'https://network.funkwhale.audio/dashboards/',
            ],
            [
                'slug' => 'instagram',
                'type' => 'social',
                'label' => 'Instagram',
                'home_url' => 'https://www.instagram.com/',
                'submit_url' =>
                    'https://www.instagram.com/accounts/emailsignup/',
            ],
            [
                'slug' => 'linkedin',
                'type' => 'social',
                'label' => 'LinkedIn',
                'home_url' => 'https://www.linkedin.com/',
                'submit_url' => 'https://www.linkedin.com/company/setup/new/',
            ],
            [
                'slug' => 'mastodon',
                'type' => 'social',
                'label' => 'Mastodon',
                'home_url' => 'https://joinmastodon.org/',
                'submit_url' => 'https://joinmastodon.org/communities',
            ],
            [
                'slug' => 'misskey',
                'type' => 'social',
                'label' => 'Misskey',
                'home_url' => 'https://join.misskey.page/',
                'submit_url' => 'https://join.misskey.page/en-US/instances',
            ],
            [
                'slug' => 'mobilizon',
                'type' => 'social',
                'label' => 'Mobilizon',
                'home_url' => 'https://joinmobilizon.org/',
                'submit_url' => 'https://instances.joinmobilizon.org/instances',
            ],
            [
                'slug' => 'peertube',
                'type' => 'social',
                'label' => 'PeerTube',
                'home_url' => 'https://joinpeertube.org/',
                'submit_url' => 'https://joinpeertube.org/instances',
            ],
            [
                'slug' => 'pixelfed',
                'type' => 'social',
                'label' => 'Pixelfed',
                'home_url' => 'https://pixelfed.org/',
                'submit_url' => 'https://beta.joinpixelfed.org/',
            ],
            [
                'slug' => 'pleroma',
                'type' => 'social',
                'label' => 'Pleroma',
                'home_url' => 'https://pleroma.social/',
                'submit_url' => 'https://pleroma.social/#featured-instances',
            ],
            [
                'slug' => 'plume',
                'type' => 'social',
                'label' => 'Plume',
                'home_url' => 'https://joinplu.me/',
                'submit_url' => 'https://joinplu.me/#instances',
            ],
            [
                'slug' => 'slack',
                'type' => 'social',
                'label' => 'Slack',
                'home_url' => 'https://slack.com/',
                'submit_url' => 'https://slack.com/get-started#/create',
            ],
            [
                'slug' => 'twitch',
                'type' => 'social',
                'label' => 'Twitch',
                'home_url' => 'https://www.twitch.tv/',
                'submit_url' => 'https://www.twitch.tv/signup',
            ],
            [
                'slug' => 'twitter',
                'type' => 'social',
                'label' => 'Twitter',
                'home_url' => 'https://twitter.com/',
                'submit_url' => 'https://twitter.com/i/flow/signup',
            ],
            [
                'slug' => 'writefreely',
                'type' => 'social',
                'label' => 'WriteFreely',
                'home_url' => 'https://writefreely.org/',
                'submit_url' => 'https://writefreely.org/instances',
            ],
            [
                'slug' => 'youtube',
                'type' => 'social',
                'label' => 'Youtube',
                'home_url' => 'https://www.youtube.com/',
                'submit_url' => 'https://creatoracademy.youtube.com/page/home',
            ],
        ];

        $data = array_merge($podcastingData, $fundingData, $socialData);
        $this->db
            ->table('platforms')
            ->ignore(true)
            ->insertBatch($data);
    }
}
