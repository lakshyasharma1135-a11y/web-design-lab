from mysql.connector import pooling
from dbconfig import DB

pool = pooling.MySQLConnectionPool(pool_name="webpool", pool_size=5, **DB)

def get_users():
    conn = pool.get_connection()          # get a connection from the pool
    try:
        cur = conn.cursor()
        cur.execute("SELECT id, name FROM users")
        return cur.fetchall()
    finally:
        conn.close()                      # returned to the pool, not closed

print(get_users())
