<!DOCTYPE html>

    <head>
        <link rel="stylesheet" type="text/css" href="style/index.css">
        <link rel="stylesheet" type="text/css" href="style/bigscreen.css">
        <link rel="stylesheet" type="text/css" href="style/smallscreen.css">
        <link rel="stylesheet" type="text/css" href="style/lines.css">
        <link rel="stylesheet" type="text/css" href="https://marianrusoiu99.github.io/blankAE/CSS/blankAE.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Benne&family=Roboto+Slab&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <title></title>
    <body>
        <div class="nonfooter">
        <div class="screen">    
            <div class="container">
                
                <div class="text-position-right">
                    <p class="big-text">Hello,          I'm Valentin</p>
                    <p class="sub-text"> I made this website to serve as a hub for my projects and for the things I love.
                     I have many interests such an Computer Science, Web Design and design in general, Art and Philosophy.
                     I also wanted to become an arhitect:) .
                    Here are the projects I have been talking about:</p>
                </div>
                
                <div class="text-position-left">
                    <p class="big-text-ghiveci">My mind is <b>GHIVECI</b></p>
                    <p class="sub-text-oblique">GHIVÉCI, (1) ghivece, (2) ghiveciuri, s. n. 1. Vas de pământ ars, de material plastic etc., de formă tronconică, folosit pentru plantarea (în casă a) florilor. ◊ Ghiveci nutritiv = amestec de pământ, nisip, mraniță, îngrășăminte chimice etc., în care se plantează răsadurile de legume. 2. Mâncare preparată din tot felul de legume, cu sau fără carne. ♦ Fig. (Peior.) Creație literară, muzicală etc. eterogenă și lipsită de valoare. – Din tc. güvec.</p>
                </div> 
                <div>
                    
                </div>
                
                
            </div>

        </div>
        

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
  
        
        <div class="contact2">
            <p class="p12">And this is where you can find me:</p>
            <br>
            <ul>
                <li class="icon"><a href="mailto:valentinrusoiu@gmail.com" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><img class="icon"  src="icons/1.png"></a></li>
                <li class="icon"><a href="https://www.instagram.com/valentinrusoiu/" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><img class="icon" src="icons/2.png"></a></li>
                <li class="icon"><a href="https://www.linkedin.com/in/valentin-rusoiu-153920197/" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><img class="icon" src="icons/3.png"></a></li>
                <li class="icon"><a href="https://www.paypal.me/VRusoiu" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><img class="icon" src="icons/4.png"></a></li>
                <li class="icon"><a href="https://www.youtube.com/channel/UC-6TwhBlJPkN2GG-kmzUgyg" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;"><img class="icon" src="icons/5.png"></a></li>
            </ul>
            
        
        </div>    
    
        </div>
        <footer class="footer">
            <p class ="footertext">This footer serves no purpose at all, it just feels wierd without one:).</p>
        </footer>          

        
        
    </body>
</html>