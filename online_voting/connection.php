<?php
error_reporting(1);
const DB_HOST = 'mysql';
const DB_USER = 'user';
const DB_PASSWORD = 'root';
const DB_NAME     = 'poll';

$dbcon = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if($dbcon->connect_error){
	die("Database connection failed".$dbcon->connect_error);
}

?>
