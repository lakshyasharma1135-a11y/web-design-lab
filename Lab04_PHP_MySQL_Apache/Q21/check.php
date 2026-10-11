<?php
require 'db.php';
$stmt = $pdo->prepare("SELECT password FROM users WHERE username = ?");
$stmt->execute(['amit']);
$hash = $stmt->fetchColumn();
echo password_verify("MySecret123", $hash) ? "Password correct" : "Wrong password";
