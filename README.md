# Laravel internet shop

## Инструкция по установке

### Docker

```bash
docker compose build
docker compose up -d
# Настройка сервера Apache
docker exec -it cinemastore_app bash
apt install nano
nano /etc/apache2/sites-available/000-default.conf
```

> Вставить в файл конфигурацию 

```/etc/apache2/sites-available/000-default.conf
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/html/cinema/public

    <Directory /var/www/html/cinema/public>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

### Bootstrap

В том же контейнере:

```
npm install
npm install bootstrap
npm run dev
```

### Отсчет

