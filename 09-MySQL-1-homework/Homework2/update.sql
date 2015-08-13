SELECT 
	name
FROM
	country
WHERE
	Continent IN ("South America","Asia")
AND
	SurfaceArea<13000;

/* 
the result is: 	
Bahrain
Brunei
Cyprus ( I am pretty sure that it's in Europe)
Falkland Islands
Hong Kong
Lebanon
Macao
Maldives
Palestine
Qatar
Singapore
*/