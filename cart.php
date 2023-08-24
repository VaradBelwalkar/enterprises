<?php
// Start or resume the session
session_start();

$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your MySQL username
$password = "temp"; // Replace with your MySQL password
$database = "atlas_schema"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_errno) {
    echo "Connection Error.";
}

// Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    // Redirect to the login page if not authenticated
    header('Location: login.php');
    exit();
}

    $usr_name = $_SESSION["username"];
echo "DKLFJDSLKf";
    $query = 'SELECT * FROM orders INNER JOIN auth ON orders.client=auth.username WHERE auth.username = ?';
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $usr_name);
$stmt->execute();
$result = $stmt->get_result();
    $row = mysqli_fetch_assoc($result);


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
                         <li class="nav-item"><a class="nav-link" href="#top">My Cart</a></li>
                    </ul>
               </div>
          </div>
     </nav>

    
<div class="container" style="margin-top:60px;margin-bottom:60px;">
<div class=" col-md-6 bootstrap snippets bootdeys">
	<!-- product -->
	<div class="product-info smart-form">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <!-- Form to add product to cart -->
            <form method="post">
                <input type="hidden" name="product_name" value="<?php echo $row['Product']; ?>">
                <button type="submit" name="add_to_cart" class="btn btn-success">Add to Cart</button>
            </form>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="rating">
                <?php
                for ($i = 0; $i < $row["stars"]; $i++) {
                    echo '<label for="stars-rating-5"><i class="fa fa-star"></i></label>';
                }
                for ($i = $row["stars"]; $i < 5; $i++) {
                    echo '<label for="stars-rating-3"><i class="fa fa-star text-primary"></i></label>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
	<!-- end product -->
</div>
</div>

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

                                        $query = "SELECT s2 FROM metainfo WHERE  s1='phone'";
                                        $result = mysqli_query($conn, $query);

                                        // Fetch the result row
                                        $row = mysqli_fetch_assoc($result);

                                        // Display a specific column from the result
                                        echo $row['s2'];

                                        ?>
                                   </p>
                                   <p><a href="mailto:youremail.com">
                                             <?php

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