## NOTE
1. **tạo 1 file .env và copy từ file .env.example**
```cp .env .env.example```
2. **chỉnh sửa dữ liệu trong file .env cho khớp với docker-composer**
``` 
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=secret
```
3. **vì khi copy không có key sẽ dẫn đến web laravel lỗi => lệnh tạo key**
 ```docker-compose exec app php artisan key:generate```
4. **lệnh chạy bảng CSDL trong docker**
```docker-compose exec app php artisan migrate```
5. **lệnh chạy data sẵn**
```docker-compose exec app php artisan db:seed```
6. **Lệnh build**
 ```docker-compose up --build```
7. **chạy**
```http://localhost:8000```
