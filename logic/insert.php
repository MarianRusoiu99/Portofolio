<?php
include('connectdb.php');

if (isset($_POST['Submit'])) {
  $Title = $_REQUEST['title'];
  $fullContent = $_REQUEST['content'];
  $Content = nl2br(substr(strip_tags($fullContent), 0, 250));

  $uploaddir = '../media/';
  // $uploadfile = $uploaddir . basename($_FILES['img']['name']);

  $files = array_filter($_FILES['img']['name']);
  $total = count($_FILES['img']['name']);

  for ($i = 0; $i < $total; $i++) {

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

  for ($i = 0; $i < $total; $i++) {

    $str = $str . $img[$i] . "|";
  }
  $str = rtrim($str, "|");
  //$str = $str."|";
  echo $str;

  echo "<br>";


  $aux = explode('|', $str);
  $count = count($aux);
  // echo $count;
  for ($i = 0; $i < $count; $i++) {
    echo $aux[$i] . "<br>";
  }


  echo "$Title <br> $Content <br> $fullContent <br> $str <br>";



  $sql = mysqli_query($dbConnected, "INSERT INTO test  VALUES (NULL,'$Title', '$Content', '$fullContent','$str')");
  echo "$sql";



  $sql = "SELECT id, title, fullcontent, img FROM test ";
  $result = $dbConnected->query($sql) or die($dbConnected->error);
  //    $result = mysqli_query($dbConnected, $sql);
  while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    echo $id;
  }



  $createfile = fopen('../posts/' . $id . '.php', 'x') or die("Unable to open file!");

$current_file =  basename($_SERVER["SCRIPT_FILENAME"], '.php');

  $txt = '<html>
     <head>
         <title></title>
         <link rel=\'stylesheet\' type=\'text/css\' href=\'../style/index.css\'>
     </head>
     
     <body>
     <div class=\'loader\'>
    <img src=\'../icons/hand.gif\' alt=\'Loading...\' />
  </div>
  <button class=\'ham\'>

    <span class=\'menuIcon\'>
      <img src=\'../icons/menu.png\'>
    </span>
    <span class=\'xIcon\'>
      <img src=\'../icons/cancel.png\'>
    </span>
  </button>
  <div class=\'menu\'>
    <div class=\'placement\'>
      <a class=\'menuLink\' href=\'../index.php\'>Home</a>
      <a class=\'menuLink\' href=\'../cards.php\'>Work</a>
      <a class=\'menuLink\' href=\'../blog.php\'>Blog</a>
      <a class=\'menuLink\' href=\'../index.php\'>Contacts</a>
    </div>
  </div>



         <?php
         $current_file =  basename($_SERVER["SCRIPT_FILENAME"], \'.php\');
         
         include(\'../logic/connectdb.php\');
         $sql = "SELECT id, title, fullcontent, img FROM test where id = $current_file ";
         $result = mysqli_query($dbConnected, $sql);


         if (mysqli_num_rows($result) > 0) {

          while ($row = $result->fetch_assoc()) {
            $str = $row[\'img\'];
            $aux = explode(\'|\', $str);
          
          
         echo 
          "
           <p class=\"titlepage\">" . $row[\'title\'] . "</p>
           <p class=\"contentpage\">" . $row[\'fullcontent\'] . "</p>
          "; 


          foreach($aux as $X){
            echo "<img class=\"imgcard\" style=\"cursor: pointer;width: 100%; \" src=\"../media/" . $X . " \" /> "  ; 

          }
        }
      }
           ?>
           
         
         <footer class="footer">
            <p class ="footertext">This footer serves no purpose at all, it just feels wierd without one:).</p>
        </footer>  


        <script>

        var menu = document.querySelector(".menu");
        var ham = document.querySelector(".ham");
        var xIcon = document.querySelector(".xIcon");
        var menuIcon = document.querySelector(".menuIcon");
        
        
        
        function toggleMenu() {
          if (menu.classList.contains("showMenu")) {
            document.body.style.overflow = "visible";
            menu.classList.remove("showMenu");
            xIcon.style.display = "none";
            menuIcon.style.display = "block";
          } else {
            document.body.style.overflow = "hidden";
            menu.classList.add("showMenu");
            xIcon.style.display = "block";
            menuIcon.style.display = "none";
          }
        }
        
        ham.addEventListener("click", toggleMenu);
        
        var menuLinks = document.querySelectorAll(".menuLink");
        
        menuLinks.forEach(
          function (menuLink) {
            menuLink.addEventListener("click", toggleMenu);
          }
        );

        window.addEventListener("load" , function () {
          const loader = document.querySelector(".loader");
          loader.className += " hidden";
      });
    
    </script>
     </body>
    
     
     
     </html>';





  if (fwrite($createfile, $txt)) {
    echo "--Page written succesfully <br>";
  }
  fclose($createfile);



  // echo $Title;
  //  echo $sql;
  mysqli_close($dbConnected);
}
