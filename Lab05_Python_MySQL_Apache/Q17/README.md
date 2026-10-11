# Lab: Lab Sheet 5: Apache, Python and MySQL — Q17

**Question:** Write a Python script to backup a MySQL database schema and data into a .sql file programmatically.

## Run / view the answer
- 1. Install Python 3, then run `python solution.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q17. Write a Python script to backup a MySQL database schema and data into a .sql file programmatically.

```python
import subprocess
from dbconfig import DB
with open("backup.sql", "w") as f:
    subprocess.run(["mysqldump", "-u", DB["user"], f"-p{DB['password']}", DB["database"]], stdout=f, check=True)
print("Backup saved to backup.sql")
```

```python
import pymysql
from dbconfig import DB
conn = pymysql.connect(**DB); cur = conn.cursor()
cur.execute("SELECT * FROM users")
with open("backup2.sql", "w") as f:
    cur.execute("SHOW CREATE TABLE users"); f.write(cur.fetchone()[1] + ";\n\n")
    cur.execute("SELECT * FROM users")
    for row in cur.fetchall():
        vals = ", ".join(conn.escape(v) for v in row)
        f.write(f"INSERT INTO users VALUES ({vals});\n")
conn.close()
```
