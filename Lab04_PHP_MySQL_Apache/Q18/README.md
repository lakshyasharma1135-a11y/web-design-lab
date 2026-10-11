# Lab: Lab Sheet 4: Apache, PHP and MySQL — Q18

**Question:** Test Apache server performance and error logging by examining error.log and access.log files during simulated requests.

## Run / view the answer
- This file contains shell/server commands. Read it first and run commands one at a time only in a suitable Linux/Ubuntu lab VM. Do not blindly run commands requiring `sudo`.

## Expected output
With PHP running and any required MySQL database/tables configured, the page should show the requested result (for example, a table, form, or success message). If it fails, check the database name, credentials, required shared files, and table setup.

## Answer

## Q18. Test Apache server performance and error logging by examining error.log and access.log files during simulated requests.

```bash
sudo tail -f /var/log/apache2/access.log     # XAMPP: C:\xampp\apache\logs\access.log
sudo tail -f /var/log/apache2/error.log
# send requests from another terminal:
for i in {1..10}; do curl -s -o /dev/null http://localhost/; done
curl -s -o /dev/null http://localhost/nopage.php       # generates a 404 error
ab -n 100 -c 10 http://localhost/                      # performance test (install apache2-utils)
```
