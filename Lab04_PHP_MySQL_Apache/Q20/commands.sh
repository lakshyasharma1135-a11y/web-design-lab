php -m | grep -E "mysqli|pdo_mysql|mbstring|curl"
sudo phpenmod mysqli pdo_mysql mbstring curl      # enable
sudo systemctl restart apache2
