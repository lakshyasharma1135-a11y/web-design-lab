# Lab: Lab Sheet 5: Apache, Python and MySQL — Q05

**Question:** Write a Python script to insert multiple user records into the MySQL database using executemany() method.

## Run / view the answer
- 1. Install Python 3, then run `python solution.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q5. Write a Python script to insert multiple user records into the MySQL database using executemany() method.

```python
import pymysql
from dbconfig import DB
conn = pymysql.connect(**DB); cur = conn.cursor()
data = [("Amit", "amit@example.com", 22), ("Neha", "neha@example.com", 21), ("Ravi", "ravi@example.com", 23)]
cur.executemany("INSERT INTO users (name, email, age) VALUES (%s, %s, %s)", data)
conn.commit()
print(cur.rowcount, "rows inserted")
conn.close()
```
