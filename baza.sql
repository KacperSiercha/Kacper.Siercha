create database baza;
use baza;
CREATE TABLE users 
(
  id int PRIMARY KEY AUTO_INCREMENT,
  username varchar(25),
  password varchar(75)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO users(username, password) VALUES('admin', 'test');