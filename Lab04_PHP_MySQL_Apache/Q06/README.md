# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q06

**Question:** Write a PHP script to insert a new student record into the students table using prepared statements to prevent SQL injection.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/insert.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q6. Write a PHP script to insert a new student record into the students table using prepared statements to prevent SQL injection.

**File: `insert.php`**

```php
<?php
require 'db.php';
$stmt = $pdo->prepare("INSERT INTO students (name, email, enrollment_date) VALUES (:name, :email, :date)");
$stmt->execute([':name' => 'Amit Kumar', ':email' => 'amit@example.com', ':date' => date('Y-m-d')]);
echo "Inserted ID: " . $pdo->lastInsertId();
```
