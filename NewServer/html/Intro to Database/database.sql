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
--		https://missouri.instructure.com/courses/1663/pages/checklist-for-starting-your-ec2-instance?module_item_id=140940


-- [Create and connect to your MySQL database]
-- 1. To create a new MySQL database, ssh into your amazon instance and run 'sudo service mysqld start' 
--		in the command line (look at prerequisites) 
-- 2. Once the database is created, Go to EC2 Dashboard under the "Description" tab of the running 
--		EC2 will list a hostname
-- 3. Download and install a database client like MySQL Workbench: http://dev.mysql.com/downloads/workbench/
-- 4. Use the credentials from EC2 to add a new entry for your database
-- 			* Connection Name: EC2
-- 			* Connection Method: Standard TCP/IP over SSH
--		Parameters
--			* SSH Hostname: (EC2 Public DNS:22) 
--			* SSH Username: ec2-user
--			* SSH Key File: "locate your PEM file"
--			* MySQL Hostname: localhost
--			* MySQL Server Port: 3306
--			* Username: root
-- 5. To create a database, use the following command below, syntax: CREATE DATABASE dbName; 
