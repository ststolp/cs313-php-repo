CREATE TABLE genre (
	genre_id int PRIMARY KEY,
	genre VARCHAR(255)
);

CREATE TABLE author (
	author_id int PRIMARY KEY,
	fname VARCHAR(255),
    lname VARCHAR(255),
	genre_id int,
	FOREIGN KEY (genre_id) REFERENCES genre(genre_id)
);

CREATE TABLE patron (
	patron_id  int PRIMARY KEY,
	fname VARCHAR(255),
    lname VARCHAR(255)
);

CREATE TABLE books (
	book_id int PRIMARY KEY,
	title VARCHAR(255),
	author_id int,
    patron_id int,
    due_date DATE,
	year DATE,
	publisher VARCHAR(255),
	FOREIGN KEY (author_id) REFERENCES author(author_id),
    FOREIGN KEY (patron_id) REFERENCES patron(patron_id)
);

CREATE SEQUENCE seq_patron
MINVALUE 1
START WITH 1
INCREMENT BY 1
CACHE 10;

INSERT INTO patron (patron_id, fname, lname)
VALUES (seq_patron.curval, "Mr." "Librarian");

CREATE SEQUENCE seq_genre
MINVALUE 1
START WITH 1
INCREMENT BY 1
CACHE 10;

CREATE SEQUENCE seq_author
MINVALUE 1
START WITH 1
INCREMENT BY 1
CACHE 10;

CREATE SEQUENCE seq_books
MINVALUE 1
START WITH 1
INCREMENT BY 1
CACHE 10;

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.curval, "Action");

INSERT INTO author (author_id, fname, lname, genre_id)
VALUES (seq_author.curval, "Suzanne", "Collins", seq_genre.curval);

INSERT INTO books (book_id, title, author_id,
patron_id, due_date, year, publisher)
VALUES (seq_books.curval, "The Hunger Games", seq_author.curval, 1
, TIMESTAMP + 30, 2008, "Scholastic");

INSERT INTO books (book_id, title, author_id,
patron_id, due_date, year, publisher)
VALUES (seq_books.nextval, "Catching Fire", seq_author.curval, 1
, TIMESTAMP + 30, 2009, "Scholastic");

INSERT INTO books (book_id, title, author_id,
patron_id, due_date, year, publisher)
VALUES (seq_books.nextval, "Mockingjay", seq_author.curval, 1
, TIMESTAMP + 30, 2010, "Scholastic");

INSERT INTO author (author_id, fname, lname, genre_id)
VALUES (seq_author.nextval, "Classandra", "Clare", seq_genre.curval);

INSERT INTO books (book_id, title, author_id,
patron_id, due_date, year, publisher)
VALUES (seq_books.nextval, "City of Bones", seq_author.curval, 1
, TIMESTAMP + 30, 2007, "Margaret K. McElderry");

INSERT INTO author (author_id, fname, lname, genre_id)
VALUES (seq_author.nextval, "Clive", "Cluster", seq_genre.curval);

INSERT INTO books (book_id, title, author_id
, patron_id, due_date, year, publisher)
VALUES (seq_books.nextval, "Sahara", seq_author.curval, 1
, TIMESTAMP + 30, 1992, "Simon & Schuster");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Cooking");

INSERT INTO author (author_id, fname, lname, genre_id)
VALUES (seq_author.nextval, "Shizuo", "Tsuji", seq_genre.curval);

INSERT INTO books (book_id, title, author_id,
patron_id, due_date, year, publisher)
VALUES (seq_books.nextval, "Japanese Cooking: A Simple Art", seq_author.curval, 1
, TIMESTAMP + 30, 2006, "Kodansha International");

INSERT INTO books (book_id, title, author_id,
patron_id, due_date, year, publisher)
VALUES (seq_books.nextval, "Practical Japanese Cooking Easy and Elegant", seq_author.curval, 1
, TIMESTAMP + 30, 1986, "Kodansha International");

INSERT INTO author (author_id, fname, lname, genre_id)
VALUES (seq_author.nextval, "Nancy", "Hachisu", seq_genre.curval);

INSERT INTO books (book_id, title, author_id,
patron_id, due_date, year, publisher)
VALUES (seq_books.nextval, "Japan: The Cookbook", seq_author.curval, 1
, TIMESTAMP + 30, 2018, "Phaidon Press");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Adventure");

INSERT INTO author (author_id, fname, lname, genre_id)
VALUES (seq_author.nextval, "Robert Louis", "Stevenson", seq_genre.curval);

INSERT INTO books (book_id, title, author_id,
patron_id, due_date, year, publisher)
VALUES (seq_books.nextval, "Treasure Island", seq_author.curval, 1
, TIMESTAMP + 30, 1883, "Cassell and Company");



INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Biography");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Comedy");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Cooking");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Fantasy");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Fitness");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Historical");

INSERT INTO author (author_id, fname, lname, genre_id)
VALUES (seq_author.nextval, "Walter", "Scott", seq_genre.curval);

INSERT INTO books (book_id, title, author_id,
patron_id, due_date, year, publisher)
VALUES (seq_books.nextval, "Ivanhoe", seq_author.curval, 1
, TIMESTAMP + 30, 1820, "Hurst, Robinson, and Co.");

INSERT INTO author (author_id, fname, lname, genre_id)
VALUES (seq_author.nextval, "Victor", "Hugo", seq_genre.curval);

INSERT INTO books (book_id, title, author_id,
patron_id, due_date, year, publisher)
VALUES (seq_books.nextval, "The Hunchback of Notre-Dame", seq_author.curval, 1
, TIMESTAMP + 30, 1833, "Gosselin");

INSERT INTO books (book_id, title, author_id,
patron_id, due_date, year, publisher)
VALUES (seq_books.nextval, "Les Miserables", seq_author.curval, 1
, TIMESTAMP + 30, 1862, "A. Lacroix, Verboeckhoven & Cie");

INSERT INTO author (author_id, fname, lname, genre_id)
VALUES (seq_author.nextval, "Leo", "Tolstoy", seq_genre.curval);

INSERT INTO books (book_id, title, author_id,
patron_id, due_date, year, publisher)
VALUES (seq_books.nextval, "War and Peace", seq_author.curval, 1
, TIMESTAMP + 30, 1869, "Thre Russian Messanger");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Horror");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Mystery");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Philosophy");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Political");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Romance");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Science Fiction");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Western");

INSERT INTO genre (genre_id, genre)
VALUES (seq_genre.nextval, "Literary");


