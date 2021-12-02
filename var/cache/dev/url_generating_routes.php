<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\DefaultController::home'], [], [['text', '/']], [], []],
    'collection' => [[], ['_controller' => 'App\\Controller\\DefaultController::collection'], [], [['text', '/collection']], [], []],
    'wishlist' => [[], ['_controller' => 'App\\Controller\\DefaultController::wishlist'], [], [['text', '/wishlist']], [], []],
    'next-releases' => [[], ['_controller' => 'App\\Controller\\DefaultController::nextReleases'], [], [['text', '/next-releases']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\DefaultController::createMessage'], [], [['text', '/contact']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\DefaultController::login'], [], [['text', '/login']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\DefaultController::register'], [], [['text', '/register']], [], []],
    'single' => [[], ['_controller' => 'App\\Controller\\DefaultController::single'], [], [['text', '/single']], [], []],
    'admin-books' => [[], ['_controller' => 'App\\Controller\\DefaultController::adminBooks'], [], [['text', '/admin-books']], [], []],
    'create-manga' => [[], ['_controller' => 'App\\Controller\\DefaultController::createManga'], [], [['text', '/create-manga']], [], []],
    'create-tome' => [[], ['_controller' => 'App\\Controller\\DefaultController::createTome'], [], [['text', '/create-tome']], [], []],
    'admin-reviews' => [[], ['_controller' => 'App\\Controller\\DefaultController::adminReviews'], [], [['text', '/admin-reviews']], [], []],
    'admin-messages' => [[], ['_controller' => 'App\\Controller\\DefaultController::adminMessages'], [], [['text', '/admin-messages']], [], []],
    'search' => [[], ['_controller' => 'App\\Controller\\DefaultController::viewGenre'], [], [['text', '/search']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];
