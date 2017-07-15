<?php

	$conn = mysqli_connect('localhost', 'root', '', 'photobin');

	if(!$conn){
		die("Connection failed: ".mysqli_connect_error());
	}
	

	/*

	Tables I created so far

	CREATE TABLE phbinhrm (
	uid int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    first varchar(100) NOT NULL,
    last varchar(100) NOT NULL,
    email varchar(1000) NOT NULL,
    pwd varchar(1000) NOT NULL,
    dob date NOT NULL,
    gender varchar(100) NOT NULL
);


CREATE TABLE posts (
	pid int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    uid int(11) NOT NULL,
    date date NOT NULL,
    caption text NOT NULL
);

*/