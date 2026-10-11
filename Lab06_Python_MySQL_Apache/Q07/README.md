# Lab: Lab Sheet 6: Apache, Python and MySQL — Q07

**Question:** Write a Python CGI script that reads form input data via cgi module and inserts the submitted data into MySQL.

## Run / view the answer
- 1. Open `form.html` in Chrome/Edge/Firefox (double-click it).

## Expected output
A standalone form appears, but submitting it works only after Apache CGI and the `add_user.py` endpoint are configured.

## Answer

## Q7. Write a Python CGI script that reads form input data via cgi module and inserts the submitted data into MySQL.

**File: `/var/www/html/form.html`**

```html
<form action="/cgi-bin/add_user.py" method="post">
  Name: <input name="name"><br>
  Email: <input name="email"><br>
  Age: <input name="age" type="number"><br>
  <button>Add</button>
</form>
```

**File: `/usr/lib/cgi-bin/add_user.py`**

```python
#!/var/www/venv/bin/python
import os, sys, pymysql
from urllib.parse import parse_qs
from dbconfig import DB

length = int(os.environ.get("CONTENT_LENGTH") or 0)
form = parse_qs(sys.stdin.read(length))
name  = form.get("name",  [""])[0]
email = form.get("email", [""])[0]
age   = form.get("age",   ["0"])[0]

print("Content-Type: text/html\n")
conn = pymysql.connect(**DB); cur = conn.cursor()
cur.execute("INSERT INTO users (name, email, age) VALUES (%s, %s, %s)", (name, email, age))
conn.commit(); conn.close()
print("<h3>User added successfully</h3><a href='/cgi-bin/list.py'>View users</a>")
```
