<!DOCTYPE html>
<html>
<?php
    include 'connection.php';
    ?>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="./global.css" />
  <link rel="stylesheet" href="./mac-book-pro-14-4.css" />
  <link rel="stylesheet" href="styles.css">
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
    .registerdata-table {
      position: absolute;
      top: 260px; /* Adjust the top position as needed */
      left: 70%;
      transform: translateX(-50%);
      z-index: 9999; /* Ensure a high z-index to place it above other elements */
      background-color: white; /* Optional: set background color for better visibility */
      padding: 2px;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    
  </style>
  <style>
    /* Your existing CSS */

    /* Additional CSS for positioning "booking data" */
    .admin-dashboard {
      position: relative;
    }

    .booking-data {
      position: absolute;
      top: -70;
      right: -530px; /* Adjust as needed to place it correctly */
      font-size: 41px; /* Change to match the font size of "Admin Dashboard" */
      font-family: 'Montserrat', sans-serif; /* Change font if needed */
      color: #FFFFFF; /* Change color if needed */
    }

    .booking-table {
      position: absolute;
      top: 300px; /* Adjust the top position as needed */
      right: -22%; /* Adjust the right position as needed */
      transform: translateX(-50%);
      z-index: 9999; /* Ensure a high z-index to place it above other elements */
      background-color: white; /* Optional: set background color for better visibility */
      padding: 2px;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
  </style>
  <style>
  /* Existing CSS... */

  /* Styles for the tables */
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 2px;
  }

  th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ccc;
  }

  th {
    background-color: #f2f2f2;
    font-weight: bold;
  }

  tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  /* Additional styles for better spacing and alignment */
  .registerdata-table,
  .booking-table {
    max-width: 80%;
    margin: 20px auto;
    overflow-x: auto;
  }

  .booking-data {
    top: 15px;
    right: -530px;
    font-size: 40px;
  }
</style>
<style>
  /* Additional CSS for Menu Table */
  .menu-table {
    position: absolute;
    top: 300px; /* Adjust the top position as needed */
    left: 60%; /* Adjust the left position as needed */
    transform: translateX(-50%);
    z-index: 9999; /* Ensure a high z-index to place it above other elements */
    background-color: white; /* Optional: set background color for better visibility */
    padding: 2px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    max-width: 80%;
    margin: 20px auto;
    overflow-x: auto;
  }

  /* Other styles remain unchanged */
</style>
<style>
    /* Additional CSS for Input Boxes */
    .input-container {
      position: absolute;
      top: 300px; /* Adjust the top position as needed */
      left: 10%; /* Adjust the left position as needed */
      display: flex;
  flex-direction: column;
  margin-top: 20px;
    }
    .input-containe {
      position: absolute;
      top: 500px; /* Adjust the top position as needed */
      left: 10%; /* Adjust the left position as needed */
      display: flex;
  flex-direction: column;
  margin-top: 20px;
    }
    .input-container2 {
    position: absolute;
    top: 300px; /* Adjust the top position as needed */
    left: 10%; /* Adjust the left position as needed */
    display: flex;
    flex-direction: column;
    margin-top: 20px;
    z-index: 10000; /* Set a higher z-index value */
    display: block; /* Make it visible by default */
  }

    

    .input-box {
      
      width: 250px; /* Adjust width as needed */
      height: 30px; /* Adjust height as needed */
      margin-bottom: 10px; /* Adjust spacing between boxes */
      border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box; /* Include padding and border in width calculation */
  font-size: 16px;
    }
  </style>
  <style>
        /* Your existing CSS... */

        /* Additional CSS for dropdown selector */
        #dashboardSelector {
            position: absolute;
            top: 205px; /* Adjust the top position as needed */
            left: 40%;
            transform: translateX(-50%);
            z-index: 9999;
            background-color: white;
            padding: 5px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
  </head>
  <body>

  <select id="dashboardSelector">
  <option value="userManagement">User Management</option>
    <option value="menuDashboard">Menu Dashboard</option>
    <option value="bookingManagement">Booking Management</option>
    <option value="tableManagement">Table Management</option>
  </select>
  <div id="registerdataTable" >  
  <div class="input-container2">
    <form action="deleteuser.php" method="post">
      <input type="text" name="userdel" placeholder="enter email of user to delete" class="input-box" required>
      <br>
      <input type="text" name="confirm" placeholder="type'confirm' to delete" class="input-box" required>
      <br>
      <input type="submit" value="DELETE USER">
    </form>
    
  </div>
  <div class="registerdata-table">
    
    
      <?php
      
      $sql = "SELECT * FROM registerdata";
      $result = $connect->query($sql);

      if ($result->num_rows > 0) {
        echo '<table border="1">';
        echo '<tr><th>Fullname</th><th>Email</th><th>Password</th></tr>';

        while ($row = $result->fetch_assoc()) {
          echo '<tr>';
          echo '<td>' . $row["Name"] . '</td>';
          echo '<td>' . $row["email"] . '</td>';
          echo '<td>' . $row["password"] . '</td>';
          echo '</tr>';
        }

        echo '</table>';
      } else {
        echo 'No records found';
      }
      ?>
    </div>
    </div>
    

    
      <img class="image-7-icon2" alt="" src="download.jpg" />

      <div class="macbook-pro-14-4-child"></div>
      <div class="rectangle-parent13">
        <div class="group-child62"></div>
        <div class="rectangle-parent14">
          <div class="group-child63"></div>
          <img class="group-child64" alt="" src="./public/rectangle-33.svg" />

          <div class="ra-wrapper2">
            <div class="ra10">R&A</div>
          </div>
        </div>
        <div class="menu-parent7">
          <div class="menu10">Menu</div>
          <div class="menu10">Reservation</div>
          <div class="menu10">About</div>
          <div class="menu10">Contact</div>
        </div>
        <div class="rectangle-parent15">
          <div class="group-child62"></div>
          <div class="group-child66"></div>
          <img class="group-child67" alt="" src="./public/rectangle-33.svg" />

          <div class="ra11">R&A</div>
          <div class="macbook-pro-14-4-item"></div>
          <div class="reservation19">Reservation</div>
          <div class="frame-parent4">
            <div class="menu-parent8">
              <div class="menu10">Menu</div>
              <div class="menu10">Reservation</div>
              <div class="menu10">About</div>
              <div class="menu10">Contact</div>
            </div>
            <div class="home6">Home</div>
          </div>
        </div>
        <div class="rectangle-parent15">
          <div class="group-child62"></div>
          <div class="group-child66"></div>
          <img class="group-child67" alt="" src="./public/rectangle-33.svg" />

          <div class="ra11">R&A</div>
          <div class="macbook-pro-14-4-item"></div>
          <div class="reservation21" id="reservationText3"></div>
          <div class="frame-parent4">
            <div class="menu-parent8">
              <div class="menu12" id="menuText2"></div>
              <div class="menu12" id="reservationText4"></div>
              <div class="about13"></div>
            </div>
            <div class="home7" id="homeText1"></div>
          </div>
        </div>
      </div>
      <div class="macbook-pro-14-4-item"></div>
      <div class="reservation23" id="reservationText5">Log out</div>
      <b class="menu13 admin-dashboard">Admin Dashboard
    <!-- Booking Data -->
    
  </b>
      
    </div>
    <div id="bookingManagementSection" style="display: none;">
    <div class="booking-table">
    <?php
      $sql_booking = "SELECT * FROM booking";
      $result_booking = $connect->query($sql_booking);

      if ($result_booking->num_rows > 0) {
        echo '<table border="1">';
        echo '<tr><th>booking id</th><th>table number</th><th>Email</th><th>Phone Number</th><th>time slot</th><th>No of Seats</th><th>AC/NonAC</th></tr>';

        while ($row_booking = $result_booking->fetch_assoc()) {
          echo '<tr>';
          echo '<td>' . $row_booking["booking_id"] . '</td>';
          echo '<td>' . $row_booking["table_id"] . '</td>';
          echo '<td>' . $row_booking["email"] . '</td>';
          echo '<td>' . $row_booking["phone_number"] . '</td>';
          echo '<td>' . $row_booking["booking_time"] . '</td>';
          echo '<td>' . $row_booking["number_of_seats"] . '</td>';
          echo '<td>' . ($row_booking["is_ac"] ? 'AC' : 'Non AC') . '</td>';
        }

        echo '</table>';
      } else {
        echo 'No records found in the booking table';
      }

      
    ?>
  </div>
  <div class="input-container">
    <form action="deletebooking.php" method="post">
      <input type="text" name="del" placeholder="enter booking id to delete" class="input-box" required>
      <br>
      <input type="text" name="deltableid" placeholder="table number of the booking" class="input-box" required>
      <br>
      <input type="text" name="timedel" placeholder="time slot of booking" class="input-box" required>
      <br>
      <input type="submit" value="DELETE">
    </form>
    
  </div>
    
  </div>
  </div>
  <div id="menuDashboardSection" style="display: none;">
  <div class="menu-table">
  <?php
  // SQL query to fetch menu items from the database (assuming table name is 'menu_items')
  $sql_menu = "SELECT * FROM menu";
  $result_menu = $connect->query($sql_menu);

  if ($result_menu->num_rows > 0) {
    echo '<table border="1">';
    echo '<tr><th>Item</th><th>Price</th><th>category</th></tr>';

    while ($row_menu = $result_menu->fetch_assoc()) {
      echo '<tr>';
      echo '<td>' . $row_menu["item"] . '</td>';
      echo '<td>' . $row_menu["price"] . '</td>';
      echo '<td>' . $row_menu["category"] . '</td>';
      echo '</tr>';
    }

    echo '</table>';
  } else {
    echo 'No menu items found';
  }
  ?>
</div>
<div class="input-container">
    <form action="insert_menu.php" method="post">
      <input type="text" name="item" placeholder="Item" class="input-box" required>
      <br>
      <input type="text" name="price" placeholder="Price" class="input-box" required>
      <br>
      <input type="text" name="Category" placeholder="Category" class="input-box" required>
      <br>
      <input type="submit" value="ADD TO DATABASE">
    </form>
    
  </div>

  <div class="input-containe">
    <form action="deletemenu.php" method="post">
      <input type="text" name="itemm" placeholder="Enter Item to delete" class="input-box" required>
      <br>
      <input type="submit" value="DELETE">
    </form>
    
  </div>
</div>
<div id="tableDashboardSection" style="display: none;">
  <div class="menu-table">
  <?php
  // SQL query to fetch menu items from the database (assuming table name is 'menu_items')
  $sql_menu = "SELECT * FROM tables";
  $result_menu = $connect->query($sql_menu);

  if ($result_menu->num_rows > 0) {
    echo '<table border="1">';
    echo '<tr><th>Table id</th><th>No of Seats</th><th>AC/Non AC</th><th>s9</th><th>s10</th><th>s11</th><th>s12</th><th>s13</th><th>s14</th><th>s15</th><th>s16</th><th>s17</th><th>s18</th><th>s19</th></tr>';

    while ($row_menu = $result_menu->fetch_assoc()) {
      echo '<tr>';
      echo '<td>' . $row_menu["table_id"] . '</td>';
      echo '<td>' . $row_menu["seats"] . '</td>';
      echo '<td>' . $row_menu["is_ac"] . '</td>';
      echo '<td>' . $row_menu["s9"] . '</td>';
      echo '<td>' . $row_menu["s10"] . '</td>';
      echo '<td>' . $row_menu["s11"] . '</td>';
      echo '<td>' . $row_menu["s12"] . '</td>';
      echo '<td>' . $row_menu["s13"] . '</td>';
      echo '<td>' . $row_menu["s14"] . '</td>';
      echo '<td>' . $row_menu["s15"] . '</td>';
      echo '<td>' . $row_menu["s16"] . '</td>';
      echo '<td>' . $row_menu["s17"] . '</td>';
      echo '<td>' . $row_menu["s18"] . '</td>';
      echo '<td>' . $row_menu["s19"] . '</td>';
      echo '</tr>';
    }

    echo '</table>';
  } else {
    echo 'No menu items found';
  }
  ?>
</div>
<div class="input-container">
    <form action="inserttable.php" method="post">
      <input type="text" name="numberofseats" placeholder="enter number of seats" class="input-box" required>
      <br>
      <input type="text" name="ac" placeholder="if AC or not(eg 1 for true)" class="input-box" required>
      <br>
      <input type="submit" value="ADD TABLE">
    </form>
    
  </div>

  <!--
  <div class="input-containe">
    <form action="deletetable.php" method="post">
      <input type="text" name="tableidd" placeholder="Enter table id to delete" class="input-box" required>
      <br>
      <input type="text" name="confir" placeholder="type 'confirm'" class="input-box" required>
      <br>
      <input type="submit" value="DELETE">
    </form>
    
  </div>
  
  !-->
</div>
  

    <script>
      var reservationText3 = document.getElementById("reservationText3");
      if (reservationText3) {
        reservationText3.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-5.html";
        });
      }
      
      var menuText2 = document.getElementById("menuText2");
      if (menuText2) {
        menuText2.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-4.php";
        });
      }
      
      var reservationText4 = document.getElementById("reservationText4");
      if (reservationText4) {
        reservationText4.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-5.html";
        });
      }
      
      var homeText1 = document.getElementById("homeText1");
      if (homeText1) {
        homeText1.addEventListener("click", function (e) {
          window.location.href = "mac-book-pro-14-3.php";
        });
      }
      var reservationText5 = document.getElementById("reservationText5");
      if (reservationText5) {
        reservationText5.addEventListener("click", function (e) {
          window.location.href = "adminlogin.html";
        });
      }
    </script>

<script>
  // JavaScript to toggle visibility based on the selected dropdown option
  var dashboardSelector = document.getElementById("dashboardSelector");
  var menuDashboardSection = document.getElementById("menuDashboardSection");
  var bookingManagementSection = document.getElementById("bookingManagementSection");
  var tableDashboardSection = document.getElementById("tableDashboardSection");
  var registerdataTable = document.querySelector(".registerdata-table");
  var inputContainer2 = document.querySelector(".input-container2");

  dashboardSelector.addEventListener("change", function () {
    var selectedOption = dashboardSelector.value;

    // Hide all sections
    menuDashboardSection.style.display = "none";
    bookingManagementSection.style.display = "none";
    tableDashboardSection.style.display = "none";

    // Hide the registerdata table by default
    registerdataTable.style.display = "none";

    // Toggle visibility of input-container2 based on the selected option
    if (selectedOption === "userManagement") {
      inputContainer2.style.display = "block";
    } else {
      inputContainer2.style.display = "none";
    }

    // Show the selected section
    if (selectedOption === "menuDashboard") {
      menuDashboardSection.style.display = "block";
    } else if (selectedOption === "bookingManagement") {
      bookingManagementSection.style.display = "block";
    } else if (selectedOption === "tableManagement") {
      tableDashboardSection.style.display = "block";
    } else if (selectedOption === "userManagement") {
      // Show the registerdata table only when userManagement is selected
      registerdataTable.style.display = "block";
    }
    // Add more conditions for other sections if needed
  });
</script>


    
</body>
</html>
