# Lab: Lab Sheet 6: Apache, Python and MySQL — Q14

**Question:** Develop a Python script that reads CSV file data and bulk-inserts rows into a MySQL database table.

## Run / view the answer
- 1. Install Python 3, then run `python solution.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q14. Develop a Python script that reads CSV file data and bulk-inserts rows into a MySQL database table.

**File: `users.csv`**

```
name,email,age
Sita,sita@example.com,20
Karan,karan@example.com,24
Mona,mona@example.com,22
```

```python
import csv, pymysql
from dbconfig import DB
with open("users.csv", newline="") as f:
    rows = [(r["name"], r["email"], int(r["age"])) for r in csv.DictReader(f)]
conn = pymysql.connect(**DB); cur = conn.cursor()
cur.executemany("INSERT INTO users (name, email, age) VALUES (%s, %s, %s)", rows)
conn.commit()
print(len(rows), "rows bulk inserted")
conn.close()
```
