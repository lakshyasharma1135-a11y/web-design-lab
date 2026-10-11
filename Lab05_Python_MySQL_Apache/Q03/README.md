# Lab: Lab Sheet 5: Apache, Python and MySQL — Q03

**Question:** Write a Python script to connect to a MySQL database server and execute a query returning the database server version.

## Run / view the answer
- 1. Install Python 3, then run `python solution.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q3. Write a Python script to connect to a MySQL database server and execute a query returning the database server version.

```python
import pymysql
from dbconfig import DB
conn = pymysql.connect(**DB)
cur = conn.cursor()
cur.execute("SELECT VERSION()")
print("MySQL version:", cur.fetchone()[0])
conn.close()
```
