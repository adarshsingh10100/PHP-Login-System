// In This Code There Is Only Code Of Login System You Are Not Going To See Any Other Functionallity In This Code Like Css And Other Html Content It's Simple Login Sytem Using PHP Session And Other Php Code


Create A Database 👉 "newPro"

query to set database;

To Set Querry Open Your CMD (Commmand Prompt)

1 CMD - cd ../..
2 CMD - cd xampp/mysql\bin
3 CMD - mysql -u root -p -h localhost
4 CMD - Press Enter
5 CMD - 👇

create database newPro;

use newPro;

// Now We'll Create A Table In Our Database

CREATE TABLE `newPro`.`user123` (
    `sno` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `datetime` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `newPro`.`contact123` (
    `sno` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `phoneNumber` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `message` VARCHAR(255) NOT NULL,
    `datetime` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
