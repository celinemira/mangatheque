<?php

require_once __DIR__ . '/functions/db.php';

[
    'name_members' => $name,
    'email_members' => $email,
    'password_members' => $password
] = $_POST;

$pdo = getConnection();

$query = "INSERT INTO users (name_members, email_members, password_members) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($query);

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$stmt->execute([$name, $email, $hashedPassword]);

header('Location: index.php');
exit;