# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q20

**Question:** Configure PHP extensions (such as mysqli, pdo_mysql, mbstring, curl) in php.ini and verify their active status.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/solution.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q20. Configure PHP extensions (such as mysqli, pdo_mysql, mbstring, curl) in php.ini and verify their active status.

```bash
php -m | grep -E "mysqli|pdo_mysql|mbstring|curl"
sudo phpenmod mysqli pdo_mysql mbstring curl      # enable
sudo systemctl restart apache2
```

```php
<?php
foreach (['mysqli', 'pdo_mysql', 'mbstring', 'curl'] as $e)
    echo $e . ": " . (extension_loaded($e) ? "ENABLED" : "missing") . "<br>";
```
