--Class example
CREATE TABLE actor 
(
     actor_id SERIAL PRIMARY KEY
     , name VARCHAR(100) NOT NULL
);

CREATE TABLE movie
( 
    movie_id SERIAL PRIMARY KEY
    , title VARCHAR(100) NOT NULL
    , year SMALLINT 
);

INSERT INTO movie(title, year) VALUES (
    'Return of the Jedi', 1983
);

INSERT INTO movie(title, year) VALUES (
    'Wizard of Oz', 1939
);

INSERT INTO movie(title, year) VALUES (
    'Harry Potter and the Chamber of Secrets', 2002
);

INSERT INTO movie(title, year) VALUES (
    'Return of the King', 2003
);

INSERT INTO actor(name) VALUES 
    ('Orlando Bloom'),
    ('Elijah Wood'),
    ('Jackie Chan'),
    ('Mel Gibson'),
    ('Daniel Radcliffe');

CREATE TABLE movie_actor 
(
    id SERIAL PRIMARY KEY
    , movie_id INT NOT NULL REFERENCES movie(movie_id)
    , actor_id INT NOT NULL REFERENCES actor(actor_id)
);

INSERT INTO movie_actor(movie_id, actor_id) VALUES
 (2, 3),
 (3, 5),
 (1, 4),
 (4, 2);

 SELECT * FROM movie m
 JOIN movie_actor ma ON m.movie_id = ma.movie_id
 JOIN actor a ON ma.actor_id = a.actor_id
 WHERE title = 'The Return of the King';