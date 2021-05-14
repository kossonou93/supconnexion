<?php

return [


    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],


    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'vendor' => [
            'driver' => 'session',
            'provider' => 'vendors',
        ],
        'ecole' => [
            'driver' => 'session',
            'provider' => 'ecoles',
        ],
        'intervenant' => [
            'driver' => 'session',
            'provider' => 'intervenants',
        ],
    ],


    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ],
        'vendors' => [
            'driver' => 'eloquent',
            'model' => App\Vendor::class,
        ],
        'ecoles' => [
            'driver' => 'eloquent',
            'model' => App\Ecole::class,
        ],
        'intervenants' => [
            'driver' => 'eloquent',
            'model' => App\Intervenant::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],


    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'vendors' => [
            'provider' => 'vendors',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'ecoles' => [
            'provider' => 'ecoles',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'intervenants' => [
            'provider' => 'intervenants',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],


    'password_timeout' => 10800,

];
