# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q21

**Question:** Write a PHP script utilizing password_hash() and password_verify() to securely store and authenticate hashed user passwords in MySQL.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/register.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q21. Write a PHP script utilizing password_hash() and password_verify() to securely store and authenticate hashed user passwords in MySQL.

**File: `register.php`**

```php
<?php
require 'db.php';
$hash = password_hash("MySecret123", PASSWORD_DEFAULT);
$stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->execute(['amit', $hash]);
echo "User saved. Hash: " . $hash;
```

**File: `check.php`**

```php
<?php
require 'db.php';
$stmt = $pdo->prepare("SELECT password FROM users WHERE username = ?");
$stmt->execute(['amit']);
$hash = $stmt->fetchColumn();
echo password_verify("MySecret123", $hash) ? "Password correct" : "Wrong password";
```
