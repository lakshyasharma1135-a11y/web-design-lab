# Lab: Lab Sheet 6: Apache, Python and MySQL — Q02

**Question:** Install Python MySQL connector libraries (mysql-connector-python or PyMySQL) in the local python environment.

## Run / view the answer
- This file contains shell/server commands. Read it first and run commands one at a time only in a suitable Linux/Ubuntu lab VM. Do not blindly run commands requiring `sudo`.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q2. Install Python MySQL connector libraries (mysql-connector-python or PyMySQL) in the local python environment.

```bash
sudo /var/www/venv/bin/pip install mysql-connector-python PyMySQL
/var/www/venv/bin/python -c "import pymysql, mysql.connector; print('Both installed')"
```
