<?php
	
	$db_host="localhost";// Set host of MySQL Database
	$db_name="foodshala";// Set Database name here
	$db_port="3307"; //Set port of dtabase connection (Default - 3306)
	$db_user="root"; //Set user of the database connection
	$db_password=""; //Set password of the database connection
	

	//remote settings for padmeshkunwar.me/foodshala

	/*
	$db_host="localhost";// Set host of MySQL Database
	$db_name="admin_foodshala";// Set Database name here
	$db_port="3306"; //Set port of dtabase connection (Default - 3306)
	$db_user="admin_foodshala"; //Set user of the database connection
	$db_password="Padmesh@97"; //Set password of the database connection
	*/

	$dsn="mysql:host=".$db_host.";dbname=".$db_name.";port=".$db_port.";";

	try{
		$conn=new PDO($dsn,$db_user,$db_password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo "connection failed".$e->getMessage();
	}

?>