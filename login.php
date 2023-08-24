<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $servername = "localhost"; // Replace with your server name
     $username = "root"; // Replace with your MySQL username
     $password = "temp"; // Replace with your MySQL password
     $database = "atlas_schema"; // Replace with your database name
     
     // Create a connection
     $conn = new mysqli($servername, $username, $password, $database);

     if ($conn->connect_errno) {
          echo "Connection Error.";
     }

     // Get the username and password from the form
     $username = $_POST['username'];
     $password = $_POST['password'];

     // Perform sanitization on the input
     $username = mysqli_real_escape_string($conn, $username);
     $password = mysqli_real_escape_string($conn, $password);

     // Prepare a statement with a parameterized query
     $query = "SELECT * FROM auth WHERE username = ?";
     $stmt = $conn->prepare($query);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $result = $stmt->get_result();

     // Check if the query was successful and rows are returned
     if ($result && $result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $storedHashedPassword = $row['userpass'];

          // Verify the provided password with the stored hashed password
          if (password_verify($password,$storedHashedPassword)) {
               // Authentication successful
               session_start();
               $_SESSION['authenticated'] = true;
               $_SESSION['username'] = $username;
               header('Location: index.php');
          } else {
               // Authentication failed
               echo "Invalid username or password.";
          }
     } else {
          // Authentication failed
          echo "Invalid username or password.";
     }

     // Close the statement and connection
     $stmt->close();
     $conn->close();
}
?>


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
     <link rel="stylesheet" href="css/login.css">
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

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

     <section id="login">
          <div class="login-container" style="max-width: 800px;">
               <h2>Login</h2>
               <form action="login.php" method="POST">
                    <div class="login-form-group">
                         <label for="username">Username:</label>
                         <input type="text" id="username" name="username" required>
                    </div>
                    <div class="login-form-group">
                         <label for="password">Password:</label>
                         <input type="password" id="password" name="password" required>
                    </div>
                    <div class="login-form-group">
                         <input type="submit" value="Login">
                    </div>
                    <div class="login-form-group text-center">
                         Don't have an account? <a href="register.php" class="register-link">Register</a>
                    </div>
               </form>
          </div>
     </section>

     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name"
                                        required="">

                                   <input type="email" class="form-control" placeholder="Enter mobile number"
                                        name="email" required="">

                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message"
                                        name="message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Send Message">
                              </div>

                         </form>
                    </div>

               </div>
          </div>
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
                                   <p>+91 9844093177</p>
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

</body>

</html>