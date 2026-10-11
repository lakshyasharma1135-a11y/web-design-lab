# Lab: Lab Sheet 6: Apache, Python and MySQL — Q20

**Question:** Configure Python virtual environments (venv) and integrate them with Apache web server deployment settings.

## Run / view the answer
- This file contains shell/server commands. Read it first and run commands one at a time only in a suitable Linux/Ubuntu lab VM. Do not blindly run commands requiring `sudo`.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q20. Configure Python virtual environments (venv) and integrate them with Apache web server deployment settings.

```bash
sudo python3 -m venv /var/www/venv
sudo /var/www/venv/bin/pip install pymysql sqlalchemy
```

**File: `/etc/apache2/conf-available/wsgi-lab.conf`**

```apache
WSGIDaemonProcess pyapp python-home=/var/www/venv python-path=/var/www/wsgi
WSGIProcessGroup pyapp
WSGIScriptAlias /hello /var/www/wsgi/hello.py
```

```bash
sudo systemctl reload apache2
```
