import pymysql
from dbconfig import DB
conn = pymysql.connect(**DB); cur = conn.cursor()
search = "Amit' OR '1'='1"                       # injection attempt
cur.execute("SELECT id, name FROM users WHERE name = %s AND age > %s", (search, 18))
print(cur.fetchall())                            # () empty result, injection fails
conn.close()
