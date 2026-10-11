# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q17

**Question:** Write a PHP script that exports MySQL database table data into a downloadable CSV file format.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/db.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q17. Write a PHP script that exports MySQL database table data into a downloadable CSV file format.

**File: `export.php`**

```php
<?php
require 'db.php';
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="students.csv"');
$out = fopen('php://output', 'w');
fputcsv($out, ['ID', 'Name', 'Email', 'Enrollment Date']);
foreach ($pdo->query("SELECT * FROM students") as $row) fputcsv($out, $row);
fclose($out);
```
