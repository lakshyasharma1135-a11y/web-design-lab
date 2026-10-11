# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q07

**Question:** Develop a PHP script to retrieve and display all records from the students table inside a styled HTML table.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/view.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q7. Develop a PHP script to retrieve and display all records from the students table inside a styled HTML table.

**File: `view.php`**

```php
<?php
require 'db.php';
$rows = $pdo->query("SELECT * FROM students ORDER BY id")->fetchAll();
?>
<style>
 table{border-collapse:collapse;width:80%;margin:20px auto;font-family:Arial}
 th,td{border:1px solid #ccc;padding:8px} th{background:#2a6edb;color:#fff}
 tr:nth-child(even){background:#f2f6ff}
</style>
<table>
 <tr><th>ID</th><th>Name</th><th>Email</th><th>Enrollment Date</th></tr>
 <?php foreach ($rows as $r): ?>
 <tr>
   <td><?= $r['id'] ?></td>
   <td><?= htmlspecialchars($r['name']) ?></td>
   <td><?= htmlspecialchars($r['email']) ?></td>
   <td><?= $r['enrollment_date'] ?></td>
 </tr>
 <?php endforeach; ?>
</table>
```
