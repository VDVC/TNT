CREATE TABLE addresses (
	addressID	INT		NOT NULL AUTO_INCREMENT,
	email		VARCHAR(256)	NOT NULL,
	firstname	VARCHAR(32),
	lastname	VARCHAR(32),
	birthdate	DATE,
	street		VARCHAR(32),
	zipcode		INT,
	country		CHAR(2),
	city		VARCHAR(32),
	PRIMARY KEY	(userID)
)
DEFAULT CHARSET = latin1 COLLATE = latin1_german1_ci

