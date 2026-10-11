# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q04

**Question:** Write a PHP script to establish a secure database connection to MySQL using PDO (PHP Data Objects) and verify successful connection status.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/connect.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q4. Write a PHP script to establish a secure database connection to MySQL using PDO (PHP Data Objects) and verify successful connection status.

**File: `connect.php`**

```php
<?php
require 'db.php';
echo "Connected successfully to " . $pdo->query("SELECT DATABASE()")->fetchColumn();
```
