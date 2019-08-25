<?php

return [
  'database' => [
    'name' => 'mytodo',
    'username' => 'root',
    'password' => 'root',
    'connection' => 'mysql:host=localhost',
    'port' => 3306,
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];
