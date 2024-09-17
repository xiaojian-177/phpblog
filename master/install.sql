CREATE DATABASE blog_db;
use blog_db;
create table articles (
    id int auto_increment primary key,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    title varchar(255),
    content text,
    mode varchar(4)
);
create table users (
    id int auto_increment primary key,
    username varchar(255),
    password text
);

