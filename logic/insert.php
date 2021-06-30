<?php
include('connectdb.php');

if(isset($_POST['Submit']))
{    
     $Title = $_REQUEST['title'];
     $Content = $_REQUEST['content'];
     $img = $_REQUEST['img'];
     $sql = mysqli_query($dbConnected, "INSERT INTO test  VALUES (NULL,'$Title', '$Content','$img')" );
     
    // echo $Title;
   //  echo $sql;
     mysqli_close($dbConnected);
}
