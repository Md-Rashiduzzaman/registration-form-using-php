<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'registration';

$conn = mysqli_connect($host,$user,$pass) or die ('Database error!');
//Procedural a db connect kora holo 

//$conn = new mysqli(server,username,password,dbname); 
//ata oop(object oriented programming)system a db connection

mysqli_select_db($conn,$dbname);
?>