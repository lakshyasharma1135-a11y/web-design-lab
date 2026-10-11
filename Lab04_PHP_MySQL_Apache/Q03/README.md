# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q03

**Question:** Install and connect to the MySQL database server via command line or graphical interface (e.g., phpMyAdmin), creating a new database named college_db.

## Run / view the answer
- This file contains shell/server commands. Read it first and run commands one at a time only in a suitable Linux/Ubuntu lab VM. Do not blindly run commands requiring `sudo`.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q3. Install and connect to the MySQL database server via command line or graphical interface (e.g., phpMyAdmin), creating a new database named college_db.

```bash
sudo mysql                       # or: mysql -u root -p
```

```sql
CREATE DATABASE college_db;
SHOW DATABASES;
USE college_db;
```
