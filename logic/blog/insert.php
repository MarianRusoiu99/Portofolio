<?php

date_default_timezone_set('UTC');
include('connectdb.php');
if (isset($_POST['SubmitBlog'])){

    $title = $_REQUEST['blogtitle'];
    $content = $_REQUEST['blogcontent'];
    $date = date("Y-m-d H:i:s");
    echo $title . " / ". $content . " / ". $date ;


    if($sql = mysqli_query($dbConnected, "INSERT INTO `blog` (`id` , `title` , `date`, `content`)  VALUES (NULL,'$title','$date' ,'$content')")){
        echo "new record created";
    }
    else{
        echo "Error " . $sql ;
    }
    
    

}

mysqli_close($dbConnected);

?>