# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q08

**Question:** Write a PHP script to update an existing student's email address in the database based on their student ID.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/update.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q8. Write a PHP script to update an existing student's email address in the database based on their student ID.

**File: `update.php`**

```php
<?php
require 'db.php';
$stmt = $pdo->prepare("UPDATE students SET email = :email WHERE id = :id");
$stmt->execute([':email' => 'newmail@example.com', ':id' => 1]);
echo $stmt->rowCount() . " row(s) updated.";
```
