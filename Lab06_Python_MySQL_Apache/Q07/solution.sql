-- sudo mysql
CREATE DATABASE IF NOT EXISTS python_web_db;
CREATE USER IF NOT EXISTS 'pyuser'@'localhost' IDENTIFIED BY 'pypass123';
GRANT ALL PRIVILEGES ON python_web_db.* TO 'pyuser'@'localhost';
FLUSH PRIVILEGES;
