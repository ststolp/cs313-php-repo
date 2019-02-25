CREATE TABLE genre (
	genre_id SERIAL PRIMARY KEY,
	genre VARCHAR(255)
);

CREATE TABLE author (
	author_id SERIAL PRIMARY KEY,
	fname VARCHAR(255),
    lname VARCHAR(255),
	genre_id int,
	FOREIGN KEY (genre_id) REFERENCES genre(genre_id)
);

CREATE TABLE patron (
	patron_id SERIAL PRIMARY KEY,
	fname VARCHAR(255),
    lname VARCHAR(255)
);

CREATE TABLE books (
	book_id SERIAL PRIMARY KEY,
	title VARCHAR(255),
	author_id int,
    patron_id int,
    due_date DATE,
	year DATE,
	publisher VARCHAR(255),
	FOREIGN KEY (author_id) REFERENCES author(author_id),
    FOREIGN KEY (patron_id) REFERENCES patron(patron_id)
);
-----------------------------------------------------------------------------------------
INSERT INTO patron (fname, lname) 
VALUES ('The', 'Librarian');

INSERT INTO genre ( genre)
VALUES ('Action');

INSERT INTO author (fname, lname, genre_id)
VALUES ('Suzanne', 'Collins', (SELECT genre_id FROM genre WHERE genre = 'Action') );

INSERT INTO books (title, author_id,
patron_id, due_date, year, publisher)
VALUES ('The Hunger Games', (SELECT author_id FROM author WHERE lname = 'Collins'), 
(SELECT patron_id FROM patron WHERE fname = 'The')
, LOCALTIMESTAMP(2) + interval '30' day, '2008-10-10 10:10:10', 'Scholastic');

INSERT INTO books ( title, author_id,
patron_id, due_date, year, publisher)
VALUES ( 'Catching Fire', (SELECT author_id FROM author WHERE lname = 'Collins')
, (SELECT patron_id FROM patron WHERE fname = 'The')
, LOCALTIMESTAMP(2) + interval '30' day, '2009-10-10 10:10:10', 'Scholastic');

INSERT INTO books (title, author_id,
patron_id, due_date, year, publisher)
VALUES ('Mockingjay', (SELECT author_id FROM author WHERE lname = 'Collins')
, (SELECT patron_id FROM patron WHERE fname = 'The')
, LOCALTIMESTAMP(2) + interval '30' day, '2010-10-10 10:10:10', 'Scholastic');

INSERT INTO author (fname, lname, genre_id)
VALUES ( 'Classandra', 'Clare', (SELECT genre_id FROM genre WHERE genre = 'Action'));

INSERT INTO books (title, author_id,
patron_id, due_date, year, publisher)
VALUES ( 'City of Bones', (SELECT author_id FROM author WHERE fname = 'Classandra'),
 (SELECT patron_id FROM patron WHERE fname = 'The')
, LOCALTIMESTAMP(2) + interval '30' day, '2007-10-10 10:10:10', 'Margaret K. McElderry');

INSERT INTO author (fname, lname, genre_id)
VALUES ('Clive', 'Cluster', (SELECT genre_id FROM genre WHERE genre = 'Action'));

INSERT INTO books (title, author_id
, patron_id, due_date, year, publisher)
VALUES ('Sahara', (SELECT author_id FROM author WHERE fname = 'Clive')
, (SELECT patron_id FROM patron WHERE fname = 'The')
, LOCALTIMESTAMP(2) + interval '30' day, '1992-10-10 10:10:10', 'Simon & Schuster');

-------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------
--not inserted    .

CREATE TABLE users 
(
	id 
)

INSERT INTO genre (genre)
VALUES ("Cooking");

INSERT INTO author (fname, lname, genre_id)
VALUES ( "Shizuo", "Tsuji", 2);

INSERT INTO books (title, author_id,
patron_id, due_date, year, publisher)
VALUES ("Japanese Cooking: A Simple Art", 4, (SELECT patron_id FROM patron WHERE fname = 'The')
, TIMESTAMP + 30, 2006, "Kodansha International");

INSERT INTO books (title, author_id,
patron_id, due_date, year, publisher)
VALUES ("Practical Japanese Cooking Easy and Elegant", 4, (SELECT patron_id FROM patron WHERE fname = 'The')
, TIMESTAMP + 30, 1986, "Kodansha International");

INSERT INTO author ( fname, lname, genre_id)
VALUES ("Nancy", "Hachisu", 2);

INSERT INTO books ( title, author_id,
patron_id, due_date, year, publisher)
VALUES ("Japan: The Cookbook", 5, (SELECT patron_id FROM patron WHERE fname = 'The')
, TIMESTAMP + 30, 2018, "Phaidon Press");

INSERT INTO genre ( genre)
VALUES ( "Adventure");

INSERT INTO author (fname, lname, genre_id)
VALUES ("Robert Louis", "Stevenson", 3);

INSERT INTO books (title, author_id,
patron_id, due_date, year, publisher)
VALUES ("Treasure Island", 6, (SELECT patron_id FROM patron WHERE fname = 'The')
, TIMESTAMP + 30, 1883, "Cassell and Company");



INSERT INTO genre ( genre)
VALUES ("Biography");

INSERT INTO genre ( genre)
VALUES ("Comedy");

INSERT INTO genre ( genre)
VALUES ( "Cooking");

INSERT INTO genre ( genre)
VALUES ("Fantasy");

INSERT INTO genre ( genre)
VALUES ( "Fitness");

INSERT INTO genre ( genre)
VALUES ( "Historical");

INSERT INTO author ( fname, lname, genre_id)
VALUES ( "Walter", "Scott", 9);

INSERT INTO books ( title, author_id,
patron_id, due_date, year, publisher)
VALUES ( "Ivanhoe", 7, (SELECT patron_id FROM patron WHERE fname = 'The')
, TIMESTAMP + 30, 1820, "Hurst, Robinson, and Co.");

INSERT INTO author (fname, lname, genre_id)
VALUES ( "Victor", "Hugo", 9);

INSERT INTO books ( title, author_id,
patron_id, due_date, year, publisher)
VALUES ( "The Hunchback of Notre-Dame", 8, 1
, TIMESTAMP + 30, 1833, "Gosselin");

INSERT INTO books ( title, author_id,
patron_id, due_date, year, publisher)
VALUES ("Les Miserables", 8, (SELECT patron_id FROM patron WHERE fname = 'The')
, TIMESTAMP + 30, 1862, "A. Lacroix, Verboeckhoven & Cie");

INSERT INTO author (fname, lname, genre_id)
VALUES (seq_author.nextval, "Leo", "Tolstoy", 10);

INSERT INTO books (title, author_id,
patron_id, due_date, year, publisher)
VALUES ( "War and Peace", 9, (SELECT patron_id FROM patron WHERE fname = 'The')
, TIMESTAMP + 30, 1869, "Thre Russian Messanger");

INSERT INTO genre ( genre)
VALUES ( "Horror");

INSERT INTO genre ( genre)
VALUES ( "Mystery");

INSERT INTO genre ( genre)
VALUES ( "Philosophy");

INSERT INTO genre ( genre)
VALUES ( "Political");

INSERT INTO genre ( genre)
VALUES ( "Romance");

INSERT INTO genre ( genre)
VALUES ("Science Fiction");

INSERT INTO genre (genre)
VALUES ( "Western");

INSERT INTO genre ( genre)
VALUES ("Literary");


