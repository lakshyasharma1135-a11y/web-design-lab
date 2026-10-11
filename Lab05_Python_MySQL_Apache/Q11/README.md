# Lab: Lab Sheet 5: Apache, Python and MySQL — Q11

**Question:** Write a Python script that connects to MySQL, performs a parameterized query to prevent SQL injection, and returns filtered results.

## Run / view the answer
- 1. Install Python 3, then run `python solution.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q11. Write a Python script that connects to MySQL, performs a parameterized query to prevent SQL injection, and returns filtered results.

```python
import pymysql
from dbconfig import DB
conn = pymysql.connect(**DB); cur = conn.cursor()
search = "Amit' OR '1'='1"                       # injection attempt
cur.execute("SELECT id, name FROM users WHERE name = %s AND age > %s", (search, 18))
print(cur.fetchall())                            # () empty result, injection fails
conn.close()
```
