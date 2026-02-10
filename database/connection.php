<?php

$config = require __DIR__ . '/../config/database.php';

$db = $config['connections'][$config['default']];

try {

    $pdo = new PDO(
        "{$db['driver']}:host={$db['host']};port={$db['port']};dbname={$db['database']};charset={$db['charset']}",
        $db['username'],
        $db['password'],
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_PERSISTENT         => false,
        ]
    );

} catch (PDOException $e) {

    die('Database connection failed: ' . $e->getMessage());
}

return $pdo;
