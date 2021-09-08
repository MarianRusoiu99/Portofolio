<!DOCTYPE html>

    <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style/index.css">
        <link rel="stylesheet" type="text/css" href="style/bigscreen.css">
        <link rel="stylesheet" type="text/css" href="style/smallscreen.css">
        <link rel="stylesheet" type="text/css" href="style/lines.css">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Benne&family=Roboto+Slab&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    </head>
    <title></title>
    <body>
    <button class="ham">
    <!-- X and menu icon SVGs from material icons https://material.io/resources/icons/ -->
    <span class="menuIcon">
      <img src="icons/menu.png">
    </span>
    <span class="xIcon">
    <img src="icons/cancel.png">
    </span>
  </button>
  <ul class="menu">
    <li><a class="menuLink" href="#">Home</a></li>
    <li><a class="menuLink" href="#">Profile</a></li>
    <li><a class="menuLink" href="#">About</a></li>
    <li><a class="menuLink" href="#">Contacts</a></li>
  </ul>
        <div class="nonfooter">
        
        

            <?php
    include ('logic/connectdb.php');
    echo "<link rel='stylesheet' type='text/css' href='style/index.css'>";
    $sql = "SELECT id, title, content, img FROM test";
    $result = mysqli_query($dbConnected, $sql);
    echo '<div class="parent" id="pins_div" style="padding-top:40px;  border-collapse: collapse; z-index:-2;">';

    


    if (mysqli_num_rows($result) > 0) {
      
        while ($row = $result->fetch_assoc()) {
            $str = $row['img'];
            $aux=explode('|',$str);
           
            echo 
            '<a href="posts/'.$row['id'].'.php" style=" color: #EB5160;"> <div class="pin_card" style="
                display: inline-block;
               
                width: 95%;
                border: 2px solid;
                border-color:#EB5160;
                border-radius:20px;
                
                padding-top:1em;  
                padding-bottom: 1.2em
                
                
                
            ">
            <div style="opacity: 0.8; width:fit-content;height:100%; background-color: #EB5160 ;"> 
            ';
            echo '

            <img class="imgcard" style="
                cursor: pointer;
                width: 100%;
                opacity: 0.8;
                
                
            " src="media/'.$aux[0].'">
            </div>

              <p style="padding-top:1em;  padding-bottom: 1.2em; font-size:2em;font-family: \'Roboto SLab\', serif;margin-left:1em;margin-right:1em;     ">'.$row['title'].'</p>
              <p style = "margin-left:1em;margin-right:1em; font-size:1.5em;font-family: \'Benne\', serif;">'.$row['content'].'</p>
              
            </div> </a> ' ;
        }
        echo '</div>';

    /*freeresultset*/
    $result->free();
    }
  ?>
    

    





                <div class="lines">
                
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                  </div>
    
        </div>
        <footer class="footer">
            <p class ="footertext">This footer serves no purpose at all, it just feels wierd without one:). And this <a href="https://paypal.me/VRusoiu?locale.x=en_US">thingy</a></p>
        </footer>          

        
        
    </body>
    <script src="logic/script.js"></script>
</html>