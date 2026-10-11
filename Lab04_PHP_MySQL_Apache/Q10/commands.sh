sudo mkdir -p /var/www/collegeweb && echo "<h1>College Web</h1>" | sudo tee /var/www/collegeweb/index.html
sudo nano /etc/apache2/sites-available/collegeweb.conf

# Additional commands for this question
sudo a2ensite collegeweb.conf
echo "127.0.0.1 collegeweb.local" | sudo tee -a /etc/hosts
sudo apache2ctl configtest && sudo systemctl reload apache2
