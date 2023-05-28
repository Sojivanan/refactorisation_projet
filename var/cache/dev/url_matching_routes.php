<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/games' => [
            [['_route' => 'get_list_of_games', '_controller' => 'App\\Controller\\GameController::getListOfGames'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_game', '_controller' => 'App\\Controller\\GameController::createGame'], null, ['POST' => 0], null, false, false, null],
        ],
        '/users' => [
            [['_route' => 'liste_des_users', '_controller' => 'App\\Controller\\UserController::getListeDesUsers'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'user_post', '_controller' => 'App\\Controller\\UserController::createUser'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/game/([^/]++)(?'
                    .'|(*:186)'
                    .'|/add/([^/]++)(*:207)'
                    .'|(*:215)'
                    .'|(*:223)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:249)'
                    .'|(*:257)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [[['_route' => ' getGameInfo', '_controller' => 'App\\Controller\\GameController::getGameInfo'], ['identifiant'], ['GET' => 0], null, false, true, null]],
        207 => [[['_route' => 'add_user_to_game', '_controller' => 'App\\Controller\\GameController::addPlayerToGame'], ['id', 'playerRightId'], ['PATCH' => 0], null, false, true, null]],
        215 => [[['_route' => 'send_choice', '_controller' => 'App\\Controller\\GameController::play'], ['identifiant'], ['PATCH' => 0], null, false, true, null]],
        223 => [[['_route' => 'annuler_game', '_controller' => 'App\\Controller\\GameController::deleteGame'], ['id'], ['DELETE' => 0], null, false, true, null]],
        249 => [
            [['_route' => 'get_user_by_id', '_controller' => 'App\\Controller\\UserController::getUserWithIdentifiant'], ['identifiant'], ['GET' => 0], null, false, true, null],
            [['_route' => 'udpate_user', '_controller' => 'App\\Controller\\UserController::updateUser'], ['identifiant'], ['PATCH' => 0], null, false, true, null],
        ],
        257 => [
            [['_route' => 'delete_user_by_identifiant', '_controller' => 'App\\Controller\\UserController::suprUser'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
