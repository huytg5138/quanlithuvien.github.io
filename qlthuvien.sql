--CREATE DATABASE QLThuVien;--
USE QLThuVien;

CREATE TABLE users(
id INT PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(100) NOT NULL UNIQUE,
password VARCHAR (100) NOT NULL,   
created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)


CREATE TABLE readers(
id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(200) NOT NULL ,
email VARCHAR (100) NOT NULL UNIQUE,
phone VARCHAR (20) NOT NULL,
address TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)


CREATE TABLE authors (
id INT PRIMARY KEY AUTO_INCREMENT ,
name VARCHAR(255) NOT NULL,
biography TEXT COMMENT 'Tiểu sử tác giả',
created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)


CREATE TABLE categories (
id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(200) NOT NULL,
description TEXT
)

CREATE TABLE books(
id INT PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(255) NOT NULL,
author_id INT NOT NULL,
category_id INT NOT NULL,
publish_year INT,
quantity INT NOT NULL DEFAULT 1,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  
CONSTRAINT fk_books_author FOREIGN KEY (author_id) REFERENCES authors(id),
CONSTRAINT fk_books_category FOREIGN KEY (category_id) REFERENCES categories(id)
)

CREATE TABLE borrows (
id INT PRIMARY KEY AUTO_INCREMENT,
reader_id INT NOT NULL,
book_id INT NOT NULL,
borrow_date DATE NOT NULL,
return_date DATE,
status VARCHAR(50) NOT NULL COMMENT 'Đang mượn, Đã trả, Quá hạn',
  
CONSTRAINT fk_borrows_reader FOREIGN KEY (reader_id) REFERENCES readers(id)
   ON DELETE CASCADE ON UPDATE CASCADE,
CONSTRAINT fk_borrows_book FOREIGN KEY (book_id) REFERENCES books(id)
    ON DELETE CASCADE ON UPDATE CASCADE
)

CREATE TABLE IF NOT EXISTS tai_khoan (
  id int(11) NOT NULL AUTO_INCREMENT,
  ten_dang_nhap varchar(100),
  mat_khau varchar(100),
  ngay_tao datetime DEFAULT current_timestamp(),
  PRIMARY KEY (id)
);
