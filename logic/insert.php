<?php
include('connectdb.php');

if(isset($_POST['Submit']))
{    
     $Title = $_REQUEST['title'];
     $Content = $_REQUEST['content'];
     

     $uploaddir = '../media/';
     $uploadfile = $uploaddir . basename($_FILES['img']['name']);

     echo '<pre>';
     if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
     echo "File is valid, and was successfully uploaded.\n";
     } else {
     echo "Possible file upload attack!\n";
     }

     echo 'Here is some more debugging info:';
     print_r($_FILES);
     $img = $_FILES['img']['name'];

     print "</pre>";


     

     $sql = mysqli_query($dbConnected, "INSERT INTO test  VALUES (NULL,'$Title', '$Content','$img')" );
     
    // echo $Title;
   //  echo $sql;
     mysqli_close($dbConnected);
}
