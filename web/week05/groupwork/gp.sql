CREATE TABLE scriptures(
	id			SERIAL PRIMARY KEY,
	book		VARCHAR(32) NOT NULL,
	chapter		INT NOT NULL,
	verse		INT NOT NULL,
	content		TEXT NOT NULL
);
​
CREATE UNIQUE INDEX scriptures_unique_constr_01 ON scriptures(
	book,
	chapter,
	verse
);
​
INSERT INTO scriptures (
 book,
 chapter,
 verse,
 content) VALUES
 ( 'John'
 , 1
 , 5
 , 'And the light shineth in darkness; and the darkness comprehended it not.'
 );