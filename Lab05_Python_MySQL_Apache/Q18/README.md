# Lab: Lab Sheet 5: Apache, Python and MySQL — Q18

**Question:** Implement user session handling in a Python web script interacting with MySQL backend storage.

## Run / view the answer
- 1. Install Python 3, then run `python session.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q18. Implement user session handling in a Python web script interacting with MySQL backend storage.

```sql
CREATE TABLE sessions (sid VARCHAR(64) PRIMARY KEY, username VARCHAR(50), created TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
```

**File: `/usr/lib/cgi-bin/session.py`**

```python
#!/var/www/venv/bin/python
import os, uuid, pymysql
from http.cookies import SimpleCookie
from dbconfig import DB

cookie = SimpleCookie(os.environ.get("HTTP_COOKIE", ""))
conn = pymysql.connect(**DB); cur = conn.cursor()
sid = cookie["sid"].value if "sid" in cookie else None

cur.execute("SELECT username FROM sessions WHERE sid = %s", (sid,))
row = cur.fetchone()
if row:
    print("Content-Type: text/html\n"); print("Welcome back, " + row[0])
else:
    sid = uuid.uuid4().hex
    cur.execute("INSERT INTO sessions (sid, username) VALUES (%s, %s)", (sid, "guest"))
    conn.commit()
    print(f"Set-Cookie: sid={sid}; HttpOnly; Path=/")
    print("Content-Type: text/html\n"); print("New session created for guest")
conn.close()
```
