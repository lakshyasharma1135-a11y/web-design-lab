sudo apt update
sudo apt install -y apache2 mariadb-server python3 python3-venv libapache2-mod-wsgi-py3
sudo a2enmod cgi
sudo systemctl restart apache2

# Install Python packages inside a virtual environment
sudo python3 -m venv /var/www/venv
sudo /var/www/venv/bin/pip install pymysql mysql-connector-python sqlalchemy
