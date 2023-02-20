<?php

$hostname = "localhost";
$username= "root";
$password ="";
$dbname = "myfirstdatabase";

// making the connection to the database 

$dbc = mysqli_connect($hostname,$username,$password,$dbname) OR die("Could not connecct to database. Error....");

// echo "Connected to ". $dbname."!";
?>