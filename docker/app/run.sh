#!/bin/bash
set -e

cat <<EOF > /etc/apache2/sites-available/000-default.conf
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    ServerName localhost

    DocumentRoot /var/www/html/cinema/public

    <Directory /var/www/html/cinema/public>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog \${APACHE_LOG_DIR}/error.log
    CustomLog \${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
EOF

chown -R www-data:www-data /var/www/html/cinema
chmod -R 755 /var/www/html/cinema

cd /var/www/html/cinema

# sleep 5
# php artisan migrate --force
# php artisan db:seed --force

# npm install
# npm install bootstrap
# npm run dev &

exec apache2-foreground
