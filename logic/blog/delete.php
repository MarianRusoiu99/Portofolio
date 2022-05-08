<?php


include('connectdb.php');
if (isset($_POST['dSubmitBlog'])){

    $id = $_REQUEST['dpostid'];
    

    
    if($sql = mysqli_query($dbConnected, "DELETE FROM blog  WHERE id = '$id' ")){
        echo "post with ID: " . $id . "successfully ddeletedd";
    }
    else{
        echo "Error " . $sql ;
    }
    
    

}
mysqli_close($dbConnected);


?>