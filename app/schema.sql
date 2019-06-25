 CREATE DATABASE blog;
 CREATE TABLE blog_posts(
 id varchar(100),
 title varchar(100),
 text varchar(1000),
 author varchar (100),
 publishDate CURRENT_DATE,
 isActive bit
 );
 CREATE TABLE categories(
 id varchar (20),
 name varchar (100)
 );
 CREATE TABLE users(
 id varchar (20),
 name varchar (20),
 email varchar (100),
 avatar varchar (150),
 password varchar (16),
 isActive bit
 );