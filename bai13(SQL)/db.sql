# username: root and password: (empty)

# Quy ước đặt tên trong lập trình và thiết kế hệ thống
# - camelCase: chữ cái đầu tiên của từ đầu tiên được viết thường, còn lại viết ho chữ cái đầu tiên, vd: hocSinh, sinhVien
# - PascalCase: viết hoa chữ cái đầu tiên của mỗi từ, vd: HocSinh, SinhVien
# - snake_case: viết thường cách nhau bằng dấu gạch dưới --> hay gặp trong phần liên quan đến CSDL

# Khi viết truy vấn, những từ nào laf keyword -> VIẾT IN HOA, vd: CREATE DATABASE quan_ly_sv

# 3. Ôn tập truy vấn
# 3.1. Tạo database
CREATE DATABASE quanLySinhVien;
USE quanLySinhVien;
# 3.2. Tạo bảng
CREATE TABLE sinhVien(
	maSV INT PRIMARY KEY,
    hoTen VARCHAR(50),
    namSinh INT 
);
# 3.3. Chèn dữ liệu vào bảng
INSERT INTO sinhVien (maSV, hoTen, namSinh) VALUES 
(1, "Vuong Ha Linh", 2005),
(2, "Cao Thi Thu Quyen", 2005),
(3, "Pham Huong Giang", 2005),
(4, "Pham Thi Hue", 2005);

# 3.4. Truy vấn 
# 3.4.1. Lấy tất cả dữ liệu
SELECT *FROM sinhVien;
# 3.4.2. Lấy dữ liệu theo điều kiện
SELECT *FROM sinhVien WHERE namSinh > 2001;
# 3.4.3. Sắp xếp dữ liệu 
SELECT *FROM sinhVien ORDER BY hoTen ASC;

# 4. Cập nhậ dữ liệu
UPDATE sinhVien SET namSinh = 2003 WHERE maSV = 1;

# 5. Xóa dữ liệu
DELETE FROM sinhVien WHERE maSV = 1;