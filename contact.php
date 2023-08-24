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

<body id="top" data-spy="scroll" data-bs-target=".navbar-collapse" data-offset="50">

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
   <!-- CONTACT -->
   <section id="contact" style="background-color: #f8f9fa; text-align: center;">
      <div class="container">
         <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
               <div class="text-center mb-4">
                  <h1 class="display-4 text-success">Shree Siddhivinayak Enterprises</h1>
               </div>
               <div class="row text-success mb-5">
                  <div class="col-md-4">
                     <h4 class="mb-3">Location :<br> Somewhere in the world</h4>
                     <p class="lead">
                        <?php
                        // Location PHP code here
                        ?>
                     </p>
                  </div>
                  <div class="col-md-4">
                     <h4 class="mb-3">Contact Us: <br>9734325245</h4>
                     <p class="lead">
                        <?php
                        // Phone PHP code here
                        ?>
                     </p>
                  </div>
                  <div class="col-md-4">
                     <h4 class="mb-3">Email Us: <br>someemail@gmail.com</h4>
                     <p class="lead">
                        <?php
                        // Email PHP code here
                        ?>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <form id="contact-     " action="" method="post">
                  <div class="text-center mb-5">
                     <h2 class="text-success">Send a Message</h2>
                  </div>
                  <div class="row">
                     <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="Enter full name" name="name" required="">
                     </div>
                     <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" placeholder="Enter email" name="email" required="">
                     </div>
                  </div>
                  <div class="mb-3">
                     <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message"
                        required=""></textarea>
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn btn-success btn-lg">Send Message</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>

   <!-- FOOTER -->
   <footer id="footer" class="mt-5">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
               <p>Designed & Developed by <i>Company_Name Limited</i></p>
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
   <!-- After the </body> tag in your contact.php -->
   <script>
      document.addEventListener("DOMContentLoaded", function () {
         const sendButton = document.getElementById("send-button");

         sendButton.addEventListener("click", function () {
            const name = document.querySelector("input[name='name']").value;
            const email = document.querySelector("input[name='email']").value;
            const message = document.querySelector("textarea[name='message']").value;

            const formData = {
               name: name,
               email: email,
               message: message
            };

            // Convert form data to JSON
            const jsonData = JSON.stringify(formData);

            // Send the JSON data to the backend
            fetch("process-form.php", {
               method: "POST",
               headers: {
                  "Content-Type": "application/json"
               },
               body: jsonData
            })
               .then(response => response.json())
               .then(data => {
                  console.log(data); // Log the response from the backend
                  // You can also display a success message to the user
               })
               .catch(error => {
                  console.error("Error:", error);
                  // Display an error message to the user
               });
         });
      });
   </script>

</body>

</html>