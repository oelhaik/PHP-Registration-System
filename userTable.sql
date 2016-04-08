CREATE TABLE USERS (
USER_ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
FIRSTNAME VARCHAR(30) NOT NULL,
LASTNAME VARCHAR(30) NOT NULL,
ADDRESS1 VARCHAR(150) NOT NULL,
ADDRESS2 VARCHAR(150),
CITY VARCHAR(100),
STATE VARCHAR(100),
ZIP VARCHAR(10),
COUNTRY VARCHAR(100),
DATE_REGISTERED DATETIME
);