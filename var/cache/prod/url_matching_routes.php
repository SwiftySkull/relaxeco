<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/accueil-page' => [[['_route' => 'home_page_browse', '_controller' => 'App\\Controller\\Admin\\HomeController::index'], null, null, null, false, false, null]],
        '/accueil-page/edit' => [[['_route' => 'home_page_edit', '_controller' => 'App\\Controller\\Admin\\HomeController::edit'], null, null, null, false, false, null]],
        '/litterature' => [[['_route' => 'literature_browse', '_controller' => 'App\\Controller\\Admin\\LiteratureController::index'], null, null, null, false, false, null]],
        '/litterature/add' => [[['_route' => 'literature_add', '_controller' => 'App\\Controller\\Admin\\LiteratureController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\Admin\\MainController::index'], null, null, null, false, false, null]],
        '/citations' => [[['_route' => 'quotes_browse', '_controller' => 'App\\Controller\\Admin\\QuotesController::index'], null, null, null, false, false, null]],
        '/citations/add' => [[['_route' => 'quotes_add', '_controller' => 'App\\Controller\\Admin\\QuotesController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/seances' => [[['_route' => 'seances_browse', '_controller' => 'App\\Controller\\Admin\\SeancesController::index'], null, null, null, false, false, null]],
        '/seances/add' => [[['_route' => 'seances_add', '_controller' => 'App\\Controller\\Admin\\SeancesController::add'], null, null, null, false, false, null]],
        '/api/all' => [[['_route' => 'api_all', '_controller' => 'App\\Controller\\Api\\MainController::apiAll'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/litterature/(?'
                    .'|read/(\\d+)(*:33)'
                    .'|d(?'
                        .'|isplay/(\\d+)(*:56)'
                        .'|elete/(\\d+)(*:74)'
                    .')'
                    .'|edit/(\\d+)(*:92)'
                .')'
                .'|/citations/(?'
                    .'|read/(\\d+)(*:124)'
                    .'|d(?'
                        .'|isplay/(\\d+)(*:148)'
                        .'|elete/(\\d+)(*:167)'
                    .')'
                    .'|edit/(\\d+)(*:186)'
                .')'
                .'|/seances/(?'
                    .'|d(?'
                        .'|isplay/(\\d+)(*:223)'
                        .'|elete/(\\d+)(*:242)'
                    .')'
                    .'|edit/(\\d+)(*:261)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'literature_read', '_controller' => 'App\\Controller\\Admin\\LiteratureController::read'], ['id'], ['GET' => 0], null, false, true, null]],
        56 => [[['_route' => 'literature_display', '_controller' => 'App\\Controller\\Admin\\LiteratureController::displayOnWebsite'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        74 => [[['_route' => 'literature_delete', '_controller' => 'App\\Controller\\Admin\\LiteratureController::delete'], ['id'], ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, false, true, null]],
        92 => [[['_route' => 'literature_edit', '_controller' => 'App\\Controller\\Admin\\LiteratureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        124 => [[['_route' => 'quotes_read', '_controller' => 'App\\Controller\\Admin\\QuotesController::read'], ['id'], ['GET' => 0], null, false, true, null]],
        148 => [[['_route' => 'quotes_display', '_controller' => 'App\\Controller\\Admin\\QuotesController::displayOnWebsite'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        167 => [[['_route' => 'quotes_delete', '_controller' => 'App\\Controller\\Admin\\QuotesController::delete'], ['id'], ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, false, true, null]],
        186 => [[['_route' => 'quotes_edit', '_controller' => 'App\\Controller\\Admin\\QuotesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        223 => [[['_route' => 'seances_display', '_controller' => 'App\\Controller\\Admin\\SeancesController::displayOnWebsite'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        242 => [[['_route' => 'seances_delete', '_controller' => 'App\\Controller\\Admin\\SeancesController::delete'], ['id'], null, null, false, true, null]],
        261 => [
            [['_route' => 'seances_edit', '_controller' => 'App\\Controller\\Admin\\SeancesController::edit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
