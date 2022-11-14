<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '306233518318-gg97b48corek8vqa9h74ud11oc5hq4jf.apps.googleusercontent.com',
        'client_secret' => 'lwFDMu95Sr_d0sAPY_airdLj',
        'redirect' => 'http://localhost/link_meetings/public/callback/google',
    ],
    'facebook'      => [
        'client_id'     => '645265313052317',
        'client_secret' => '2108a6b0fb7cee275fb4a56a3ff0f53c',
        'redirect'      => 'http://localhost/link_meetings/public/callback/facebook',
    ],

];
