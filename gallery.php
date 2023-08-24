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
  <link rel="stylesheet" href="css/gallery-carousel.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/templatemo-style.css">
  <style>
    .image-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .image-container img {
      width: 50%;
      height: auto;
      margin-bottom: 10px;
    }
  </style>

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

  <!-- Gallary -->
  <section id="feature" style="margin-bottom:80px;">

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style=" max-height: 800px;width: 1200px;margin: 0 auto;object-fit: contain;">
    <div class="carousel-indicators">
        <?php
        $imageDirectory = 'images/promo/images/';
        $imageFiles = scandir($imageDirectory);
        $slideIndex = 0;

        foreach ($imageFiles as $index => $imageFile) {
            if ($imageFile !== '.' && $imageFile !== '..') {
                echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $slideIndex . '" class="' . ($slideIndex === 0 ? 'active' : '') . '" aria-label="Slide ' . ($slideIndex + 1) . '"></button>';
                $slideIndex++;
            }
        }
        ?>
    </div>
    <div class="carousel-inner">
        <?php
        $slideIndex = 0;
        foreach ($imageFiles as $index => $imageFile) {
            if ($imageFile !== '.' && $imageFile !== '..') {
                echo '<div class="carousel-item gallery-image-container ' . ($slideIndex === 0 ? 'active' : '') . '">
                          <img style="border-radius:30px;" src="' . $imageDirectory . $imageFile . '" class="d-block w-100" alt="Slide ' . ($slideIndex + 1) . '">
                      </div>';
                $slideIndex++;
            }
        }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
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
              <input type="text" class="form-control" placeholder="Enter full name" name="name" required="">

              <input type="email" class="form-control" placeholder="Enter mobile number" name="email" required="">

              <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message"
                required=""></textarea>
            </div>

            <div class="col-md-4 col-sm-12">
              <input type="submit" class="form-control" name="send message" value="Send Message">
            </div>
            +
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
              <p>+91 934858477</p>
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

  <script>
    // Array of image file paths

    <?php
    $directory = "images/gallery/";
    $images = [];

    // Scan the directory and retrieve image file names
    $files = scandir($directory);
    foreach ($files as $file) {
      if (is_file($directory . $file)) {
        $images[] = $directory . $file;
      }
    }
    ?>
    const images = <?php echo json_encode($images); ?>

    var galleryContainer = document.getElementById('gallery-image-container');
    var imageContainer = document.createElement('div');
    imageContainer.className = 'image-container';

    for (var i = 0; i < images.length; i++) {
      var image = document.createElement('img');
      image.src = images[i];
      imageContainer.appendChild(image);
    }

    galleryContainer.appendChild(imageContainer);


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