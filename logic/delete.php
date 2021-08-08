<?php
include('connectdb.php');
if(isset($_POST['Submit1'])){
    $Title = $_REQUEST['title'];
    
    
    
    echo '<br>';
    $result1 =  mysqli_query($dbConnected, "SELECT id From test  WHERE title = '$Title'" );
    $row1 = $result1->fetch_assoc();

    $path= "../posts/".$row1['id'].".php";
    if(!unlink($path)){
        echo 'you have an error deleting the post.php';
    }
    else{
        echo 'post successfully deleted';
    }
    echo '<br>';


    $sql = mysqli_query($dbConnected, "DELETE FROM test  WHERE title = '$Title' " );
    if($sql){
        echo 'Row succesfully deleted';
    }
    mysqli_close($dbConnected);

}


?>