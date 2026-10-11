# Lab: Lab Sheet 6: Apache, Python and MySQL — Q06

**Question:** Develop a Python script that retrieves all records from the users table and formats them into an HTML response string.

## Run / view the answer
- 1. Install Python 3, then run `python list.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q6. Develop a Python script that retrieves all records from the users table and formats them into an HTML response string.

**File: `/usr/lib/cgi-bin/list.py`**

```python
#!/var/www/venv/bin/python
import pymysql, html
from dbconfig import DB
conn = pymysql.connect(**DB); cur = conn.cursor()
cur.execute("SELECT id, name, email, age FROM users")
rows = cur.fetchall(); conn.close()

out = "<table border='1' cellpadding='6'><tr><th>ID</th><th>Name</th><th>Email</th><th>Age</th></tr>"
for r in rows:
    out += "<tr>" + "".join(f"<td>{html.escape(str(c))}</td>" for c in r) + "</tr>"
out += "</table>"
print("Content-Type: text/html\n")
print(out)
```
