import csv, pymysql
from dbconfig import DB
with open("users.csv", newline="") as f:
    rows = [(r["name"], r["email"], int(r["age"])) for r in csv.DictReader(f)]
conn = pymysql.connect(**DB); cur = conn.cursor()
cur.executemany("INSERT INTO users (name, email, age) VALUES (%s, %s, %s)", rows)
conn.commit()
print(len(rows), "rows bulk inserted")
conn.close()
