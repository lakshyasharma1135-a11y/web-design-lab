import subprocess
from dbconfig import DB
with open("backup.sql", "w") as f:
    subprocess.run(["mysqldump", "-u", DB["user"], f"-p{DB['password']}", DB["database"]], stdout=f, check=True)
print("Backup saved to backup.sql")
