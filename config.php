<?php

return [
    'database' => [
        'connection' => 'mysql:host=localhost',
        'name'       => 'guestbook',
        'username'   => 'root',
        'password'   => '',
        'options'    => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];