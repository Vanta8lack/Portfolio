<?php

	define("site_url", "http://port/");
	define("db_connection", "mysql");
	define("db_name", "portfolio");
	define("db_host", "localhost");
	define("db_username", "root");
	define("db_password", "");

	$con = mysqli_connect(db_host, db_username, db_password, db_name);

	if($con){
		//echo 'Bazaya baglandi';
	}else{
		echo 'Sehv var';
	}
?>