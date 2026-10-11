sudo tail -f /var/log/apache2/access.log     # XAMPP: C:\xampp\apache\logs\access.log
sudo tail -f /var/log/apache2/error.log
# send requests from another terminal:
for i in {1..10}; do curl -s -o /dev/null http://localhost/; done
curl -s -o /dev/null http://localhost/nopage.php       # generates a 404 error
ab -n 100 -c 10 http://localhost/                      # performance test (install apache2-utils)
