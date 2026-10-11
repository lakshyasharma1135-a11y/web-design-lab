# Lab: Lab Sheet 6: Apache, Python and MySQL — Q16

**Question:** Test Apache and Python integration by creating a dynamic web endpoint that generates JSON responses from MySQL queries.

## Run / view the answer
- 1. Install Python 3, then run `python api.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q16. Test Apache and Python integration by creating a dynamic web endpoint that generates JSON responses from MySQL queries.

**File: `/usr/lib/cgi-bin/api.py`**

```python
#!/var/www/venv/bin/python
import json, pymysql
from dbconfig import DB
conn = pymysql.connect(**DB, cursorclass=pymysql.cursors.DictCursor)
cur = conn.cursor(); cur.execute("SELECT id, name, email, age FROM users")
data = cur.fetchall(); conn.close()
print("Content-Type: application/json\n")
print(json.dumps(data))
```

```bash
curl http://localhost/cgi-bin/api.py
```
