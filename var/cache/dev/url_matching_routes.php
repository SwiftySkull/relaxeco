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
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/litterature/(?'
                    .'|read/(\\d+)(*:68)'
                    .'|d(?'
                        .'|isplay/(\\d+)(*:91)'
                        .'|elete/(\\d+)(*:109)'
                    .')'
                    .'|edit/(\\d+)(*:128)'
                .')'
                .'|/citations/(?'
                    .'|read/(\\d+)(*:161)'
                    .'|d(?'
                        .'|isplay/(\\d+)(*:185)'
                        .'|elete/(\\d+)(*:204)'
                    .')'
                    .'|edit/(\\d+)(*:223)'
                .')'
                .'|/seances/(?'
                    .'|d(?'
                        .'|isplay/(\\d+)(*:260)'
                        .'|elete/(\\d+)(*:279)'
                    .')'
                    .'|edit/(\\d+)(*:298)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [[['_route' => 'literature_read', '_controller' => 'App\\Controller\\Admin\\LiteratureController::read'], ['id'], ['GET' => 0], null, false, true, null]],
        91 => [[['_route' => 'literature_display', '_controller' => 'App\\Controller\\Admin\\LiteratureController::displayOnWebsite'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        109 => [[['_route' => 'literature_delete', '_controller' => 'App\\Controller\\Admin\\LiteratureController::delete'], ['id'], ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, false, true, null]],
        128 => [[['_route' => 'literature_edit', '_controller' => 'App\\Controller\\Admin\\LiteratureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        161 => [[['_route' => 'quotes_read', '_controller' => 'App\\Controller\\Admin\\QuotesController::read'], ['id'], ['GET' => 0], null, false, true, null]],
        185 => [[['_route' => 'quotes_display', '_controller' => 'App\\Controller\\Admin\\QuotesController::displayOnWebsite'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        204 => [[['_route' => 'quotes_delete', '_controller' => 'App\\Controller\\Admin\\QuotesController::delete'], ['id'], ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, false, true, null]],
        223 => [[['_route' => 'quotes_edit', '_controller' => 'App\\Controller\\Admin\\QuotesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        260 => [[['_route' => 'seances_display', '_controller' => 'App\\Controller\\Admin\\SeancesController::displayOnWebsite'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        279 => [[['_route' => 'seances_delete', '_controller' => 'App\\Controller\\Admin\\SeancesController::delete'], ['id'], null, null, false, true, null]],
        298 => [
            [['_route' => 'seances_edit', '_controller' => 'App\\Controller\\Admin\\SeancesController::edit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
