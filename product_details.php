<!DOCTYPE html>
<html lang="en">

<head>

     <title>Chaitanya Enterprises</title>
 
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" type="image/png" href="images/fav/favicon.jpg">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
     <link rel="stylesheet" href="css/table.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- MENU -->
     <nav class="navbar custom-navbar navbar-expand-lg navbar-light bg-light" style="font-size: large;">
          <div class="container">
               <a class="navbar-brand" href="index.php">
                    <img src="images/fav/favicon.jpg" alt="Chaitanya Enterprize" style="max-width: 50px;max-height: 50px; padding-bottom:10px;">
                    <span style="color:green;">Chaitanya Enterprises</span>
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse">
                    <ul class="navbar-nav navbar-nav-first">
                         <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                         <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                         <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                         <div class="btn-group">
                              <button type="button" class="btn btn-default" data-bs-toggle="dropdown"
                                   aria-expanded="false" style="color: grey; font-size: 19px;">
                                   Companies
                              </button>
                              <ul class="dropdown-menu">
                                   <li class="nav-item"><a class="nav-link" Chaitanya Enterprises
                                             href="product_details.php#ch_en"> Chaitanya Enterprises</a></li>
                                   <li class="nav-item"><a class="nav-link" href="product_details.php#ss_en">Shri Siddhivinayak
                                             Enterprises</a>
                                   </li>
                         </div>

                         <li class="nav-item"><a class="nav-link" href="product_details.php">Product Details</a></li>
                         <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                         <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                         <li class="nav-item"><a class="nav-link" href="cart.php">My Cart</a></li>
                    </ul>
               </div>
          </div>
     </nav>



     <section id="testimonial">




          <?php

          $servername = "localhost"; // Replace with your server name
          $username = "root"; // Replace with your MySQL username
          $password = "temp"; // Replace with your MySQL password
          $database = "atlas_schema"; // Replace with your database name
// Create a connection
          $conn = new mysqli($servername, $username, $password, $database);

          if ($conn->connect_errno) {
               echo "Connection Error.";
          }

          $query = "SELECT * FROM ch_en";
          $result = mysqli_query($conn, $query);

          // Display the table
          echo '<div id="ch_en" class="row" style="max-width: 100%; padding-left: 20%; padding-right: 20%;">';
          echo '<table class="table table-bordered disclosure_data" style="border-width: 0.1cm;">';
          echo '<tr class="table-active">';
          echo '<td colspan="3"><h4><b><a href="all_products.php?tab=ch_en">CHAITANYA ENTERPRISES </a></b></h4></td>';
          echo '</tr>';
          echo '<tr class="table-primary">';
          echo '<td><b>Company</b></td>';
          echo '<td><b>Product</b></td>';
          echo '</tr>';

          // Iterate through the result set and display each row as a table row
          while ($row = mysqli_fetch_assoc($result)) {
               echo '<tr class="">';
               echo '<td>' . $row['Company'] . '</td>';
               echo '<td> <a href="products.php?tab=ch_en&product=' .$row['prd_name']. '">' . $row['Product'] . '</a></td>';
               echo '</tr>';
          }

          // Close the table
          echo '</table>';
          echo '</div>';
          // Close the database connection

          ?>


          <?php

          $query = "SELECT * FROM ss_en";
          $result = mysqli_query($conn, $query);

          // Display the table
          echo '<div id="ss_en" class="row" style="max-width: 100%; padding-left: 20%; padding-right: 20%;">';
          echo '<table class="table table-bordered disclosure_data" style="border-width: 0.1cm;">';
          echo '<tr class="table-active">';
          echo '<td colspan="3"><h4><b><a href="all_products.php?tab=ss_en" >SHRI SIDDHIVINAYAK ENTERPRISES </a></b></h4></td>';
          echo '</tr>';
          echo '<tr class="table-primary">';
          echo '<td><b>Company</b></td>';
          echo '<td><b>Product</b></td>';
          echo '</tr>';

          // Iterate through the result set and display each row as a table row
          while ($row = mysqli_fetch_assoc($result)) {
               echo '<tr class="">';
               echo '<td>' . $row['Company'] . '</td>';
               echo '<td> <a href="products.php?tab=ss_en&product=' .$row['prd_name']. '">' . $row['Product'] . '</a></td>';

               echo '</tr>';
          }

          // Close the table
          echo '</table>';
          echo '</div>';
          // Close the database connection
          mysqli_close($conn);

          ?>


     </section>





     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Location</h2>
                              </div>
                              <address>
                                   <p>
                                        Some address here<br>
                                        another line for the address,<br>
                                        Pune, Maharashtra<br>
                                   </p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+91 3450983568</p>
                                   <p><a href="mailto:youremail.com">somemail@gmail.com</a></p>
                              </address>

                              <div class="footer_menu">
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div>
                                   <p>Designed & Developed by <i>Company_Name Limited </p>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <?php
     if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == 1) {
          echo "<script>
  function showActions(id) {
    document.getElementById('actions-' + id).style='display: block';
  }

  function hideActions(id) {
     document.getElementById('actions-' + id).style='display: none';
  }

  function removeRow(id) {
    if (confirm('Are you sure you want to remove this row?')) {
      // Send an AJAX request to delete the row
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          // Handle the response
          if (this.responseText === 'success') {
            // Remove the row from the table
            var row = document.getElementById('row-' + id);
            row.parentNode.removeChild(row);
          } else {
            alert('Failed to remove the row.');
          }
        }
      };
      xhttp.open('POST', 'delete_row.php', true); // Replace 'delete_row.php' with the URL to your PHP script handling the delete operation
      xhttp.withCredentials = true;
      xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhttp.send('id=' + id); // Pass the ID of the row to delete
    }
  }

  function editRow(id) {
    var newValue = prompt('Enter the updated value:'); // Prompt the user to enter the updated value
    if (newValue !== null) {
      // Send an AJAX request to update the row
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          // Handle the response
          if (this.responseText === 'success') {
            // Update the value in the table
            var cell = document.querySelector('#row-' + id + ' td:nth-child(3)');
            cell.innerHTML = newValue;
          } else {
            alert('Failed to update the row.');
          }
        }
      };
      xhttp.open('POST', 'update_row.php', true); // Replace 'update_row.php' with the URL to your PHP script handling the update operation
      xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhttp.send('id=' + id + '&value=' + encodeURIComponent(newValue)); // Pass the ID of the row and the updated value
    }
  }
</script>";
     }
     ?>

</body>

</html>