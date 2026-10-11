# Lab: Lab Sheet 7: Online Bookstore (PHP and MySQL) — Q14

**Question:** Implement secure input sanitization and prepared statements across all bookstore database queries to prevent SQL injection.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/solution.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q14. Implement secure input sanitization and prepared statements across all bookstore database queries to prevent SQL injection.

```php
// Unsafe: allows SQL injection
$pdo->query("SELECT * FROM books WHERE id = " . $_GET['id']);
// Safe
$st = $pdo->prepare("SELECT * FROM books WHERE id = ?"); $st->execute([(int)$_GET['id']]);
```
