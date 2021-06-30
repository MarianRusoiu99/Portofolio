<?php

$hostname="localhost";
$username="root";
$password="";

$databaseName = "pages";

$dbConnected = mysqli_connect($hostname,$username,$password);

$dbSelected = mysqli_select_db($dbConnected, $databaseName);

$dbSuccess = 0;
if(($dbConnected && $dbSelected)== 1 ){
    $dbSuccess = 1;
}
//echo $dbSuccess;


?>