-- CREATE TABLE db_day05.user_card `id` INT PRIMARY KEY AUTO_INCREMENT, `last_name` VARCHAR(10) NOT NULL,`group2` ENUM('other') NOT NULL, `birthdate` DATE NOT NULL;
-- INSERT INTO db_day05.user_card (`last_name`,`group2`,`birthdate`) VALUES ('loki','other','2013-05-01'), ('scadoux','other','2014-01-01'), ('chap','other','2011-04-27'), ('bambou','other','2014-03-01'), ('fantomet','other','2010-04-03');

INSERT INTO db_day05.ft_table (`login`,`group`,`creation_date`)
SELECT last_name, 'other',birthdate
FROM db_day05.user_card
WHERE `last_name` LIKE '%a%' AND LENGTH(`last_name`)<9
ORDER BY `last_name` ASC 
LIMIT 10; 