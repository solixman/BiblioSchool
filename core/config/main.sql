-- Active: 1734440686530@@127.0.0.1@3306@bibllioschool
CREATE database bibllioschool

create table users(
    ID int AUTO_INCREMENT not null,
    PRIMARY KEY(ID),
    firstName varchar(25),
    lastName varchar(25),
    phoneNumber varchar(10),
    Email varchar(50),
    Password varchar(50)
)

create table books(
    ID int AUTO_INCREMENT not null,
    PRIMARY KEY(ID),
    Name varchar(50),
    Author VARCHAR(25)

)

create table reservations (
    ID int AUTO_INCREMENT not null,
    PRIMARY KEY(ID),
    reservationDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PeriodInDays int ,
    booksID int ,
    Foreign Key (booksID) REFERENCES books(ID)
);

 create table tags(
    ID int AUTO_INCREMENT not null,
    PRIMARY KEY(ID),
    TagName varchar(50),
    booksID int,
    Foreign Key (booksID) REFERENCES books(ID)
 )

 create table categories(
    ID int AUTO_INCREMENT not null,
    PRIMARY KEY(ID),
    categorieName varchar(50),
    booksID int,
    Foreign Key (booksID) REFERENCES books(ID)
 )

 create table states(
    ID int AUTO_INCREMENT not null,
    PRIMARY KEY(ID),
    reservationState varchar(25),
    reservationsID int ,
    Foreign Key (reservationsID) REFERENCES reservations(ID)
 )

 create table role (
    ID int AUTO_INCREMENT not null,
    PRIMARY key(ID),
    role  varchar(25),
    usersID int ,
    Foreign Key (usersId) REFERENCES users(ID)
 )



