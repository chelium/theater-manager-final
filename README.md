# theater-manager-final

You'll have to create a database named 'theaterdb' and a user named 'daenerys' with password 'daenerys' to manage it. To do this, you can use phpmyadmin or you can run the following commands:

CREATE DATABASE theaterdb;
CREATE USER 'daenerys'@'localhost' IDENTIFIED BY 'daenerys';
GRANT ALL ON theaterdb.* TO 'daenerys'@'localhost';