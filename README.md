# SqlServerAndPhP
+# SqlServerAndPhP
PHP và Sql server
Chuẩn bị
- Download:
+ Xampp - PHP 7.2.4: https://drive.google.com/file/d/1zSFL-RIgS4XZU2dlbDQpFZOHIgIyH8ni/view?usp=sharing
+ Sql server 2014: https://drive.google.com/file/d/1EI-co7f6ecRUIot4pgO8Hjs4lPHlDIDp/view?usp=sharing
+ File kết nối Sql server và PHP: https://drive.google.com/file/d/1ouqahvsp2bSXu9cMyU197fTMO3JxOdgg/view?usp=sharing

Cách cài đặt
- B1: Cài đặt Xampp và Sql Server. Các cài đặt sql server 2014: https://o7planning.org/vi/10299/huong-dan-cai-dat-va-cau-hinh-sql-server-express-2014
- B2: Tải và giải nén file kết nối sql server và php
- B3: Mở xampp control panel. Chọn mục "config" của Apache
- B4: Chọn PHP (php.ini)
- B5: Bấm control + F. Tìm kiếm "extension=". Tìm tới đoạn "extension=bz2". Enter xuống hàng
- B6: Copy đoạn sau vào và Save: extension=php_pdo_sqlsrv_72_ts <xuống hàng> extension=php_sqlsrv_72_ts
- B7: Tạo thư mục và code kết nối

Mẫu kết nối php và sql server là file test.php trong code
