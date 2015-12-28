<?php

return [

    'multi' => [
        'user' => [
            'driver' => 'eloquent',
            'model'  => App\User::class,
            'table'  => 'users'
        ],
        'admin' => [
            'driver' => 'eloquent',
            'model'  => App\Admin::class,
            'table'  => 'admins'
        ]
    ],

    'password' => [
        'email' => 'emails.password',
        'table' => 'password_resets',
        'expire' => 60,
    ],

];
