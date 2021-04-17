CREATE TABLE users (
    Id int NOT NULL AUTO_INCREMENT,
    FirstName varchar(255),
    LastName varchar(255),
    PersonalNumber varchar(255) UNIQUE,
    Email VARCHAR(320) UNIQUE,
    HashedPassword CHAR(60),
    StatusId int,
    PRIMARY KEY (Id)
);
-- DROP TABLE users