DROP DATABASE IF EXISTS litlebakery;
CREATE DATABASE IF NOT EXISTS littlebakery DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE littlebakery;



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS customers;
CREATE TABLE IF NOT EXISTS customers(
id int(50) NOT NULL,
name varchar(50) NOT NULL,
email varchar(50) NOT NULL,
password varchar(50) NOT NULL
);

SELECT * FROM customers;