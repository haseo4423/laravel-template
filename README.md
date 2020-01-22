## Getting Started

### cloning devbase-laravel & changing directory

```
$ git clone {ThisRepository}
$ cd ../
```

### build & start container

```
$ ./vessel start
```

### get into php container

```
$ docker-compose exec php /bin/bash
```

### composer install

```
$ cd devbase-laravel/
$ composer install
```

### copy .env

```
$ cp .env.example .env
```

### edit .env

```
DB_HOST=mysql
DB_DATABASE=root
DB_PASSWORD=root
```

### generate key

```
$ php artisan key:generate
```

### migrate database

```
$ php artisan migrate --seed
```

### Enjoy!

## LaravelAdminLTE

[LaravelAdminLTE](https://github.com/jeroennoten/Laravel-AdminLTE)
