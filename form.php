<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$message = $_POST['message'];

if ($firstName && $lastName && $message) {
    try {
        $pdo = new PDO('sqlite:' . dirname(__FILE__) . '/database.db');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->query(
            'CREATE TABLE IF NOT EXISTS message (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            first_name VARCHAR(50) NOT NULL,
            last_name VARCHAR(50) NOT NULL,
            message TEXT NOT NULL
            )'
        );

        $pdo->prepare(
            'INSERT INTO message (first_name, last_name, message) VALUES (:first_name, :last_name, :message)'
        );
        $statement->bindValue('first_name', $firstName, PDO::PARAM_STR);
        $statement->bindValue('last_name', $lastName, PDO::PARAM_STR);
        $statement->bindValue('message', $message, PDO::PARAM_STR);
        $statement->execute();
    } catch (PDOException $exception) {
        var_dump($exception);
    }
}