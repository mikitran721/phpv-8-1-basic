# EXTENSION

## VSC

- Live server
- PHP server: tao server ao, moi lan chay nhan run 1 lan
- PHP Intelephense: goi y code php
- Live Server Web Extension - Chrome;
- `PHPView extension` tren chrome; ho tro view cho PHP

# LUU Y

- do dai cua url request max=255 ky tu
- dung toan tu `??` de tao gia tri default; vd: `$name = $_POST['name'] ?? 'no name';`
- user co the chen ma doc hay ma javascript vao o nhap lieu gui len server; nen can loc du lieu khi nhan vao tu client gui ve
  - su dung `htmlspecialchars($bien)`;
  - sung dung `filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS) ?? 'No name';`
  - du dung `$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);`

## tuong tac MYSQL/MARIADB

- can cai path de chay duoc mysql tren dong lenh;
- su dung command line `mysql -u root -p`
- tao DB `create database name;`
- show ds DB `show database;`
- cho DB de thao tac `use phpapp;`
- show ds tables `show tables`;
- xem cau truc 1 table `desc tblname;`
- lay time hien tai `current_timestamp()`

## cai dat voi `php.ini`

de tat thong bao loi khi deploy san pham, can config lai thong bao loi trong `xampp/php/php.ini`. Cu the:

```php
; display_startup_errors
;   Default Value: On
;   Development Value: On
;   Production Value: Off
```

- Khi dev thi de config cho display_error theo default.

# MINI PROJECT:

- Feedback with action: read,create data with MySQL;

# NOI DUNG TONG QUAN

- Khai báo biến(variable) và hăng(const)

- Dữ liệu kiểu mảng(array) và kiểu đối tượng dạng key-value hay Associative Array
- Câu lệnh điều kiện với if và switch cas
- Duyệt danh sách với vòng lặp for và whil
- Hàm(function) trong PH
- Các hàm làm việc với mảng(array)

- Các hàm xử lý xâu ký tự(string functions)

- Các biến super global: `$_GET, $_GET, $_SERVER`

- Nhập và xử lý dữ liệu trên Form

- Lưu dữ liệu lên trình duyệt với Cookies

- Làm việc với Session trong PHP

- Thao tác đọc, ghi File trong PHP

- Xử lý ngoại lệ với try-catch-finally

- Lớp(class) và đối tượng(object)

- Khai báo phương thức bên trong 1 đối tượng

- Hàm khởi tạo(constructor) trong PHP

- Kết nối PHP với cơ sở dữ liệu MySQL

- Bật XAMPP và thao tác với MySQL từ chế độ dòng lệnh(Command Line)

- Gửi các câu lệnh SQL từ PHP xuống MySQL

- Lọc và validate dữ liệu đầu vào trên Form
