<?php

use App\User;

return [
    'model' => User::class,
    'table' => 'oauth_identities',
    'providers' => [
        'facebook' => [
            'client_id' => '2890156521026008',
            'client_secret' => '60a8d60a833e1b42a5e0361b14ae92e3',
            'redirect_uri' => 'http://localhost:8000/facebook/redirect',
            'scope' => [],
        ],
        'google' => [
            'client_id' => '624298042737-nnhl1mptvaki8f7o9i3vg81h2msira46.apps.googleusercontent.com',
            'client_secret' => 'p2UnrlYUFCT1TRu2evKGih8Q',
            'redirect_uri' => 'http://127.0.0.1:8000/google/redirect',
            'scope' => [],
        ],
        'github' => [
            'client_id' => '8d0b9adf0d51601ee836',
            'client_secret' => 'bb52046ba5fe7eb818cda45d5107230b3b234045',
            'redirect_uri' => 'http://127.0.0.1:8000/github/redirect',
            'scope' => [],
        ],
        'linkedin' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/linkedin/redirect',
            'scope' => [],
        ],
        'instagram' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/instagram/redirect',
            'scope' => [],
        ],
        'soundcloud' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
            'scope' => [],
        ],
    ],
];
