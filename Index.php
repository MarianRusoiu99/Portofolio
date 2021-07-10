<!DOCTYPE html>

    <head>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="lines.css">
        <link rel="stylesheet" type="text/css" href="https://marianrusoiu99.github.io/blankAE/CSS/blankAE.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Benne&family=Roboto+Slab&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <title></title>
    <body>
        <div class="screen">    
            <div class="container">
                <div class="lines">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                  </div>
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
            <?php
    include ('logic/connectdb.php');
    echo "<link rel='stylesheet' type='text/css' href='index.css'>";
    $sql = "SELECT id, title, content, img FROM test";
    $result = mysqli_query($dbConnected, $sql);
    echo '<div class="parent" id="pins_div">';
    if (mysqli_num_rows($result) > 0) {
      
        while ($row = $result->fetch_assoc()) {
            echo 
            '<div class="pin_card">
            <img class="imgcard" src="media/'.$row['img'].'">
              <p>'.$row['title'].'</p>
              <p>'.$row['content'].'</p>
              
            </div>' ;
        }
        echo '</div>';

    /*freeresultset*/
    $result->free();
    }
  ?>
                  

        </div>
        
    </body>
</html>