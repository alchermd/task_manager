<?php

return [
    "database" => [
        "connection"=>"mysql:host=localhost",
        "dbname"=>"task_manager",
        "username"=> "username", // Change as necessary
        "password"=> "password", // Change as necessary
        "options"=>[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ],
    ],
];
    
