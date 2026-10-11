# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q15

**Question:** Write a PHP script demonstrating session management (session_start(), $_SESSION) to maintain user login state across multiple pages.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/s_login.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q15. Write a PHP script demonstrating session management (session_start(), $_SESSION) to maintain user login state across multiple pages.

**File: `s_login.php`**

```php
<?php
session_start();
$_SESSION['user'] = 'amit';
echo "Logged in. <a href='s_page.php'>Go to page</a>";
```

**File: `s_page.php`**

```php
<?php
session_start();
echo isset($_SESSION['user']) ? "Welcome, " . htmlspecialchars($_SESSION['user']) . " <a href='s_logout.php'>Logout</a>" : "Please login first.";
```

**File: `s_logout.php`**

```php
<?php
session_start(); session_unset(); session_destroy();
echo "Logged out.";
```
