# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q14

**Question:** Configure MySQL user privileges by creating a dedicated database user with restricted permissions (SELECT, INSERT, UPDATE) for the web application.

## Run / view the answer
- This file contains shell/server commands. Read it first and run commands one at a time only in a suitable Linux/Ubuntu lab VM. Do not blindly run commands requiring `sudo`.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q14. Configure MySQL user privileges by creating a dedicated database user with restricted permissions (SELECT, INSERT, UPDATE) for the web application.

```sql
CREATE USER 'webapp'@'localhost' IDENTIFIED BY 'StrongPass#123';
GRANT SELECT, INSERT, UPDATE ON college_db.* TO 'webapp'@'localhost';
FLUSH PRIVILEGES;
SHOW GRANTS FOR 'webapp'@'localhost';
```

```bash
mysql -u webapp -p college_db -e "DELETE FROM students;"   # fails with: DELETE command denied
```
