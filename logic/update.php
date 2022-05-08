<?php
include('connectdb.php');
if(isset($_POST['Submit2'])){
// Title
    $Title = $_REQUEST['title'];
    echo " $Title  <br>";
    
    $newTitle = $_REQUEST['Newtitle'];
    echo " $Title  <br>";
// Content  
    $fullContent = $_REQUEST['content'];
    $Content = nl2br(substr(strip_tags($fullContent), 0, 250));
// Images
    $uploaddir = '../media/';

    $files = array_filter($_FILES['img']['name']);
    $total = count($_FILES['img']['name']);
    $var = $_FILES['img']['name'];


    echo "$files[0]";
// String creation

if ($files[0]!= NULL) {
    for ($i=0 ; $i < $total ; $i++) {

    //Get the temp file path
        $tmpFilePath = $_FILES['img']['tmp_name'][$i];
  
        //Make sure we have a file path
        if ($tmpFilePath != "") {
            //Setup our new file path
            //$uploaddir = '../media/';
            $newFilePath = $uploaddir . $_FILES['img']['name'][$i];
  
            //Upload the file into the temp dir
            if (move_uploaded_file($tmpFilePath, $newFilePath)) {
  
        //Handle other code here
                // $aux = $_FILES['img']['name'][$i];
                $img[] = $_FILES['img']['name'][$i];
            }
        }
    }
}
 
 $str = "";
 
 for($i=0;$i<$total;$i++){
    
    $str = $str.$img[$i]."|";
 }
 $str = rtrim($str, "|");

 

// Select  
    $result2 =  mysqli_query($dbConnected, "SELECT * From test  WHERE title = '$Title'" );
    $row2 = $result2->fetch_assoc();
    $ID = $row2['id'];

    if ($files[0]!= NULL) {
        $aux = $row2['img'].'|'.$str;
    }
    $path= "../posts/".$row2['id'].".php";
// Check and Update
    if($newTitle!=""){
        $updateTitle = mysqli_query($dbConnected, "UPDATE test SET title = '$newTitle' WHERE id = '$ID' ");
        echo"Title Updated"; 
    }
    if($fullContent!=""){
        $updateContent = mysqli_query($dbConnected, "UPDATE test SET fullcontent = '$fullContent' , content = '$Content' WHERE id = '$ID' ");
        echo"Content Updated";
    }
    if($files[0]!= NULL){
        $updateImg = mysqli_query($dbConnected, "UPDATE test SET img = '$aux' WHERE id = '$ID' ");
        echo"Images Updated";
    }





    mysqli_close($dbConnected);

}
