<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="./global.css" />
  <link rel="stylesheet" href="./mac-book-pro-14-3.css" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./mac-book-pro-14-3.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Libre Baskerville:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cormorant:wght@600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Segoe UI:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap"
    />
 </head>
<body>
  <div class="macbook-pro-14-3">
      <img class="image-7-icon3" alt="" src="download.jpg" />

      <div class="rectangle-parent17">
        <div class="group-child73"></div>
        <div class="content">
          <div class="ra-restaurant" >
            <span>Welcome to R&A Restaurant</span>
            
          </div>
          <b class="culinary-journey">Richard Roy</b>
          <div class="through-the-heart">
            through the heart of our community, brought to you by the people who
            know it best.
          </div>
        </div>
      </div>
      <div class="rectangle-parent18">
        <div class="group-child74"></div>
        <div class="group-child75"></div>
        <img class="group-child76" alt="" src="./public/rectangle-33.svg" />

        <div class="ra13" id="R">R&A</div>
        <div class="group-child77"></div>
        <div class="reservation24" id="reservationText">Reservation</div>
        <div class="frame-parent6">
          <div class="menu-parent10">
            <div class="menu14" id="menuText">Menu</div>
            <div class="menu14" id="reservationText1">Reservation</div>
            <div class="about13">About</div>
            <div class="about13">Contact</div>
          </div>
          <div class="home8">Home</div>
        </div>
        <div class="rectangle-parent19">
          <div class="group-child74"></div>
          <div class="rectangle-parent20">
            <div class="group-child79"></div>
            <img class="group-child80" alt="" src="./public/rectangle-33.svg" />

            <div class="ra-wrapper3">
              <div class="ra14">R&A</div>
            </div>
          </div>
          <div class="menu-parent11">
            <div class="about13">Menu</div>
            <div class="about13">Reservation</div>
            
            <div class="about13"></div>
          </div>
          <div class="rectangle-parent19">
            <div class="group-child74"></div>
            <div class="group-child75"></div>
            <img class="group-child76" alt="" src="./public/rectangle-33.svg" />

            <div class="ra13">R&A</div>
            <div class="group-child77"></div>
            <div class="reservation27">Reservation</div>
            <div class="frame-parent6">
              <div class="menu-parent10">
                <div class="about13">Menu</div>
                <div class="about13">Reservation</div>
                <div class="about13">About</div>
                <div class="about13">Contact</div>
              </div>
              <div class="home8">Home</div>
            </div>
          </div>
          <div class="rectangle-parent19">
            <div class="group-child74"></div>
            <div class="group-child75"></div>
            <img class="group-child76" alt="" src="./public/rectangle-33.svg" />

            <div class="ra13">R&A</div>
            <div class="group-child77"></div>
            <div class="reservation24" id="reservationText5">Log out</div>
            <div class="frame-parent6">
              <div class="menu-parent10">
                <div class="menu14" id="menuText3">Menu</div>
                <div class="menu14" id="reservationText6">Reservation</div>
                
                
              </div>
              <div class="home10" id="homeText2">Home</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      var reservationText = document.getElementById("reservationText");
      if (reservationText) {
        reservationText.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-5.php";
        });
      }
      
      var menuText = document.getElementById("menuText");
      if (menuText) {
        menuText.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-4.php";
        });
      }
      
      var reservationText1 = document.getElementById("reservationText1");
      if (reservationText1) {
        reservationText1.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-5.php";
        });
      }
      
      var reservationText5 = document.getElementById("reservationText5");
      if (reservationText5) {
        reservationText5.addEventListener("click", function (e) {
          window.location.href = "login.html";
        });
      }
      
      var menuText3 = document.getElementById("menuText3");
      if (menuText3) {
        menuText3.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-4.php";
        });
      }
      
      var reservationText6 = document.getElementById("reservationText6");
      if (reservationText6) {
        reservationText6.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-5.php";
        });
      }
      
      var homeText2 = document.getElementById("homeText2");
      if (homeText2) {
        homeText2.addEventListener("click", function (e) {
          window.location.href = "./mac-book-pro-14-3.php";
        });
      }
       

      
  
  
   
    </script>
    <!-- This script will replace the "culinary-journey" content with the logged-in user's email -->
<script>
  var loggedInUser = "<?php echo isset($_SESSION['logged_in_user']) ? $_SESSION['logged_in_user'] : '' ?>";

  // Replace the "culinary-journey" text with the logged-in user's email
  var culinaryJourney = document.querySelector('.culinary-journey');
  if (culinaryJourney && loggedInUser !== '') {
    culinaryJourney.textContent = loggedInUser;
  }
</script>
<script>
  var loggedInUser = "<?php echo isset($_SESSION['logged_in_user']) ? $_SESSION['logged_in_user'] : '' ?>";

  // Replace the "culinary-journey" text with the logged-in user's email and reduce font size
  var culinaryJourney = document.querySelector('.culinary-journey');
  if (culinaryJourney && loggedInUser !== '') {
    culinaryJourney.textContent = loggedInUser;
    culinaryJourney.style.fontSize = '80px'; // Change this value to adjust the font size
  }
</script>

    
  
  </body>
</html>
