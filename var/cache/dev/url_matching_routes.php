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
        '/appointment' => [[['_route' => 'app_appointment_index', '_controller' => 'App\\Controller\\AppointmentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/appointment/all' => [[['_route' => 'app_appointment_all', '_controller' => 'App\\Controller\\AppointmentController::all'], null, ['GET' => 0], null, false, false, null]],
        '/chat-bot' => [[['_route' => 'app_chat', '_controller' => 'App\\Controller\\ChatBotController::index'], null, null, null, false, false, null]],
        '/chat-new' => [[['_route' => 'app_chat_new', '_controller' => 'App\\Controller\\ChatBotController::new'], null, ['POST' => 0], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contact/new' => [[['_route' => 'app_contact_new', '_controller' => 'App\\Controller\\ContactController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/day/work' => [[['_route' => 'app_day_work_index', '_controller' => 'App\\Controller\\DayWorkController::index'], null, ['GET' => 0], null, true, false, null]],
        '/day/work/new' => [[['_route' => 'app_day_work_new', '_controller' => 'App\\Controller\\DayWorkController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/avantage' => [[['_route' => 'app_avantage', '_controller' => 'App\\Controller\\HomeController::avantage'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'app_cgu', '_controller' => 'App\\Controller\\HomeController::cgu'], null, null, null, false, false, null]],
        '/formule' => [[['_route' => 'app_formule', '_controller' => 'App\\Controller\\HomeController::formule'], null, null, null, false, false, null]],
        '/politique' => [[['_route' => 'app_politique', '_controller' => 'App\\Controller\\HomeController::politique'], null, null, null, false, false, null]],
        '/valeur' => [[['_route' => 'app_valeur', '_controller' => 'App\\Controller\\HomeController::valeur'], null, null, null, false, false, null]],
        '/planing' => [[['_route' => 'app_planing_index', '_controller' => 'App\\Controller\\PlaningController::index'], null, ['GET' => 0], null, true, false, null]],
        '/planing/new' => [[['_route' => 'app_planing_new', '_controller' => 'App\\Controller\\PlaningController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reason' => [[['_route' => 'app_reason_index', '_controller' => 'App\\Controller\\ReasonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reason/new' => [[['_route' => 'app_reason_new', '_controller' => 'App\\Controller\\ReasonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/speciality' => [[['_route' => 'app_speciality_index', '_controller' => 'App\\Controller\\SpecialityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/speciality/new' => [[['_route' => 'app_speciality_new', '_controller' => 'App\\Controller\\SpecialityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\UserController::new'], null, null, null, false, false, null]],
        '/user/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/user/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/appointment/(?'
                    .'|new/([^/]++)(*:230)'
                    .'|([^/]++)(*:246)'
                .')'
                .'|/contact/([^/]++)(?'
                    .'|(*:275)'
                    .'|/edit(*:288)'
                    .'|(*:296)'
                .')'
                .'|/day/work/([^/]++)(?'
                    .'|(*:326)'
                    .'|/edit(*:339)'
                    .'|(*:347)'
                .')'
                .'|/planing/([^/]++)(?'
                    .'|(*:376)'
                    .'|/edit(*:389)'
                    .'|(*:397)'
                .')'
                .'|/re(?'
                    .'|ason/([^/]++)(?'
                        .'|(*:428)'
                        .'|/edit(*:441)'
                        .'|(*:449)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:491)'
                .')'
                .'|/speciality/([^/]++)(?'
                    .'|(*:523)'
                    .'|/edit(*:536)'
                    .'|(*:544)'
                .')'
                .'|/([^/]++)/edit(*:567)'
                .'|/user/([^/]++)(?'
                    .'|(*:592)'
                    .'|/edit(*:605)'
                    .'|(*:613)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        230 => [[['_route' => 'app_appointment_new', '_controller' => 'App\\Controller\\AppointmentController::new'], ['doctor'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        246 => [[['_route' => 'app_appointment_delete', '_controller' => 'App\\Controller\\AppointmentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        275 => [[['_route' => 'app_contact_show', '_controller' => 'App\\Controller\\ContactController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        288 => [[['_route' => 'app_contact_edit', '_controller' => 'App\\Controller\\ContactController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        296 => [[['_route' => 'app_contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        326 => [[['_route' => 'app_day_work_show', '_controller' => 'App\\Controller\\DayWorkController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        339 => [[['_route' => 'app_day_work_edit', '_controller' => 'App\\Controller\\DayWorkController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        347 => [[['_route' => 'app_day_work_delete', '_controller' => 'App\\Controller\\DayWorkController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        376 => [[['_route' => 'app_planing_show', '_controller' => 'App\\Controller\\PlaningController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        389 => [[['_route' => 'app_planing_edit', '_controller' => 'App\\Controller\\PlaningController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        397 => [[['_route' => 'app_planing_delete', '_controller' => 'App\\Controller\\PlaningController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        428 => [[['_route' => 'app_reason_show', '_controller' => 'App\\Controller\\ReasonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        441 => [[['_route' => 'app_reason_edit', '_controller' => 'App\\Controller\\ReasonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        449 => [[['_route' => 'app_reason_delete', '_controller' => 'App\\Controller\\ReasonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        491 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        523 => [[['_route' => 'app_speciality_show', '_controller' => 'App\\Controller\\SpecialityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        536 => [[['_route' => 'app_speciality_edit', '_controller' => 'App\\Controller\\SpecialityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        544 => [[['_route' => 'app_speciality_delete', '_controller' => 'App\\Controller\\SpecialityController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        567 => [[['_route' => 'app_status_edit', '_controller' => 'App\\Controller\\StatusController::edit'], ['appointment'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        592 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        605 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        613 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
