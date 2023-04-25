<?php

declare(strict_types=1);

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Placeholder definitions
 * --------------------------------------------------------------------
 */

$routes->addPlaceholder('podcastHandle', '[a-zA-Z0-9\_]{1,32}');
$routes->addPlaceholder('slug', '[a-zA-Z0-9\-]{1,128}');
$routes->addPlaceholder('base64', '[A-Za-z0-9\.\_]+\-{0,2}');
$routes->addPlaceholder('platformType', '\bpodcasting|\bsocial|\bfunding');
$routes->addPlaceholder('postAction', '\bfavourite|\breblog|\breply');
$routes->addPlaceholder('embedTheme', '\blight|\bdark|\blight-transparent|\bdark-transparent');
$routes->addPlaceholder(
    'uuid',
    '[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-4[0-9A-Fa-f]{3}-[89ABab][0-9A-Fa-f]{3}-[0-9A-Fa-f]{12}',
);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('manifest.webmanifest', 'WebmanifestController', [
    'as' => 'webmanifest',
]);
$routes->get('themes/colors', 'ColorsController', [
    'as' => 'themes-colors-css',
]);

// health check
$routes->get('/health', 'HomeController::health', [
    'as' => 'health',
]);

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HomeController', [
    'as' => 'home',
]);

$routes->get('.well-known/platforms', 'Platform');

// Podcast's Public routes
$routes->group('@(:podcastHandle)', static function ($routes): void {
    $routes->get('/', 'PodcastController::activity/$1', [
        'as' => 'podcast-activity',
    ]);
    $routes->get('manifest.webmanifest', 'WebmanifestController::podcastManifest/$1', [
        'as' => 'podcast-webmanifest',
    ]);
    // override default Fediverse Library's actor route
    $routes->options('/', 'ActivityPubController::preflight');
    $routes->get('/', 'PodcastController::activity/$1', [
        'as' => 'actor',
        'alternate-content' => [
            'application/activity+json' => [
                'namespace' => 'Modules\Fediverse\Controllers',
                'controller-method' => 'ActorController/$1',
            ],
            'application/podcast-activity+json' => [
                'namespace' => 'App\Controllers',
                'controller-method' => 'PodcastController::podcastActor/$1',
            ],
            'application/ld+json; profile="https://www.w3.org/ns/activitystreams' => [
                'namespace' => 'Modules\Fediverse\Controllers',
                'controller-method' => 'ActorController/$1',
            ],
        ],
        'filter' => 'allow-cors',
    ]);
    $routes->get('about', 'PodcastController::about/$1', [
        'as' => 'podcast-about',
    ]);
    $routes->options('episodes', 'ActivityPubController::preflight');
    $routes->get('episodes', 'PodcastController::episodes/$1', [
        'as' => 'podcast-episodes',
        'alternate-content' => [
            'application/activity+json' => [
                'controller-method' => 'PodcastController::episodeCollection/$1',
            ],
            'application/podcast-activity+json' => [
                'controller-method' => 'PodcastController::episodeCollection/$1',
            ],
            'application/ld+json; profile="https://www.w3.org/ns/activitystreams' => [
                'controller-method' => 'PodcastController::episodeCollection/$1',
            ],
        ],
        'filter' => 'allow-cors',
    ]);
    $routes->group('episodes/(:slug)', static function ($routes): void {
        $routes->options('/', 'ActivityPubController::preflight');
        $routes->get('/', 'EpisodeController/$1/$2', [
            'as' => 'episode',
            'alternate-content' => [
                'application/activity+json' => [
                    'controller-method' => 'EpisodeController::episodeObject/$1/$2',
                ],
                'application/podcast-activity+json' => [
                    'controller-method' => 'EpisodeController::episodeObject/$1/$2',
                ],
                'application/ld+json; profile="https://www.w3.org/ns/activitystreams' => [
                    'controller-method' => 'EpisodeController::episodeObject/$1/$2',
                ],
            ],
            'filter' => 'allow-cors',
        ]);
        $routes->get('activity', 'EpisodeController::activity/$1/$2', [
            'as' => 'episode-activity',
        ]);
        $routes->options('comments', 'ActivityPubController::preflight');
        $routes->get('comments', 'EpisodeController::comments/$1/$2', [
            'as' => 'episode-comments',
            'application/activity+json' => [
                'controller-method' => 'EpisodeController::comments/$1/$2',
            ],
            'application/podcast-activity+json' => [
                'controller-method' => 'EpisodeController::comments/$1/$2',
            ],
            'application/ld+json; profile="https://www.w3.org/ns/activitystreams' => [
                'controller-method' => 'EpisodeController::comments/$1/$2',
            ],
            'filter' => 'allow-cors',
        ]);
        $routes->options('comments/(:uuid)', 'ActivityPubController::preflight');
        $routes->get('comments/(:uuid)', 'EpisodeCommentController::view/$1/$2/$3', [
            'as' => 'episode-comment',
            'application/activity+json' => [
                'controller-method' => 'EpisodeController::commentObject/$1/$2',
            ],
            'application/podcast-activity+json' => [
                'controller-method' => 'EpisodeController::commentObject/$1/$2',
            ],
            'application/ld+json; profile="https://www.w3.org/ns/activitystreams' => [
                'controller-method' => 'EpisodeController::commentObject/$1/$2',
            ],
            'filter' => 'allow-cors',
        ]);
        $routes->get('comments/(:uuid)/replies', 'EpisodeCommentController::replies/$1/$2/$3', [
            'as' => 'episode-comment-replies',
        ]);
        $routes->post('comments/(:uuid)/like', 'EpisodeCommentController::attemptLike/$1/$2/$3', [
            'as' => 'episode-comment-attempt-like',
        ]);
        $routes->get('oembed.json', 'EpisodeController::oembedJSON/$1/$2', [
            'as' => 'episode-oembed-json',
        ]);
        $routes->get('oembed.xml', 'EpisodeController::oembedXML/$1/$2', [
            'as' => 'episode-oembed-xml',
        ]);
        $routes->group('embed', static function ($routes): void {
            $routes->get('/', 'EpisodeController::embed/$1/$2', [
                'as' => 'embed',
            ]);
            $routes->get('(:embedTheme)', 'EpisodeController::embed/$1/$2/$3', [
                'as' => 'embed-theme',
            ],);
        });
    });
    $routes->head('feed.xml', 'FeedController/$1', [
        'as' => 'podcast-rss-feed',
    ]);
    $routes->get('feed.xml', 'FeedController/$1', [
        'as' => 'podcast-rss-feed',
    ]);
    $routes->head('feed', 'FeedController/$1');
    $routes->get('feed', 'FeedController/$1');
});

// audio routes
$routes->head('audio/@(:podcastHandle)/(:slug).(:alphanum)', 'EpisodeAudioController/$1/$2', [
    'as' => 'episode-audio',
], );
$routes->get('audio/@(:podcastHandle)/(:slug).(:alphanum)', 'EpisodeAudioController/$1/$2', [
    'as' => 'episode-audio',
], );

// Other pages
$routes->get('/credits', 'CreditsController', [
    'as' => 'credits',
]);
$routes->get('/map', 'MapController', [
    'as' => 'map',
]);
$routes->get('/episodes-markers', 'MapController::getEpisodesMarkers', [
    'as' => 'episodes-markers',
]);
$routes->get('/pages/(:slug)', 'PageController/$1', [
    'as' => 'page',
]);

/**
 * Overwriting Fediverse routes file
 */
$routes->group('@(:podcastHandle)', static function ($routes): void {
    $routes->post('posts/new', 'PostController::attemptCreate/$1', [
        'as' => 'post-attempt-create',
        'filter' => 'permission:podcast#.manage-publications',
    ]);
    // Post
    $routes->group('posts/(:uuid)', static function ($routes): void {
        $routes->options('/', 'ActivityPubController::preflight');
        $routes->get('/', 'PostController::view/$1/$2', [
            'as' => 'post',
            'alternate-content' => [
                'application/activity+json' => [
                    'namespace' => 'Modules\Fediverse\Controllers',
                    'controller-method' => 'PostController/$2',
                ],
                'application/ld+json; profile="https://www.w3.org/ns/activitystreams' => [
                    'namespace' => 'Modules\Fediverse\Controllers',
                    'controller-method' => 'PostController/$2',
                ],
            ],
            'filter' => 'allow-cors',
        ]);
        $routes->options('replies', 'ActivityPubController::preflight');
        $routes->get('replies', 'PostController/$1/$2', [
            'as' => 'post-replies',
            'alternate-content' => [
                'application/activity+json' => [
                    'namespace' => 'Modules\Fediverse\Controllers',
                    'controller-method' => 'PostController::replies/$2',
                ],
                'application/ld+json; profile="https://www.w3.org/ns/activitystreams' => [
                    'namespace' => 'Modules\Fediverse\Controllers',
                    'controller-method' => 'PostController::replies/$2',
                ],
            ],
            'filter' => 'allow-cors',
        ]);
        // Actions
        $routes->post('action', 'PostController::attemptAction/$1/$2', [
            'as' => 'post-attempt-action',
            'filter' => 'permission:podcast#.interact-as',
        ]);
        $routes->post(
            'block-actor',
            'PostController::attemptBlockActor/$1/$2',
            [
                'as' => 'post-attempt-block-actor',
                'filter' => 'permission:fediverse.manage-blocks',
            ],
        );
        $routes->post(
            'block-domain',
            'PostController::attemptBlockDomain/$1/$2',
            [
                'as' => 'post-attempt-block-domain',
                'filter' => 'permission:fediverse.manage-blocks',
            ],
        );
        $routes->post('delete', 'PostController::attemptDelete/$1/$2', [
            'as' => 'post-attempt-delete',
            'filter' => 'permission:podcast#.manage-publications',
        ]);
        $routes->get(
            'remote/(:postAction)',
            'PostController::remoteAction/$1/$2/$3',
            [
                'as' => 'post-remote-action',
            ],
        );
    });
    $routes->get('follow', 'ActorController::follow/$1', [
        'as' => 'follow',
    ]);
    $routes->get('outbox', 'ActorController::outbox/$1', [
        'as' => 'outbox',
        'filter' => 'fediverse:verify-activitystream',
    ]);
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
