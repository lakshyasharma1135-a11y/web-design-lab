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
