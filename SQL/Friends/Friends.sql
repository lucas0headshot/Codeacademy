CREATE TABLE friends (
   id INTEGER,
   name TEXT,
   birthday DATE
);

Insert Into friends (id, name, birthday)
  Values (1, 'Ororo Munroe', '1940-05-30');

INSERT INTO friends (id, name, birthday) 
VALUES (2, 'BFF One', 'YYYY-MM-DD');
 
INSERT INTO friends (id, name, birthday) 
VALUES (3, 'BFF Two', 'YYYY-MM-DD');

Update friends
  Set name = 'Storm'
    Where name = 'Ororo Munroe';

Alter Table friends
  Add Column email Text;

Update friends
  Set email = 'storm@codecademy.com';

Delete From friends
  Where id = 1;

Select * From friends;