<?php
/**
 * @Author: h9471
 * @Created: 2019/9/9 14:59
 */

use Nletech\JiYun\Models\Admin;

return [
    /*
    |--------------------------------------------------------------------------
    | JiYun Api auth setting
    |--------------------------------------------------------------------------
    |
    | Authentication settings for all admin pages. Include an authentication
    | guard and a user provider setting of authentication driver.
    |
    | You can specify a controller for `login` `logout` and other auth routes.
    |
    */
    'auth' => [
        'guards' => [
            'admin' => [
                'driver'   => 'jwt',
                'provider' => 'admin',
            ],
        ],
        'providers' => [
            'admin' => [
                'driver' => 'eloquent',
                'model'  => Admin::class,
            ],
        ],
    ],

    'order_pr'  => env('ORDER_PR', 'DEV'),
];
