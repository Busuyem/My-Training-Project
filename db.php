<?php

$dbServer="localhost";
$dbuser="root";
$dbpass="";
$dbName="bincomtest";

$con=mysqli_connect($dbServer,$dbuser,$dbpass,$dbName);
if($con){

	echo " ";
}else{
	die("Connection failure".mysqli_error($con));
}
?>