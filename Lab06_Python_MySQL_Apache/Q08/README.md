# Lab: Lab Sheet 6: Apache, Python and MySQL — Q08

**Question:** Implement a Python script to update user profile information in MySQL based on a given user ID.

## Run / view the answer
- 1. Install Python 3, then run `python solution.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q8. Implement a Python script to update user profile information in MySQL based on a given user ID.

```python
import pymysql
from dbconfig import DB
conn = pymysql.connect(**DB); cur = conn.cursor()
user_id, new_email, new_age = 1, "amit.new@example.com", 25
cur.execute("UPDATE users SET email = %s, age = %s WHERE id = %s", (new_email, new_age, user_id))
conn.commit()
print(cur.rowcount, "row(s) updated")
conn.close()
```
