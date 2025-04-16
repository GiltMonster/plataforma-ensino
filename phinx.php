<?php

return [
    'paths' => [
        'migrations' => 'database/migrations',
    ],
    'environments' => [
        'default_database' => 'dev',
        'dev' => [
            'adapter' => 'mysql',
            'host' => 'localhost', // Alterar para db quando for pro docker
            'name' => 'plataforma',
            'user' => 'root',
            'pass' => 'rootroot',
            'port' => 3306,
            'charset' => 'utf8mb4',
        ],
    ],
];
