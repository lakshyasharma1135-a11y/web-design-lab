# Lab: Lab Sheet 6: Apache, Python and MySQL — Q13

**Question:** Write a Python script to log database error messages and access timestamps into a dedicated server log file.

## Run / view the answer
- 1. Install Python 3, then run `python solution.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q13. Write a Python script to log database error messages and access timestamps into a dedicated server log file.

```python
import logging, pymysql
from datetime import datetime
from dbconfig import DB

logging.basicConfig(filename="/tmp/pyweb.log", level=logging.INFO,
                    format="%(asctime)s %(levelname)s %(message)s")
logging.info("Request received at %s", datetime.now())
try:
    conn = pymysql.connect(**{**DB, "password": "wrong"})
except pymysql.MySQLError as e:
    logging.error("DB connection failed: %s", e)
```

```bash
cat /tmp/pyweb.log
```
