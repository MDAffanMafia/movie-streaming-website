/* Create database */
CREATE DATABASE miovie;

/* Select database*/
USE miovie;

/* Create table user_info Id as primary key and username,password,contact,email */
CREATE TABLE user_info(
    Id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
    contact VARCHAR(20) NOT NULL,
    email VARCHAR(20) NOT NULL,
    PRIMARY KEY(Id)
);

/* Create table user_info Id as primary key and movie_name,release_date,views,likes,run_time,description,image_path,video_path */
CREATE TABLE movie_info(
    Id INT NOT NULL AUTO_INCREMENT,
    movie_name VARCHAR(20) NOT NULL,
    release_date VARCHAR(20) NOT NULL,
    views INT NOT NULL,
    likes INT NOT NULL,
    run_time INT NOT NULL,
    description VARCHAR(20) NOT NULL,
    image_path VARCHAR(20) NOT NULL,
    video_path VARCHAR(20) NOT NULL,
    PRIMARY KEY(Id)
);
