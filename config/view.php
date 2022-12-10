<?php

return [
    'paths' => [
        resource_path('pages'),
        app_path('/View/template')
    ],

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

];
