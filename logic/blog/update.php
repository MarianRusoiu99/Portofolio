<?php

date_default_timezone_set('UTC');
include('connectdb.php');
if (isset($_POST['nSubmitBlog'])){

    $ID = $_REQUEST['postid'];

    $date = date("Y-m-d H:i:s");
    $ntitle = $_REQUEST['nblogtitle']; 
    $title = $ntitle . "  ~  Updated on ". $date ." / ";
    $ncontent = $_REQUEST['nblogcontent']; 
    $content = $ncontent. "  ~  Updated on ". $date ." / ";
    
    echo $title . " / ". $content . " / ". $date ;


    if($ntitle!=""){
        $updateTitle = mysqli_query($dbConnected, "UPDATE blog SET title = '$title' WHERE id = '$ID' ");
        if ($updateTitle) {
            echo"Title Updated";
        }
        else{
            echo $updateTitle;
        }    
    }
    if($ncontent!=""){
        $updateContent = mysqli_query($dbConnected, "UPDATE blog SET content = '$content' WHERE id = '$ID' ");
        if ($updateContent) {
            echo"Content Updated";
        }
        else{
            echo $updateContent;
        }    
    }    

}

mysqli_close($dbConnected);



?>