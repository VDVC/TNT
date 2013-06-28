CREATE TABLE posts (
    postID		INT			NOT NULL AUTO_INCREMENT,
    postText	TEXT,
    postTime	DATETIME,
    postUser	INT,
    PRIMARY KEY		(postID)
  )
  DEFAULT CHARSET = latin1 COLLATE = latin1_german1_ci
