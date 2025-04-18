<?php

return [
    'paths' => [
        'migrations' => 'database/migrations',
    ],
    'environments' => [
        'default_environment' => 'dev',
        'dev' => [
            'adapter' => 'mysql',
            'host' => 'db', // Alterar para db quando for pro docker
            'name' => 'plataforma',
            'user' => 'root',
            'pass' => 'root',
            'port' => 3306,
            'charset' => 'utf8mb4',
        ],
    ],
];
