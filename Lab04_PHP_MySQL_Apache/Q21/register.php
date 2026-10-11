<?php
require 'db.php';
$hash = password_hash("MySecret123", PASSWORD_DEFAULT);
$stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->execute(['amit', $hash]);
echo "User saved. Hash: " . $hash;
