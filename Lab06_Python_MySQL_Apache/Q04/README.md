# Lab: Lab Sheet 6: Apache, Python and MySQL — Q04

**Question:** Create a Python script that connects to MySQL and creates a database named python_web_db with a table users.

## Run / view the answer
- 1. Install Python 3, then run `python solution.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q4. Create a Python script that connects to MySQL and creates a database named python_web_db with a table users.

```python
import pymysql
conn = pymysql.connect(host="localhost", user="pyuser", password="pypass123")
cur = conn.cursor()
cur.execute("CREATE DATABASE IF NOT EXISTS python_web_db")
cur.execute("USE python_web_db")
cur.execute("""CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    age INT
)""")
conn.commit(); conn.close()
print("Database and table ready")
```
