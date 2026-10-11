<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=bookstore;charset=utf8mb4", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);
function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }   // output sanitize
function require_login() { if (empty($_SESSION['uid'])) { header("Location: login.php"); exit; } }
function require_admin() { if (($_SESSION['role'] ?? '') !== 'admin') { die("Admins only"); } }
