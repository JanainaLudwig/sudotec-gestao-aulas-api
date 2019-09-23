<?php

return [
    'access' => [
        'client_id' => env('PASSPORT_CLIENT_ACCESS_ID'),
        'client_secret' => env('PASSPORT_CLIENT_ACCESS_SECRET'),
    ],
    'grant' => [
        'client_id' => env('PASSPORT_CLIENT_GRANT_ID'),
        'client_secret' => env('PASSPORT_CLIENT_GRANT_SECRET'),
    ],
];
