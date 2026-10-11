# Lab: Lab Sheet 6: Apache, Python and MySQL — Q09

**Question:** Write a Python script to delete a record from the MySQL database and handle database exceptions using try-except blocks.

## Run / view the answer
- 1. Install Python 3, then run `python solution.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q9. Write a Python script to delete a record from the MySQL database and handle database exceptions using try-except blocks.

```python
import pymysql
from dbconfig import DB
try:
    conn = pymysql.connect(**DB); cur = conn.cursor()
    cur.execute("DELETE FROM users WHERE id = %s", (3,))
    conn.commit()
    print("Deleted rows:", cur.rowcount)
except pymysql.MySQLError as e:
    print("Database error:", e)
    conn.rollback()
finally:
    conn.close()
```
