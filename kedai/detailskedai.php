<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<head>
<?php
include ("../login/koneksi/koneksi.php");
?>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>Kopian Malang</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="../images/favico_kopianmalang.jpg" type="image/x-icon" />
   <link rel="apple-touch-icon" href="#" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <!-- Pogo Slider CSS -->
   <link rel="stylesheet" href="css/pogo-slider.min.css" />
   <!-- Site CSS -->
   <link rel="stylesheet" href="css/style.css" />
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css" />
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <style>
      
      input[type="text"]::placeholder {

         /* Firefox, Chrome, Opera */
         text-align: center ;
      }

      input[type="email"]::placeholder {

         /* Internet Explorer 10-11 */
         text-align: center;
      }

      textarea[type="text"]::placeholder {

         /* Microsoft Edge */
         text-align: center;
      }
   </style>
   <script>
      $(document).ready(function () {
         // Add smooth scrolling to all links
         $("a").on('click', function (event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
               // Prevent default anchor click behavior
               event.preventDefault();
               // Store hash
               var hash = this.hash;
               // Using jQuery's animate() method to add smooth page scroll
               // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
               $('html, body').animate({
                  scrollTop: $(hash).offset().top
               }, 800, function () {
                  // Add hash (#) to URL when done scrolling (default click behavior)
                  window.location.hash = hash;
               });
            } // End if
         });
      });
   </script>

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
   <!-- LOADER -->
   <div id="preloader">
      <div class="loader">
         <img src="images/loader.gif" alt="#" />
      </div>
   </div>
   <!-- END LOADER -->
   <div class="wrapper">
      <nav id="sidebar">
         <div class="menu_section">
            <ul>
               <li><a href="../index.php">Home</a></li>
               <li><a href="../kedai/kedai.php">Halaman Kedai</a></li>
               <li><a href="../login/login.php">Login</a></li>
            </ul>
         </div>
      </nav>
      <div id="content">
         <!-- Start header -->
         <header class="top-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="logo_main">
                        <a href="index.php"><img src="images/LogoKMHitam.png" width="125px" height="125px" /></a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn"><img
                           src="images/menuhitam.png"></button>
                  </div>
               </div>
            </div>
         </header>
         <br>
         </br></br></br></br></br></br></br>
         <!-- End header -->
         <div id="section2" class="section about_section layout_padding dash_bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div id="#down" class="heading_main text_align_center">
                           <h2>Kopi Hompimpa</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <h3 class="bg-grey-lightest px-8 py-6 font-semibold">

                  Details Tempat</h3>

               <div class="question-wrap mx-8 mt-2">
                  <details class="question py-4 border-b border-grey-lighter">

                  <summary class="flex items-center">Alamat
                     <button class="ml-auto">
                     <svg class="fill-current opacity-75 w-4 h-4 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                  </button>
                  </summary>

                  <div class="mt-4 leading-normal text-sm ">Jalan Ikan Tombro No.25 , Kota Malang</div>
                  </details>

                  <details class="question py-4 border-b border-grey-lighter">

                  <summary class="flex items-center">Fasilitas
                     <button class="ml-auto">
                     <svg class="fill-current opacity-75 w-4 h-4 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                  </button>
                  </summary>

                  <div class="mt-4 leading-normal text-sm">
                     <ul>
                        <li>Wifi</li>
                        <li>Colokan</li>
                        <li>Area Parkir</li>
                        <li>Permainan</li>
                        <li>Kipas Angin</li>
                     </ul>
                  </div>
                  </details>

                  <details class="question py-4 border-b border-grey-lighter">

                  <summary class="flex items-center">Kebersihan
                     <button class="ml-auto">
                     <svg class="fill-current opacity-75 w-4 h-4 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                  </button>
                  </summary>

                  <div class="mt-4 leading-normal text-sm ">Kebersihan sangat baik</div>
                  </details>

                  <details class="question py-4 border-b border-grey-lighter">

                  <summary class="flex items-center">Keindahan
                     <button class="ml-auto">
                     <svg class="fill-current opacity-75 w-4 h-4 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                  </button>
                  </summary>

                  <div class="mt-4 leading-normal text-sm ">Di kedai hompimpa ini menyajikan tempat yang sangat estetik , cocok untuk nugas dan foto-foto</div>
                  </details>
               </div>

            </div>
            </div>
        </div>
        
                  <!-- Start Footer -->
            <footer class="footer-box">
            <div class="container">

               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center white_fonts margin-bottom_30">
                           <h2>Kontak</h2>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_1">
                        <p>Address<br><small>Jl. Soekarno Hatta No.9,<br>Jatimulyo, Kec. Lowokwaru,<br>Kota Malang, Jawa
                              Timur, <br>Kode Pos 65141</small></p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_2">
                        <p>Phone<br><small>+62 383 3722 987<br>+62 823 3547 7259<br>+62 821 4045 3418<br>08:00 am -
                              05:00 pm</small></p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_3">
                        <p>Email<br><small>ilyproject@gmail.com<br>24 X 7 online support</small></p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog_last">
                        <p>Social media</p>
                        <p>
                           <ul>
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                           </ul>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- End Footer -->
         <div class="footer_bottom">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <p class="crp">© Copyrights 2020 design by ILY Project</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/jquery.pogo-slider.min.js"></script>
      <script src="js/slider-index.js"></script>
      <script src="js/smoothscroll.js"></script>
      <script src="js/form-validator.min.js"></script>
      <script src="js/contact-form-script.js"></script>
      <script src="js/isotope.min.js"></script>
      <script src="js/images-loded.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- End Google Map -->
      <script>
         $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
               $('#sidebar, #content').toggleClass('active');
               $('.collapse.in').toggleClass('in');
               $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
         });
      </script>
</body>

</html>