<?php
mysql_connect("localhost","-u root"," ");

mysql_query("drop database if exists workers;");
mysql_query("create database workers;");
mysql_query("use workers;");
mysql_query("create table workers(id int not null auto_increment primary key, 
	 name char(30), surname char(30), fathersname char(30), age int, sex char (1), position char(50), experience int);");
mysql_query("insert into workers (name,surname,fathersname,age,sex,position,experience) 
	values ('Davidov', 'Oleg','Ivanovich',29,'m','byhalter', 5);");
mysql_query("insert into workers (name,surname,fathersname,age,sex,position,experience) 
	values ('Bastovoy', 'Ivan','Perovich',35,'m','mehanic', 15);");
mysql_query("insert into workers (name,surname,fathersname,age,sex,position,experience) 
	values ('Rydenko', 'Marina','Davidovna',25,'f','menedger', 3);");
echo "Ok.";
?>
