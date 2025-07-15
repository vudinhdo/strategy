## NOTE
### ```cp .env .env.example```
``` 
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=secret
```
### ```docker-compose exec app php artisan key:generate```
### ```docker-compose exec app php artisan migrate```
### ```docker-compose exec app php artisan db:seed```
### ```docker-compose up --build```
