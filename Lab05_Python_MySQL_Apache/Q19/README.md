# Lab: Lab Sheet 5: Apache, Python and MySQL — Q19

**Question:** Write a Python script that verifies and sanitizes incoming web form inputs before executing SQL write operations.

## Run / view the answer
- 1. Install Python 3, then run `python solution.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q19. Write a Python script that verifies and sanitizes incoming web form inputs before executing SQL write operations.

```python
import re, html, pymysql
from dbconfig import DB

def clean_user(name, email, age):
    name = html.escape(name.strip())
    if not re.fullmatch(r"[A-Za-z ]{2,50}", name):
        raise ValueError("Invalid name")
    if not re.fullmatch(r"[^@\s]+@[^@\s]+\.[a-z]{2,}", email.strip(), re.I):
        raise ValueError("Invalid email")
    age = int(age)
    if not 1 <= age <= 120:
        raise ValueError("Invalid age")
    return name, email.strip().lower(), age

try:
    vals = clean_user("  Rahul ", "rahul@example.com", "24")
    conn = pymysql.connect(**DB); cur = conn.cursor()
    cur.execute("INSERT INTO users (name, email, age) VALUES (%s, %s, %s)", vals)
    conn.commit(); conn.close(); print("Saved", vals)
except ValueError as e:
    print("Rejected:", e)
```
