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
               <a class="navbar-brand" href="#">
                    <img src="images/fav/favicon.jpg" alt="Chaitanya Enterprize" style="max-width: 80px;max-height: 80px;">
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse">
                    <ul class="navbar-nav navbar-nav-first">
                         <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                         <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                         <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                         <li class="nav-item"><a class="nav-link" href="features.php">Features</a></li>
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
                         <li class="nav-item"><a class="nav-link" href="login.php">Admin Login</a></li>
                    </ul>
               </div>
          </div>
     </nav>

     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-16 col-sm-12">
                         <div class="about-info">
                              <h2>Some more context here</h2>

                              <!--                 <figure>
                                        <span><i class="fa fa-users"></i></span>
                                        <figcaption>
                                             <h3>Professional Trainers</h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                        </figcaption>
                                   </figure>
     
                                   <figure>
                                        <span><i class="fa fa-certificate"></i></span>
                                        <figcaption>
                                             <h3>International Certifications</h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                        </figcaption>
                                   </figure>
     
                                   <figure>
                                        <span><i class="fa fa-bar-chart-o"></i></span>
                                        <figcaption>
                                             <h3>Free for 3 months</h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                        </figcaption>
                                   </figure>      -->

                              <P style="font-size: large">
                                   <?php

                                   $servername = "localhost"; // Replace with your server name
                                   $username = "root"; // Replace with your MySQL username
                                   $password = "temp"; // Replace with your MySQL password
                                   $database = "agmpublicschool"; // Replace with your database name
                                   // Create a connection
                                   $conn = new mysqli($servername, $username, $password, $database);

                                   if ($conn->connect_errno) {
                                        echo "Connection Error.";
                                   }

                                   $query = "SELECT s2 FROM metainfo WHERE  s1='intro_para'";
                                   $result = mysqli_query($conn, $query);

                                   // Fetch the result row
                                   $row = mysqli_fetch_assoc($result);

                                   // Display a specific column from the result
                                   echo $row['s2'];


                                   mysqli_close($conn);

                                   ?>
                              </P>
                              <p style="font-size: large">
                                   <?php

                                   $servername = "localhost"; // Replace with your server name
                                   $username = "root"; // Replace with your MySQL username
                                   $password = "temp"; // Replace with your MySQL password
                                   $database = "agmpublicschool"; // Replace with your database name
                                   // Create a connection
                                   $conn = new mysqli($servername, $username, $password, $database);

                                   if ($conn->connect_errno) {
                                        echo "Connection Error.";
                                   }

                                   $query = "SELECT s2 FROM metainfo WHERE  s1='p_msg'";
                                   $result = mysqli_query($conn, $query);

                                   // Fetch the result row
                                   $row = mysqli_fetch_assoc($result);

                                   // Display a specific column from the result
                                   echo $row['s2'];


                                   mysqli_close($conn);

                                   ?>
                              </p>
                         </div>
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
                                   <p>
                                        <?php

                                        $servername = "localhost"; // Replace with your server name
                                        $username = "root"; // Replace with your MySQL username
                                        $password = "temp"; // Replace with your MySQL password
                                        $database = "agmpublicschool"; // Replace with your database name
                                        // Create a connection
                                        $conn = new mysqli($servername, $username, $password, $database);

                                        if ($conn->connect_errno) {
                                             echo "Connection Error.";
                                        }

                                        $query = "SELECT s2 FROM metainfo WHERE  s1='phone'";
                                        $result = mysqli_query($conn, $query);

                                        // Fetch the result row
                                        $row = mysqli_fetch_assoc($result);

                                        // Display a specific column from the result
                                        echo $row['s2'];


                                        mysqli_close($conn);

                                        ?>
                                   </p>
                                   <p><a href="mailto:youremail.com">
                                             <?php

                                             $servername = "localhost"; // Replace with your server name
                                             $username = "root"; // Replace with your MySQL username
                                             $password = "temp"; // Replace with your MySQL password
                                             $database = "agmpublicschool"; // Replace with your database name
                                             // Create a connection
                                             $conn = new mysqli($servername, $username, $password, $database);

                                             if ($conn->connect_errno) {
                                                  echo "Connection Error.";
                                             }

                                             $query = "SELECT s2 FROM metainfo WHERE  s1='email'";
                                             $result = mysqli_query($conn, $query);

                                             // Fetch the result row
                                             $row = mysqli_fetch_assoc($result);

                                             // Display a specific column from the result
                                             echo $row['s2'];


                                             mysqli_close($conn);

                                             ?>
                                        </a></p>
                              </address>

                              <div class="footer_menu">
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div>
                                   <p>Designed & Developed by <i>Company_Name Limited</p>
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

     <script>
          // Array of image file paths
          const images = ["../images/slider-image1.jpg", "../images/slider-image2.jpg",
               "../images/slider-image3.jpg"
               , "../images/gallary-chem.jpg",
               "../images/gallary-phy.jpg",
               "../images/gallary-g1.jpg",
               "../images/gallary-g2.jpg",
               "../images/gallary-g3.jpg",
               "../images/gallary-study.jpg",
               "../images/gallary-lib.jpg",
               "../images/gallary-com.jpg"



          ];

          let currentIndex = 0;
          const currentImage = document.getElementById('current-image');
          const prevButton = document.getElementById('prev-button');
          const nextButton = document.getElementById('next-button');

          // Function to update the image source based on the current index
          function updateImage() {
               currentImage.src = images[currentIndex];
          }

          // Event listener for the previous button
          prevButton.addEventListener('click', () => {
               currentIndex--;
               if (currentIndex < 0) {
                    currentIndex = images.length - 1;
               }
               updateImage();
          });

          // Event listener for the next button
          nextButton.addEventListener('click', () => {
               currentIndex++;
               if (currentIndex >= images.length) {
                    currentIndex = 0;
               }
               updateImage();
          });

          // Initialize the image on page load
          updateImage();
     </script>
</body>

</html>