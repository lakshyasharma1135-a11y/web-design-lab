# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q16

**Question:** Implement cookie management in PHP (setcookie()) to store and retrieve user preferences like theme color.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/db.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q16. Implement cookie management in PHP (setcookie()) to store and retrieve user preferences like theme color.

**File: `theme.php`**

```php
<?php
if (isset($_POST['theme'])) {
    setcookie('theme', $_POST['theme'], time() + 86400 * 30, "/");
    $_COOKIE['theme'] = $_POST['theme'];
}
$theme = $_COOKIE['theme'] ?? 'white';
?>
<body style="background:<?= htmlspecialchars($theme) ?>">
<form method="post">
  <select name="theme"><option>white</option><option>lightblue</option><option>lightgreen</option></select>
  <button>Save theme</button>
</form>
<p>Current theme: <?= htmlspecialchars($theme) ?></p>
</body>
```
