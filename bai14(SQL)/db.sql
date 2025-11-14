-- if not exists: nếu không tồn tại thì chạy
CREATE DATABASE IF NOT EXISTS quan_ly_phim;
USE quan_ly_phim;
--1. Phim
CREATE TABLE phim(
    id INT PRIMARY KEY,
    ten_phim VARCHAR(50),
    nam_phat_hanh DATE,
    poster TEXT,
    do_tuoi INT,
    dao_dien_id INT,
    dien_vien_id INT,
    the_loai_id INT,
    quoc_gia_id INT,
    so_tap INT,
    mo_ta TEXT
);
--2. Thể loại
CREATE TABLE the_loai(
    id INT PRIMARY KEY,
    ten_the_loai VARCHAR(30),
);
--3. Người dùng
CREATE TABLE nguoi_dung(
    id INT PRIMARY KEY,
    --tai_khoan INT ,
    ten_dang_nhap VARCHAR(50),
    mat_khau VARCHAR(50),
    ho_ten VARCHAR(50),
    email VARCHAR(50),
    sdt VARCHAR(10),
    vai_tro_id INT,
    ngay_sinh DATE
);
--4. Vai trò
CREATE TABLE vai_tro(
    id INT PRIMARY KEY,
    ten_vai_tro VARCHAR(20)
);
--5. Quốc gia
CREATE TABLE quoc_gia(
    id INT PRIMARY KEY,
    ten_quoc_gia VARCHAR(30)
);
--6. Tập phim
CREATE TABLE tap_phim(
    id INT PRIMARY KEY,
    so_tap INT,
    thoi_luong FLOAT,
    trailer VARCHAR(50)
);
--7. Phim - Diễn viên
CREATE TABLE phim_dien_vien(
    id INT PRIMARY KEY,
    phim_id INT,
    dien_vien_id INT
);
--8. Phim - Thể loại
CREATE TABLE phim_the_loai(
    id INT PRIMARY KEY,
    phim_id INT,
    the_loai_id INT
);
