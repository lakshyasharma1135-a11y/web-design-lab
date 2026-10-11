# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q05

**Question:** Create a MySQL database table named students with columns (id, name, email, enrollment_date) using SQL queries executed via PHP script.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/create_table.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q5. Create a MySQL database table named students with columns (id, name, email, enrollment_date) using SQL queries executed via PHP script.

**File: `create_table.php`**

```php
<?php
require 'db.php';
$sql = "CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    enrollment_date DATE NOT NULL
)";
$pdo->exec($sql);
echo "Table students ready.";
```
