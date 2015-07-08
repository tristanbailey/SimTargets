<?php

// Dev server settings
//

return [
    'app' => [
        'url' => 'http://localhost:8888',
        'hash' => [
            'algo' => PASSWORD_BCRYPT,
            'cost' => 10
            ]
        ],
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'name' => 'slim',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        ],
        'auth' => [
            'session' => 'user_id',
            'remember' => 'user_r'
        ],
#        'mail' => [
#            '' => '',
#            '' => '',
#            '' => ''
#        ]
        'twig' => [
            'debug' => true
        ],
        'csrf' => [
            'session' => 'csrf_token'
        ]       

];

