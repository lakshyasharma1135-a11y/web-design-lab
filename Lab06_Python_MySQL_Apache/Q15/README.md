# Lab: Lab Sheet 6: Apache, Python and MySQL — Q15

**Question:** Write a Python script utilizing SQLAlchemy ORM to map Python classes to MySQL database tables.

## Run / view the answer
- 1. Install Python 3, then run `python solution.py` from this folder.
- 2. Database examples require the lab setup, a running MySQL/MariaDB service, matching credentials, and any required tables.

## Expected output
The script should print or return the requested result when run. Database-related examples require the correct Python packages, a running MySQL/MariaDB service, matching credentials, and required tables.

## Answer

## Q15. Write a Python script utilizing SQLAlchemy ORM to map Python classes to MySQL database tables.

```python
from sqlalchemy import create_engine, Column, Integer, String
from sqlalchemy.orm import declarative_base, sessionmaker

engine = create_engine("mysql+pymysql://pyuser:pypass123@localhost/python_web_db")
Base = declarative_base()

class User(Base):
    __tablename__ = "users"
    id = Column(Integer, primary_key=True)
    name = Column(String(100))
    email = Column(String(100))
    age = Column(Integer)

Session = sessionmaker(bind=engine)
s = Session()
s.add(User(name="Tina", email="tina@example.com", age=22))
s.commit()
for u in s.query(User).filter(User.age > 20).all():
    print(u.id, u.name, u.email)
s.close()
```
