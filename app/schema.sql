 CREATE DATABASE blog;
 use blog;
 CREATE TABLE blog_posts(
 id varchar(100),
 title varchar(100),
 text varchar(1000),
 author varchar (100),
 publishDate DATE,
 isActive int(1)
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