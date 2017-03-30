<?php

// connexion vers la db
function connectDB(){

	$dbConfig = parse_ini_file(DB_INI);

	$dsn = sprintf(
		// les %s se 
		'%s:dbname=%s;host=%s',
		$dbConfig['DB_DRIVER'],
		$dbConfig['DB_NAME'],
		$dbConfig["DB_HOST"]
	);

	try{

		return new PDO(
			$dsn,
			$dbConfig['DB_USER'],
			$dbConfig['DB_PASS'],
			[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
			]
		);
	}catch(PDOException $e){

		return false;
	}
}