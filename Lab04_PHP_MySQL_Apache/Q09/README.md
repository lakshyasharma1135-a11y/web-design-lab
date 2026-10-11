# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q09

**Question:** Implement a PHP script to delete a specific student record from the database using a URL parameter (GET request).

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/delete.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q9. Implement a PHP script to delete a specific student record from the database using a URL parameter (GET request).

**File: `delete.php`**

```php
<?php
require 'db.php';
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) { die("Invalid ID"); }
$stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
$stmt->execute([$id]);
echo $stmt->rowCount() ? "Deleted." : "No such record.";
```
