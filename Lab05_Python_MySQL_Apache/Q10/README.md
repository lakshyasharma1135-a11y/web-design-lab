# Lab: Lab Sheet 5: Apache, Python and MySQL — Q10

**Question:** Configure Apache .htaccess files and handler directives to execute Python scripts seamlessly within web directories.

## Run / view the answer
- This file contains shell/server commands. Read it first and run commands one at a time only in a suitable Linux/Ubuntu lab VM. Do not blindly run commands requiring `sudo`.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q10. Configure Apache .htaccess files and handler directives to execute Python scripts seamlessly within web directories.

```apache
# /etc/apache2/conf-available/pyweb.conf
<Directory /var/www/html/pyapp>
    AllowOverride All
</Directory>
```

```apache
Options +ExecCGI
AddHandler cgi-script .py
DirectoryIndex index.py
```

```bash
sudo a2enconf pyweb && sudo systemctl reload apache2
sudo chmod +x /var/www/html/pyapp/*.py
```
