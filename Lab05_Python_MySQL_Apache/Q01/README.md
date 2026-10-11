# Lab: Lab Sheet 5: Apache, Python and MySQL — Q01

**Question:** Configure Apache web server to execute Python CGI scripts or WSGI applications (mod_wsgi) and verify with a 'Hello World' Python script.

## Run / view the answer
- 1. Install Python 3, then run `python hello.py` from this folder.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q1. Configure Apache web server to execute Python CGI scripts or WSGI applications (mod_wsgi) and verify with a 'Hello World' Python script.

**File: `/usr/lib/cgi-bin/hello.py`**

```python
#!/usr/bin/python3
print("Content-Type: text/html\n")
print("<h1>Hello World from Python CGI</h1>")
```

```bash
sudo chmod +x /usr/lib/cgi-bin/hello.py
curl http://localhost/cgi-bin/hello.py
```

**File: `/var/www/wsgi/hello.py`**

```python
def application(environ, start_response):
    start_response("200 OK", [("Content-Type", "text/plain")])
    return [b"Hello World from WSGI"]
```

**File: `/etc/apache2/conf-available/wsgi-lab.conf`**

```apache
WSGIScriptAlias /hello /var/www/wsgi/hello.py
<Directory /var/www/wsgi>
    Require all granted
</Directory>
```

```bash
sudo a2enconf wsgi-lab && sudo systemctl reload apache2
curl http://localhost/hello
```
