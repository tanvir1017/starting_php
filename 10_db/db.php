<?php

try {
    
    $pdo = new PDO('sqlite:' . __DIR__ . '/contacts.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Error handling
    $pdo->exec("CREATE TABLE IF NOT EXISTS contacts (
        id INTEGER PRIMARY KEY,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        phone TEXT,
        image TEXT
    );");
    return $pdo;
} catch (PDOException $e) {
    error_log("Database connection failed: " . $e->getMessage());
    echo "Database error: " . $e->getMessage();
    return null;
}