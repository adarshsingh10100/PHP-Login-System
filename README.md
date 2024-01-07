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
