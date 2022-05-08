<?php

$hostname="localhost";
$username="u283226794_Vali";
$password="Lifeisstrange123";

$databaseName = "u283226794_Portofoliodb";

$dbConnected = mysqli_connect($hostname,$username,$password);

$dbSelected = mysqli_select_db($dbConnected, $databaseName);

$dbSuccess = 0;
if(($dbConnected && $dbSelected)== 1 ){
    $dbSuccess = 1;
}
//echo $dbSuccess;


?>