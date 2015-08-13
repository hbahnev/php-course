# creating new table "brands" with columns: "brand_id"(primary key),"name"(with max lenght 50 characters)
DROP TABLE IF EXISTS `brands`;
CREATE TABLE brands (
	brand_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50) NOT NULL
) DEFAULT COLLATE utf8_general_ci ;

# creating new table "regions" with columns:"region_id"(primary key), "name" (with max lenght 50 characters),"country"(with max lenght 50 characters)
DROP TABLE IF EXISTS `regions`;
CREATE TABLE regions (
	region_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50) NOT NULL,
	country VARCHAR(50) NOT NULL
) DEFAULT COLLATE utf8_general_ci ;

# creating new table"cars" with columns: "car_id"(primary key), "color","year","brand_id"(foreign key for table "brands"), "region_id"(foreign key for table "region")
DROP TABLE IF EXISTS `cars`;
CREATE TABLE cars (
	car_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	color VARCHAR(50) NULL,
	year INT NULL,
	brand_id INT NOT NULL,
	region_id INT NOT NULL,
	index brand_id (brand_id),
	index region_id (region_id),
	FOREIGN KEY (brand_id) REFERENCES brands(brand_id) ON DELETE CASCADE, 
	FOREIGN KEY (region_id) REFERENCES regions(region_id) ON DELETE CASCADE 	
) DEFAULT COLLATE utf8_general_ci;

#inerting data into table "brands"
DROP TABLE IF EXISTS `City`;
INSERT INTO brands(name,brand_id) 
VALUES  ('Ауди', 1),
		('БМВ', 2),
		('Мерцедес', 3);

#inerting data into table "regions"
INSERT INTO regions(name,country,region_id) 
VALUES  ('София','България', 1),
		('Варна','България', 2),
		('Бургас','България',3);

#inerting data into table "cars"
INSERT INTO cars(car_id,color,year,brand_id,region_id) 
VALUES  (1,'Сив', 2000, 1, 1),
		(2,'Черен', 2002, 1, 3),
		(3,'Син', 2013, 2, 1);


#updating the brand name "Тойота" with brand name "Мерцедес"
UPDATE 
	brands
SET 
	name = 'Тойота'
WHERE
	name = 'Мерцедес';

#updating the regions that start with letter "В" with region name "Пловдив"
UPDATE 
	regions
SET 
	name = 'Пловдив'
WHERE
	name LIKE 'В%';