-- [Terminology]
--  Database Management System: software running on a server that gives us database capabilities.
--  Database: a collection of data organized into tables.
--  Database Client: a tool that allows us to communicate with the DBMS.

--  Notes:
--    - Each database can hold multiple tables and each DBMS can manage multiple databases
--    - Within a database, each table must have a unique name
--    - We interact with the DBMS using Structure Query Language (SQL)

-- [Prerequisites]
-- 1. Run through "Checklist For Starting Your EC2 Instance" on Canvas 
-- 		https://missouri.instructure.com/courses/1663/pages/checklist-for-starting-your-ec2-instance?module_item_id=140940


-- [Create and connect to your MySQL database]
-- 1. To create a new MySQL database, ssh into your amazon instance and run 'sudo service mysqld start' 		in the command line (look at prerequisites) 
-- 2. Once the database is created, Go to EC2 Dashboard under the "Description" tab of the running 
-- 		EC2 will list a hostname
-- 3. Download and install a database client like MySQL Workbench: http://dev.mysql.com/downloads/workbench/
-- 4. Use the credentials from EC2 to add a new entry for your database
-- 			* Connection Name: EC2
-- 			* Connection Method: Standard TCP/IP over SSH
-- 		Parameters
-- 			* SSH Hostname: (EC2 Public DNS:22) 
-- 			* SSH Username: ec2-user
-- 			* SSH Key File: "locate your PEM file"
-- * MySQL Hostname: localhost
-- 			* MySQL Server Port: 3306
-- 			* Username: root
-- 5. To create a database, use the following command below, syntax: CREATE DATABASE dbName; 
SHOW DATABASES;

CREATE DATABASE CS2830;

SHOW DATABASES;

show databases;
create database CS2830;

USE CS2830;

SHOW TABLES;

CREATE TABLE foodStock (
	id INT,
    name varchar(50),
    quantity INT,
    cost float
);

DESCRIBE foodStock;

set password for 'root' @ 'localhost' = PASSWORD('nicolle');

select * from users;

describe users;

alter table users add email text default null after password;

alter table users add birthday date default null after email;

alter table users add firstName text default null after id;

alter table users add lastName text default null after firstName;


-- table names are case sensitive
INSERT INTO foodstock VALUES (1, "Bitterballen", 12, 10);

INSERT INTO foodStock VALUES (1, "Bitterballen", 12, 10);
INSERT INTO foodStock VALUES (2, "Poffertjes", 20, 3);
INSERT INTO foodStock VALUES (3, "Ribs", 1, 10.50);
INSERT INTO foodStock VALUES (4, "Sushi", 2, 20);

select * from foodStock;

INSERT INTO foodStock VALUES('Curry', 1, 20);

INSERT INTO foodStock (name, quantity, cost) VALUES ('Curry', 1, 20);

select * from foodStock;

select count(*) from foodStock;

insert into foodStock value (5, 'Curry', 1, 20);

select count(*) from foodStock;

insert into foodStock values (5, 'Herbs', 4, 20);

select * from foodStock;

create table foodStock (
	id int primary key auto_increment,
	name varchar(50)not null unique,
	quantity int unsigned not null,
	cost float unsigned not null
);

show tables;

insert into foodStock (name, quantity, cost) values ('bitterballen', 12, 10);

select * from foodStock;

-- keywords, such as creat, table, insert, into, values, etc. are not case sensitive

insert into foodStock (name, quantity, cost) values ("poffertjes", 20, 3);

insert into foodStock (name, quantity, cost) values ("ribs", 1, 16.50);alter

insert into foodStock (name, quantity, cost) values ("sushi", 2, 20);

insert into foodStock (name, quantity, cost) values ("herbs", 1, 20);

select * from foodStock;

delete from foodStock where id = 5;

insert into foodStock (name, quantity, cost) values ("herbs", 1, 20);

select name from foodStock;

select name, quantity from foodStock;

select name, quantity, cost from foodStock where cost > 10;

-- update

select * from foodStock;

update foodStock set quantity = 30 where id = 1;

select * from foodStock;

-- alter

alter table foodStock add test int default null;

select * from foodStock;

-- this is bad (doesn't have a where clause
update foodStock set test = 1;

select * from foodStock;

alter table foodStock add purchaseDate datetime default null;

describe foodStock;

update foodStock set purchaseDate = now(), quantity = 30 where id = 2;

select * from foodStock;

-- delete

delete from foodStock where id = 1;

select * from foodStock;

show tables;

-- delete table and records (data)
drop table foodStock;

show tables;

select * from foodStock;

Show databases;
use CS2830;
set password for 'root' @ 'localhost' = password('nicolle');

create table users (
	id int primary key auto_increment,
    username varchar(255) not null unique,
	password text not null,
    addDate datetime,
    changeDate datetime
);

insert into users (username, password, addDate, changeDate) values ('nicolle', 'nicolle', now(), now());

select * from users;

update users set password = sha1(password), changeDate = now() where id = 1;

select * from users;

insert into users (username, password, addDate, changeDate)
	values ('test' , sha1('pass'), now(), now());

select * from users;




