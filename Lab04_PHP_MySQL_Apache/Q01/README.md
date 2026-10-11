# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q01

**Question:** Configure and verify the Apache web server installation locally, ensuring the default test page (index.php or index.html) loads correctly on http://localhost.

## Run / view the answer
- This file contains shell/server commands. Read it first and run commands one at a time only in a suitable Linux/Ubuntu lab VM. Do not blindly run commands requiring `sudo`.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q1. Configure and verify the Apache web server installation locally, ensuring the default test page (index.php or index.html) loads correctly on http://localhost.

```bash
sudo systemctl status apache2          # active (running)
curl -I http://localhost               # HTTP/1.1 200 OK
```

```bash
echo "<h1>Apache works</h1>" | sudo tee /var/www/html/index.html
```
