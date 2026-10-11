# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q11

**Question:** Write a PHP script that checks Apache server environment variables and server software details using $_SERVER superglobal.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/db.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q11. Write a PHP script that checks Apache server environment variables and server software details using $_SERVER superglobal.

**File: `server_info.php`**

```php
<?php
echo "Server software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Server name: "     . $_SERVER['SERVER_NAME'] . "<br>";
echo "Server IP: "       . $_SERVER['SERVER_ADDR'] . "<br>";
echo "Document root: "   . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "Request method: "  . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Client IP: "       . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "PHP version: "     . phpversion();
```
