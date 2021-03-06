<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Ltstream Service address
    |--------------------------------------------------------------------------
    */

    "server" => env("LTSTREAM_SERVER","http://127.0.0.1:8891"),

    /*
    |--------------------------------------------------------------------------
    | Ltstream Service public address
    |--------------------------------------------------------------------------
    */

    "server_public" => env("LTSTREAM_SERVER_PUBLIC","http://127.0.0.1:8091"),

    /*
    |--------------------------------------------------------------------------
    | App Access Key
    |--------------------------------------------------------------------------
    */

    "app_access_key" => env("LTSTREAM_ACCESS_KEY",""),

    /*
    |--------------------------------------------------------------------------
    | App Secret
    |--------------------------------------------------------------------------
    */
    "app_secret" => env("LTSTREAM_SECRET",""),


    /*
    |--------------------------------------------------------------------------
    | Api Version
    |--------------------------------------------------------------------------
    */
    'version' => env('LTSTREAM_VERSION','v1'),
];
