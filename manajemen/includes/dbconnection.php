<?php 

const DB_HOST = 'mysql_db';
const DB_USER = 'admin';
const DB_PASSWORD = 'root';
const DB_NAME     = 'ccmsdb';

$dbcon = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if($dbcon->connect_error){
	die("Database connection failed".$dbcon->connect_error);
}

?>
