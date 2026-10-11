# Lab: Lab Sheet 6: Apache, Python and MySQL — Q12

**Question:** Implement connection pooling in Python for efficient database interaction under high Apache server concurrency.

## Run / view the answer
- 1. Install Python 3, then run `python solution.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q12. Implement connection pooling in Python for efficient database interaction under high Apache server concurrency.

```python
from mysql.connector import pooling
from dbconfig import DB

pool = pooling.MySQLConnectionPool(pool_name="webpool", pool_size=5, **DB)

def get_users():
    conn = pool.get_connection()          # get a connection from the pool
    try:
        cur = conn.cursor()
        cur.execute("SELECT id, name FROM users")
        return cur.fetchall()
    finally:
        conn.close()                      # returned to the pool, not closed

print(get_users())
```
