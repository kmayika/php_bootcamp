DROP TABLE IF EXISTS ft_table;
USE db_day05;
CREATE TABLE ft_table (`id` INT PRIMARY KEY AUTO_INCREMENT, `login` VARCHAR(10) NOT NULL DEFAULT "toto", `group` ENUM('staff', 'student', 'other') NOT NULL, creation_date DATE NOT NULL);