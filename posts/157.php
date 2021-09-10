<html>
     <head>
         <title></title>
         <link rel='stylesheet' type='text/css' href='../style/index.css'>
     </head>
     
     <body>
     <button class="ham">
 
    <span class="menuIcon">
      <img src="../icons/menu.png">
    </span>
    <span class="xIcon">
      <img src="../icons/cancel.png">
    </span>
  </button>
  <div class="menu">
        <div class="placement">
        <a class="menuLink" href="index.php">Home</a>
        <a class="menuLink" href="cards.php">Work</a>
        <a class="menuLink" href="blog.php">Blog</a>
        <a class="menuLink" href="#con">Contacts</a>
        </div>
        </div>
         <?php
         echo 
          "
           <p class=\"titlepage\">Title</p>
           <p class=\"contentpage\">Content</p>
           
           <img class=\"imgcard\" style=\"
             cursor: pointer;
             width: 100%;
         \" src=\"../media/adita 2.png\">";
         
           
          
           
           
         ?>
         <footer class="footer">
            <p class ="footertext">This footer serves no purpose at all, it just feels wierd without one:).</p>
        </footer>  
        <script>
        var menu = document.querySelector('.menu');
        var ham = document.querySelector('.ham');
        var xIcon = document.querySelector('.xIcon');
        var menuIcon = document.querySelector('.menuIcon');
        
        
        
        function toggleMenu() {
          if (menu.classList.contains('showMenu')) {
            document.body.style.overflow = 'visible';
            menu.classList.remove('showMenu');
            xIcon.style.display = 'none';
            menuIcon.style.display = 'block';
          } else {
            document.body.style.overflow = 'hidden';
            menu.classList.add('showMenu');
            xIcon.style.display = 'block';
            menuIcon.style.display = 'none';
          }
        }
        
        ham.addEventListener('click', toggleMenu);
        
        var menuLinks = document.querySelectorAll('.menuLink');
        
        menuLinks.forEach(
          function (menuLink) {
            menuLink.addEventListener('click', toggleMenu);
          }
        );
    
    </script>
     </body>
    
     
     
     </html>