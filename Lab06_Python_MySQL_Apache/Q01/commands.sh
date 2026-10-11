sudo chmod +x /usr/lib/cgi-bin/hello.py
curl http://localhost/cgi-bin/hello.py

# Additional commands for this question
sudo a2enconf wsgi-lab && sudo systemctl reload apache2
curl http://localhost/hello
