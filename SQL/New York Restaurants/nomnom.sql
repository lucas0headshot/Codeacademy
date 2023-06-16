//1
SELECT *
FROM nomnom;

//2
SELECT DISTINCT neighborhood
FROM nomnom;

//3
SELECT DISTINCT cuisine
FROM nomnom;

//4
SELECT *
FROM nomnom
WHERE cuisine = 'Chinese';

//5
SELECT *
FROM nomnom
WHERE review >= 4;

//6
Select *
  From nomnom
    Where name = 'Italian'
      And price = '$$$';

//7
SELECT *
FROM nomnom
WHERE name LIKE '%meatball%';

//8
Select *
  From nomnom
    Where neighborhood = 'Midtow'
      Or neighborhood = 'Downtown'
        Or neighborhood = 'Chinatown';

//9
SELECT *
FROM nomnom
WHERE health IS NULL;

//10
Select *
  From nomnom
    Order by review Desc
      Limit 5;

//11º
SELECT name,
 CASE
  WHEN review > 4.5 THEN 'Extraordinary'
  WHEN review > 4 THEN 'Excellent'
  WHEN review > 3 THEN 'Good'
  WHEN review > 2 THEN 'Fair'
  ELSE 'Poor'
 END AS 'Review'
FROM nomnom;