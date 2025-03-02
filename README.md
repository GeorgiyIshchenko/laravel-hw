# Laravel internet shop

## Инструкция по установке

### Docker

```bash
docker compose build
docker compose up -d
```

### Bootstrap

В том же контейнере:

```
npm install
npm install bootstrap
npm run dev
```

### Аутентификация Laravel Breeze

В моем любимом контейнере:

```bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install
npm run dev
```

> P.S: При выборе конфигурации breeze выбираем все по умолчанию.


### Запуск Сидеров

Создаст много фильмов, категорий, несколько заказов, а так же пользователей: 

1. admin:admin

2. buyer:buyer

> php artisan migrate:fresh --seed

# Отчёт

## Homepage

**Admin:**
![](./report/admin/homepage.png)

**Authenticated:** - ***Тут также демонстрируется возможность поиска по категории***
![](./report/user/homepage.png)

**Not Authenticated:** - ***Тут также демонстрируется возможность поиска по названию***
![](./report/anonymous/homepage.png)

## Авторизация

> Ивользован готовый laravel breeze

![](./report/auth/image.png)

## Админ-панель

Тут показаны CRUD функционал админ понелей для разных сущностей базы данных.

![](./report/admin/ul.png)
![](./report/admin/el.png)
![](./report/admin/ao.png)
![](./report/admin/ov.png)

## Покупка фильма, просмотр активных заказов на фильм

![](./report/user/co.png)
![](./report/user/vo.png)
