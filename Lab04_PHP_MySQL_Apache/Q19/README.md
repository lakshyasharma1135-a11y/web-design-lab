# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q19

**Question:** Write a PHP script implementing transaction management (beginTransaction(), commit(), rollBack()) in MySQL PDO for secure multi-table operations.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/db.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q19. Write a PHP script implementing transaction management (beginTransaction(), commit(), rollBack()) in MySQL PDO for secure multi-table operations.

```sql
CREATE TABLE accounts (id INT PRIMARY KEY, balance DECIMAL(10,2));
INSERT INTO accounts VALUES (1, 1000), (2, 500);
```

**File: `transfer.php`**

```php
<?php
require 'db.php';
try {
    $pdo->beginTransaction();
    $pdo->prepare("UPDATE accounts SET balance = balance - ? WHERE id = ?")->execute([200, 1]);
    $pdo->prepare("UPDATE accounts SET balance = balance + ? WHERE id = ?")->execute([200, 2]);
    $pdo->commit();
    echo "Transfer successful";
} catch (Exception $e) {
    $pdo->rollBack();
    echo "Failed, rolled back: " . $e->getMessage();
}
```
