<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/games' => [
            [['_route' => 'get_list_of_games', '_controller' => 'App\\Controller\\GameController::getPartieList'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_game', '_controller' => 'App\\Controller\\GameController::launchGame'], null, ['POST' => 0], null, false, false, null],
        ],
        '/users' => [
            [['_route' => 'liste_des_users', '_controller' => 'App\\Controller\\UserController::getListeDesUsers'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'user_post', '_controller' => 'App\\Controller\\UserController::createUser'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/game/([^/]++)(?'
                    .'|(*:24)'
                    .'|/add/([^/]++)(*:44)'
                    .'|(*:51)'
                    .'|(*:58)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:83)'
                    .'|(*:90)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => ' getGameInfo', '_controller' => 'App\\Controller\\GameController::getGameInfo'], ['identifiant'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'add_user_to_game', '_controller' => 'App\\Controller\\GameController::inviteToGame'], ['id', 'playerRightId'], ['PATCH' => 0], null, false, true, null]],
        51 => [[['_route' => 'send_choice', '_controller' => 'App\\Controller\\GameController::play'], ['identifiant'], ['PATCH' => 0], null, false, true, null]],
        58 => [[['_route' => 'delete_game', '_controller' => 'App\\Controller\\GameController::deleteGame'], ['id'], ['DELETE' => 0], null, false, true, null]],
        83 => [
            [['_route' => 'get_user_by_id', '_controller' => 'App\\Controller\\UserController::getUserWithIdentifiant'], ['identifiant'], ['GET' => 0], null, false, true, null],
            [['_route' => 'udpate_user', '_controller' => 'App\\Controller\\UserController::updateUser'], ['identifiant'], ['PATCH' => 0], null, false, true, null],
        ],
        90 => [
            [['_route' => 'delete_user_by_identifiant', '_controller' => 'App\\Controller\\UserController::suprUser'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
