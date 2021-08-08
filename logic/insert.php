<?php
include('connectdb.php');

if(isset($_POST['Submit']))
{    
     $Title = $_REQUEST['title'];
     $fullContent = $_REQUEST['content'];
     $Content = nl2br(substr(strip_tags($fullContent), 0, 250));

     $uploaddir = '../media/';
    // $uploadfile = $uploaddir . basename($_FILES['img']['name']);

     $files = array_filter($_FILES['img']['name']);
     $total = count($_FILES['img']['name']);

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



/* 


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


*/  




     
     $str = "";
     
     for($i=0;$i<$total;$i++){
        
        $str = $str.$img[$i]."|";
     }
     $str = rtrim($str, "|");
     //$str = $str."|";
     echo $str;

     echo "<br>";

    
     $aux=explode('|',$str);
     $count = count($aux);
    // echo $count;
     for($i=0;$i<$count;$i++){
         echo $aux[$i]."<br>";
         
     }




     $sql = mysqli_query($dbConnected, "INSERT INTO test  VALUES (NULL,'$Title', '$Content', '$fullContent','$str')" );

     


     
    $sql = "SELECT id, title, fullcontent, img FROM test " ;
    $result = mysqli_query($dbConnected, $sql);
    while($row = $result->fetch_assoc()){
         $id = $row['id'];
    }



     $createfile = fopen('../posts/'.$id.'.php', 'x') or die("Unable to open file!");

     
     
     $txt = '<html>
     <head>
         <title></title>
         <link rel=\'stylesheet\' type=\'text/css\' href=\'../style/index.css\'>
     </head>
     
     <body>
         <?php
         echo 
          "
           <p class=\"titlepage\">'.$Title.'</p>
           <p class=\"contentpage\">'.$fullContent.'</p>
           
           ';
        $txt0= "";
         for($i=0;$i<$count;$i++){
             $txt0 = $txt0.'<img class=\"imgcard\" style=\"
             cursor: pointer;
             width: 100%;
         \" src=\"../media/'.$aux[$i].'\">';
             
         }
         $txt0=$txt0."\";";
        
     $txt1="
         
           
          
           
           
         ?>
         <footer class=\"footer\">
            <p class =\"footertext\">This footer serves no purpose at all, it just feels wierd without one:).</p>
        </footer>  
     </body>
     
     
     </html>";  


         $txt=$txt.$txt0.$txt1;


     fwrite($createfile, $txt);

     fclose($createfile);



    // echo $Title;
   //  echo $sql;
     mysqli_close($dbConnected);
}

?>
