
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

    window.addEventListener("load", function () {
      const loader = document.querySelector(".loader");
      loader.className += " hidden"; // class "loader hidden"
  });

