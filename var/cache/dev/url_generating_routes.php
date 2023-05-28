<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'get_list_of_games' => [[], ['_controller' => 'App\\Controller\\GameController::getListOfGames'], [], [['text', '/games']], [], [], []],
    'create_game' => [[], ['_controller' => 'App\\Controller\\GameController::createGame'], [], [['text', '/games']], [], [], []],
    ' getGameInfo' => [['identifiant'], ['_controller' => 'App\\Controller\\GameController::getGameInfo'], [], [['variable', '/', '[^/]++', 'identifiant', true], ['text', '/game']], [], [], []],
    'add_user_to_game' => [['id', 'playerRightId'], ['_controller' => 'App\\Controller\\GameController::addPlayerToGame'], [], [['variable', '/', '[^/]++', 'playerRightId', true], ['text', '/add'], ['variable', '/', '[^/]++', 'id', true], ['text', '/game']], [], [], []],
    'send_choice' => [['identifiant'], ['_controller' => 'App\\Controller\\GameController::play'], [], [['variable', '/', '[^/]++', 'identifiant', true], ['text', '/game']], [], [], []],
    'annuler_game' => [['id'], ['_controller' => 'App\\Controller\\GameController::deleteGame'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/game']], [], [], []],
    'liste_des_users' => [[], ['_controller' => 'App\\Controller\\UserController::getListeDesUsers'], [], [['text', '/users']], [], [], []],
    'user_post' => [[], ['_controller' => 'App\\Controller\\UserController::createUser'], [], [['text', '/users']], [], [], []],
    'get_user_by_id' => [['identifiant'], ['_controller' => 'App\\Controller\\UserController::getUserWithIdentifiant'], [], [['variable', '/', '[^/]++', 'identifiant', true], ['text', '/user']], [], [], []],
    'udpate_user' => [['identifiant'], ['_controller' => 'App\\Controller\\UserController::updateUser'], [], [['variable', '/', '[^/]++', 'identifiant', true], ['text', '/user']], [], [], []],
    'delete_user_by_identifiant' => [['id'], ['_controller' => 'App\\Controller\\UserController::suprUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
];
