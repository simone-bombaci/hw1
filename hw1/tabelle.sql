create database web;

use web;

create table users(
id int primary key auto_increment,
nome char(255) not null,
cognome char(255) not null,
email   char(255) unique not null,
password char(255) not null)
engine='innodb';

create table preferiti(
titolo char(255) primary key,
descrizione char(255) not null,
contenuto char(255) not null,
immagine char(255) not null)
Engine='Innodb';
