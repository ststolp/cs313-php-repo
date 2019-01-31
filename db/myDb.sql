CREATE TABLE genre (
	genre_id int PRIMARY KEY,
	genre VARCHAR(255)
);

CREATE TABLE author (
	author_id int PRIMARY KEY,
	name VARCHAR(255),
	genre_id int,
	FOREIGN KEY (genre_id) REFERENCES genre(genre_id)
);

CREATE TABLE books (
	book_id int PRIMARY KEY,
	title VARCHAR(255),
	author_id int,
	genre_id int,
	year DATE,
	publisher VARCHAR(255),
	FOREIGN KEY (author_id) REFERENCES author(author_id),
	FOREIGN KEY (genre_id) REFERENCES genre(genre_id)
);

CREATE TABLE patron (
	patron_id  int PRIMARY KEY,
	name VARCHAR(255),
	book_id int,
	FOREIGN KEY (book_id) REFERENCES books(book_id)
);
