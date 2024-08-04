Để cài đặt Laravel, bạn cần phải có các điều kiện sau:

1. **Composer**: Công cụ quản lý phụ thuộc cho PHP.
2. **PHP**: Phiên bản PHP >= 7.3.
3. **Web Server**: Apache hoặc Nginx.

Dưới đây là các bước để cài đặt Laravel:

### Bước 1: Cài đặt Composer

Nếu bạn chưa cài đặt Composer, bạn có thể tải và cài đặt từ [trang chủ của Composer](https://getcomposer.org/download/).

### Bước 2: Cài đặt Laravel thông qua Composer

Mở terminal hoặc command prompt và chạy lệnh sau để cài đặt Laravel:

```
composer global require laravel/installer
```

Đảm bảo rằng thư mục Composer bin đã được thêm vào biến môi trường PATH của bạn. Bạn có thể thêm dòng sau vào tệp `.bashrc`, `.bash_profile`, hoặc `.zshrc` tùy thuộc vào shell bạn đang sử dụng:

```
export PATH="$HOME/.composer/vendor/bin:$PATH"
```

### Bước 3: Tạo dự án Laravel mới

Chạy lệnh sau để tạo một dự án Laravel mới:

```
laravel new project-name
```

Thay thế `project-name` bằng tên dự án của bạn. Laravel sẽ tạo một thư mục mới với tên đó và sao chép các tệp của framework vào đó.

### Bước 4: Cấu hình môi trường

Di chuyển vào thư mục dự án:

```
cd project-name
```

Sao chép tệp `.env.example` thành `.env`:

```
cp .env.example .env
```

Tạo khóa ứng dụng:

```
php artisan key:generate
```

### Bước 5: Cấu hình database

Mở tệp `.env` và cập nhật các thông tin cấu hình database:

```plaintext
DB_CONNECTION=mysql //Luôn là mysql khi bạn sử dụng MariaDB.
DB_HOST=127.0.0.1 //Thông thường là 127.0.0.1 hoặc localhost.
DB_PORT=3306 //Mặc định cho MariaDB là 3306. or Nhấp vào tab "Variables".Tìm biến port để xem
DB_DATABASE=your_database_name 
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### Bước 6: Chạy server phát triển

```
php artisan serve
```

Server sẽ chạy tại địa chỉ `http://localhost:8000`.

Sau khi cập nhật tệp .env, bạn có thể kiểm tra kết nối bằng cách chạy lệnh migration:
```
php artisan migrate
```
