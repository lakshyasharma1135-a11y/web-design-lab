# Lab: Lab Sheet 6: Apache, Python and MySQL — Q21

**Question:** Write a Python script to generate analytical summary reports (counts, averages) from MySQL data for administrative dashboards.

## Run / view the answer
- 1. Install Python 3, then run `python solution.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q21. Write a Python script to generate analytical summary reports (counts, averages) from MySQL data for administrative dashboards.

```python
import pymysql
from dbconfig import DB
conn = pymysql.connect(**DB); cur = conn.cursor()
cur.execute("SELECT COUNT(*), AVG(age), MIN(age), MAX(age) FROM users")
cnt, avg, mn, mx = cur.fetchone()
print(f"Total users: {cnt}\nAverage age: {avg:.1f}\nYoungest: {mn}\nOldest: {mx}")
cur.execute("SELECT age, COUNT(*) FROM users GROUP BY age ORDER BY age")
for age, c in cur.fetchall():
    print(f"Age {age}: {c} user(s)")
conn.close()
```
