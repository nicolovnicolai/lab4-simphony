<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/form' => [
            [['_route' => 'app_task_new', '_controller' => 'App\\Controller\\TaskController::new'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\TaskController::new'], null, null, null, false, false, null],
        ],
        '/success' => [[['_route' => 'task_success', '_controller' => 'App\\Controller\\TaskController::successAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
