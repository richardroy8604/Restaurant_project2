<!DOCTYPE html>
<html>
<?php
    include 'connection.php';
    ?>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./mac-book-pro-14-5.css" />
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
    <style>
      /* Modify the Confirm button styles */
      .confirm-booking1 {
  /* Change position to absolute for flexibility in positioning */
  position: absolute;
  /* Move the button to the right, adjust as needed */
  right: 0px;
  /* Adjust top/bottom and left/right values to position the button */
  top: 350px;
  /* Change background color */
  background-color: #fffb00; /* Change to your desired color */
  /* Change text color */
  color: #110000; /* Change to your desired color */
  /* Change font size */
  font-size: 25px; /* Change to your desired size */
  /* Change padding for better button size */
  padding: 10px 20px; /* Adjust as needed */
  /* Add border-radius for rounded corners */
  border-radius: 15px; /* Adjust as needed */
  
}
.confirm-booking2 {
  /* Change position to absolute for flexibility in positioning */
  position: absolute;
  /* Move the button to the right, adjust as needed */
  right: 250px;
  /* Adjust top/bottom and left/right values to position the button */
  top: 350px;
  /* Change background color */
  background-color: #fffb00; /* Change to your desired color */
  /* Change text color */
  color: #110000; /* Change to your desired color */
  /* Change font size */
  font-size: 25px; /* Change to your desired size */
  /* Change padding for better button size */
  padding: 10px 20px; /* Adjust as needed */
  /* Add border-radius for rounded corners */
  border-radius: 15px; /* Adjust as needed */
  
}


.booking-table {
      position: absolute;
      top: 320px; /* Adjust the top position as needed */
      right: -13%; /* Adjust the right position as needed */
      transform: translateX(-50%);
      z-index: 9999; /* Ensure a high z-index to place it above other elements */
      background-color: white; /* Optional: set background color for better visibility */
      padding: 2px;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    


    </style>
    <style>
  /* Add this style to make the phone number and table_id input invisible initially */
  #phoneInput,
  #tableInput {
    display: none;
  }
 
  /* Add this style to make the confirm button invisible initially */
  #confirmBookingBtn {
    display: none;
  }
</style>
</style>
  </head>
  </head>
  <body>
    <div class="macbook-pro-14-5">
        
      <img class="image-7-icon1" alt="" src="download.jpg" />

      <div class="macbook-pro-14-5-child"></div>
      <div class="rectangle-parent5">
        <div class="group-child29"></div>
        <div class="rectangle-parent6">
          <div class="group-child30"></div>
          <img class="group-child31" alt="" src="./public/rectangle-33.svg" />

          <div class="ra-frame">
            <div class="ra5">R&A</div>
          </div>
        </div>
        <div class="menu-parent2">
          <div class="menu5">Menu</div>
          <div class="menu5">Reservation</div>
          <div class="menu5">About</div>
          
        </div>
        <div class="rectangle-parent7">
          <div class="group-child29"></div>
          <div class="group-child33"></div>
          <img class="group-child34" alt="" src="./public/rectangle-33.svg" />

          <div class="ra6">R&A</div>
          <div class="macbook-pro-14-5-item"></div>
          <div class="reservation10">Reservation</div>
          <div class="frame-parent1">
            <div class="menu-parent3">
              <div class="menu5">Menu</div>
              <div class="menu5">Reservation</div>
              <div class="menu5">About</div>
              
            </div>
            <div class="home3">Home</div>
          </div>
        </div>
        <div class="rectangle-parent7">
          <div class="group-child29"></div>
          <div class="rectangle-parent6">
            <div class="group-child30"></div>
            <img class="group-child31" alt="" src="./public/rectangle-33.svg" />

            <div class="ra-frame">
              <div class="ra5">R&A</div>
            </div>
          </div>
          <div class="menu-parent2">
            <div class="menu5">Menu</div>
            <div class="menu5">Reservation</div>
            <div class="menu5">About</div>
            
          </div>
          <div class="rectangle-parent7">
            <div class="group-child29"></div>
            <div class="group-child33"></div>
            <img class="group-child34" alt="" src="./public/rectangle-33.svg" />

            <div class="ra6">R&A</div>
            <div class="macbook-pro-14-5-item"></div>
            <div class="reservation10">Reservation</div>
            <div class="frame-parent1">
              <div class="menu-parent3">
                <div class="menu5">Menu</div>
                <div class="menu5">Reservation</div>
                <div class="menu5">About</div>
                
              </div>
              <div class="home3">Home</div>
            </div>
          </div>
          <div class="rectangle-parent7">
            <div class="group-child29"></div>
            <div class="group-child33"></div>
            <img class="group-child34" alt="" src="./public/rectangle-33.svg" />

            <div class="ra6">R&A</div>
            <div class="macbook-pro-14-5-item"></div>
            <div class="reservation15" id="reservationText6">Reservation</div>
            <div class="frame-parent1">
              <div class="menu-parent3">
                <div class="menu9" id="menuText4">Menu</div>
                <div class="menu9" id="reservationText7">Reservation</div>
                
               
              </div>
              <div class="home5" id="homeText2">Home</div>
            </div>
          </div>
        </div>
      </div>
      <div class="macbook-pro-14-5-item"></div>
      <div class="reservation17" id="logout">Log out</div>
      <b class="table-booking1" id="table1">TABLE BOOKING</b>
      
      <form id="bookingForm" action="process_booking.php" method="POST">
    <div class="vector-container">
      <div class="ac">
        <label>
          <input type="radio" name="ac_type" value="1" required /> AC
          <input type="radio" name="ac_type" value="0" required /> Non AC
        </label>
      </div>
      <!-- Seating Capacity Radio Buttons -->
      <div class=seat>
        <label>
          <input type="radio" name="seating_capacity" value="2" required /> 2 Seater
          <input type="radio" name="seating_capacity" value="4" required /> 4 Seater
          <input type="radio" name="seating_capacity" value="8" required /> 8 Seater
        </label>
      </div>
      <div class="input-container">
      <input type="text" placeholder="time (e.g., 14 for 2 pm)" class="input-box" name="booking_time" id="timeinput" pattern="[0-9]{1,2}" required />

                <input type="tel" placeholder="Enter your phone number" class="input-box" name="phone_number" id="phoneInput" required />
                <input type="text" placeholder="Enter table number(refer the Availability chart to the right)" class="input-box" name="table_number" id="tableInput" required />

                <button type="submit" class="confirm-booking1" id="confirmBookingBtn">Confirm</button>
                <button type="button" class="confirm-booking2" id="checkAvailabilityBtn">Check Availability</button>
            </div>
    </div>
  </form>
  <div class="booking-table" id="availabilityResult"></div>
      <div class="vector-parent1">
        
        
      </div>
      <div class="rectangle-parent12" id="groupContainer14">
        
        
      </div>
    </div>
    <div class="booking-table">
      
      
    </div>

    <script>
      var reservationText = document.getElementById("reservationText");
      if (reservationText) {
        reservationText.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-5.html";
        });
      }
      
      var menuText = document.getElementById("menuText");
      if (menuText) {
        menuText.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-4.html";
        });
      }
      
      var reservationText1 = document.getElementById("reservationText1");
      if (reservationText1) {
        reservationText1.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-5.html";
        });
      }
      
      var reservationText5 = document.getElementById("reservationText5");
      if (reservationText5) {
        reservationText5.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-5.html";
        });
      }
      
      var menuText3 = document.getElementById("menuText3");
      if (menuText3) {
        menuText3.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-4.html";
        });
      }
      
      var reservationText6 = document.getElementById("reservationText6");
      if (reservationText6) {
        reservationText6.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-5.html";
        });
      }
      
      var homeText2 = document.getElementById("homeText2");
      if (homeText2) {
        homeText2.addEventListener("click", function (e) {
          window.location.href = "./mac-book-pro-14-3.php";
        });
      }
      var logout = document.getElementById("logout");
      if (logout) {
        logout.addEventListener("click", function (e) {
          window.location.href = "./login.html";
        });
      }
      
    </script>
     <script>
  document.addEventListener("DOMContentLoaded", function () {
    var phoneInput = document.getElementById("phoneInput");
    var tableInput = document.getElementById("tableInput");
    var confirmBookingBtn = document.getElementById("confirmBookingBtn");

    // Lock the confirm button and make it invisible initially
    confirmBookingBtn.disabled = true;
    confirmBookingBtn.style.display = "none";

    var checkAvailabilityBtn = document.getElementById("checkAvailabilityBtn");
    var availabilityResultDiv = document.getElementById("availabilityResult");

    if (checkAvailabilityBtn) {
      checkAvailabilityBtn.addEventListener("click", function () {
        var acType = document.querySelector('input[name="ac_type"]:checked').value;
        var seatingCapacity = document.querySelector('input[name="seating_capacity"]:checked').value;
        var bookingTime = document.getElementById("timeinput").value;

        // Perform AJAX request to check availability
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "check_availability.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
          if (xhr.readyState == 4 && xhr.status == 200) {
            // Display the result in the availabilityResultDiv
            availabilityResultDiv.innerHTML = xhr.responseText;

            // If the table is not empty, show the phone number, table_id input, and confirm button
            if (xhr.responseText.trim() !== "No available tables matching the criteria \n We Are Extremely Sorry :(") {
              phoneInput.style.display = "block";
              tableInput.style.display = "block";
              confirmBookingBtn.style.display = "block";
              confirmBookingBtn.disabled = false; // Unlock the confirm button
            } else {
              // If the table is empty, hide the phone number, table_id input, and confirm button
              phoneInput.style.display = "none";
              tableInput.style.display = "none";
              confirmBookingBtn.style.display = "none";
              confirmBookingBtn.disabled = true; // Lock the confirm button
              
            }
          }
        };

        // Send the data to the server
        xhr.send("ac_type=" + acType + "&seating_capacity=" + seatingCapacity + "&booking_time=" + bookingTime);
      });
    }
  });
</script>




    
  </body>
</html> 