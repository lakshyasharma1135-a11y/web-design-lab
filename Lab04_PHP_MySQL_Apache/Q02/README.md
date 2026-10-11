# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q02

**Question:** Configure the php.ini file to enable error reporting (display_errors = On) and verify settings using a phpinfo() script.

## Run / view the answer
- 1. Install PHP. From this question folder, run `php -S 127.0.0.1:8000`.
- 2. Open `http://127.0.0.1:8000/info.php`. If the code uses MySQL or `require`/`include`, complete the lab-level setup and put required shared files/database tables in place first.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q2. Configure the php.ini file to enable error reporting (display_errors = On) and verify settings using a phpinfo() script.

```bash
php --ini                                       # php.ini path
sudo nano /etc/php/*/apache2/php.ini            # XAMPP: C:\xampp\php\php.ini
```

**File: `info.php`**

```php
<?php phpinfo(); ?>
```

```bash
sudo sed -i 's/^display_errors = .*/display_errors = On/' /etc/php/*/apache2/php.ini
sudo sed -i 's/^error_reporting = .*/error_reporting = E_ALL/' /etc/php/*/apache2/php.ini
sudo systemctl restart apache2
```
