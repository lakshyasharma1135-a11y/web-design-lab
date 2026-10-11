php --ini                                       # php.ini path
sudo nano /etc/php/*/apache2/php.ini            # XAMPP: C:\xampp\php\php.ini

# Additional commands for this question
sudo sed -i 's/^display_errors = .*/display_errors = On/' /etc/php/*/apache2/php.ini
sudo sed -i 's/^error_reporting = .*/error_reporting = E_ALL/' /etc/php/*/apache2/php.ini
sudo systemctl restart apache2
