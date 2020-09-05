<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jelajah Studies</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- testimoni -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
    
 <link rel="stylesheet" href="https://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css">



</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-left text-light"><a href="{{ url('/') }}">Jelajah<span> Studies</span></a></h1>
        <h1 class="text-left text-light"><a href="{{ url('/') }}">BimbelMasuk<span style="color: #fdd835;">UI</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ url('/') }}">Home</a></li>
          <li class="drop-down"><a href="#services">Produk Kami</a>
            <ul>
              <li><a href="#">Paket Kelas Online</a></li>
              <li><a href="#">Paket Kelas Tatap Muka</a></li>
              <li><a href="#">Paket Private Online</a></li>
              <li><a href="#">Paket Private Tatap muka</a></li>
              <li><a href="#">Paket Try Out & E-book </a></li>
              <li><a href="#">Paket Mandiri </a></li>
            </ul>
          </li>
          <li><a href="#">Jadwal Bimbel Kelas Tatap Muka</a></li>
          <li><a href="#">Cara Pembelian Paket belajar</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#contact">Kontak Kami</a></li>

          <!-- <li class="get-started"><a href="#">Login</a></li>
          <li class="get-started"><a href="#">Buat Akun</a></li> -->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


<!-- <div class="container">
    <div id="mySidenav" class="sidenav">
      <ul><h2>Profil Siswa</h2>
        <li>Nama :</li>
        <li>Email :</li>
        <li>Nomor Ponsel :</li>
        <li>Alamat :</li>
        <a class="mt-3" href="#" style="width:100px; font-size: 16px; background-color:green; color:white;">Edit</a>
      </ul>
      <ul><h2>Paket Belajar</h2>
        <li>Jenjang :</li>
        <li>Jurusan :</li>
        <li>Kelas :</li>
        <li>Mata Pelajaran:</li>
        <li>Program Bimbel:</li>
        <li>Gelombang Bimbel:</li>
        <li>Kode Transaksi :</li>
      </ul>
      <ul><h2>Try Out</h2>
        <li>Judul :</li>
        <li>Kode:</li>
        <br><li>Judul :</li>
        <li>Kode:</li>
        <br><li>Judul :</li>
        <li>Kode:</li>
      </ul>
      <ul>
        <a href="#">Jadwal Kelas</a>
      </ul>
    </div>

</div> -->

<div class="main">
@yield('content')
</div>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-top">

      <div class="container" data-aos="fade-up">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>Bocor</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div> -->

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>@Jelajah 2020</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>
  <script>
  
  jQuery(document).ready(function($) {
          "use strict";
          //  TESTIMONIALS CAROUSEL HOOK
          $('#customers-testimonials').owlCarousel({
              loop: true,
              center: true,
              items: 3,
              margin: 0,
              autoplay: true,
              dots:true,
              autoplayTimeout: 8500,
              smartSpeed: 450,
              responsive: {
                0: {
                  items: 1
                },
                768: {
                  items: 2
                },
                1170: {
                  items: 3
                }
              }
          });
        });
  
  
  </script>

<script>
  // Get the modal
  var modal = document.getElementById('id01');
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>
  
</body>

</html>