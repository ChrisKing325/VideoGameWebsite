CREATE DATABASE IF NOT EXISTS gamereviews;
GRANT ALL PRIVILEGES ON gamereviews.* to 'root'@'localhost' identified by '';
USE gamereviews;

CREATE TABLE videogames (
  id int NOT NULL auto_increment,
  gamename VARCHAR(25),
  ESRBrating VARCHAR(20),
  genre VARCHAR(15),
  releasedate DATE,
  score int,
  replayability VARCHAR(25),
  AdminReview BLOB,
  picturelink VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE systems (
	id int NOT NULL,
	system VARCHAR(20)
);

CREATE TABLE reviews (
	id int NOT NULL,
	userID int,
	userReview BLOB
	PRIMARY KEY(id)
);

CREATE TABLE users (
	id int NOT NULL auto_increment,
	userName VARCHAR(25) NOT NULL,
	password VARCHAR(20) NOT NULL,
	name VARCHAR(20) NOT NULL,
	favConsole VARCHAR(
);
	