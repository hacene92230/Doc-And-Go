<?php

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *     "debug:asset-map" command to see the full list of paths.
 *
 * - "entrypoint" (JavaScript only) set to true for any module that will
 *     be used as an "entrypoint" (and passed to the importmap() Twig function).
 *
 * The "importmap:require" command can be used to add new entries to this file.
 */
return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/turbo' => [
        'version' => '7.3.0',
    ],
    'jquery' => [
        'path' => 'https://code.jquery.com/jquery-3.5.1.min.js',
    ],
    'moment' => [
        'path' => 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js',
    ],
    'fullcalendar' => [
        'path' => 'https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js',
    ],
];
