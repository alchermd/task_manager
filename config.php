<?php

return [
    'database' => [
        'connection' => 'mysql:host=localhost',
        'dbname' => 'task_manager',
        'username' => 'root', // Change as necessary
        'password' => 'root', // Change as necessary
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ],
    ],
];
