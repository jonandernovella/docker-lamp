DROP DATABASE if exists BikeDB;
CREATE DATABASE BikeDB;
USE BikeDB;

CREATE TABLE category
(
	id int PRIMARY KEY,
	name varchar(100) 
	
);

INSERT INTO category (id, name) VALUES(1, 'Elcykel');
INSERT INTO category (id, name) VALUES(2, 'MTB');

CREATE TABLE bikes
(
bike_name varchar(100) PRIMARY KEY, 
price float,
rating int,
cat_id int,
FOREIGN KEY (cat_id) REFERENCES category(id)
);


INSERT INTO bikes (bike_name, price, rating, cat_id) VALUES('Rockrider 560', 174, 5, 2);
INSERT INTO bikes (bike_name, price, rating, cat_id) VALUES('Giant 230', 189, 5, 1);