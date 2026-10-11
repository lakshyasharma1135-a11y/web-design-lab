# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q10

**Question:** Configure Apache virtual hosts (httpd-vhosts.conf) to host a local development project directory under a custom domain name (e.g., http://collegeweb.local).

## Run / view the answer
- This file contains shell/server commands. Read it first and run commands one at a time only in a suitable Linux/Ubuntu lab VM. Do not blindly run commands requiring `sudo`.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q10. Configure Apache virtual hosts (httpd-vhosts.conf) to host a local development project directory under a custom domain name (e.g., http://collegeweb.local).

```bash
sudo mkdir -p /var/www/collegeweb && echo "<h1>College Web</h1>" | sudo tee /var/www/collegeweb/index.html
sudo nano /etc/apache2/sites-available/collegeweb.conf
```

```apache
<VirtualHost *:80>
    ServerName collegeweb.local
    DocumentRoot /var/www/collegeweb
    ErrorLog ${APACHE_LOG_DIR}/collegeweb-error.log
    CustomLog ${APACHE_LOG_DIR}/collegeweb-access.log combined
</VirtualHost>
```

```bash
sudo a2ensite collegeweb.conf
echo "127.0.0.1 collegeweb.local" | sudo tee -a /etc/hosts
sudo apache2ctl configtest && sudo systemctl reload apache2
```
