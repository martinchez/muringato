<?php
$server = "localhost";
$username = "root";
$password = "";
$databse = "muringato";

$conn =new mysqli($server,$username,$password,$databse);

if(!$conn){
	die("Could not connect to database!!:" .mysql_error());
}
?>