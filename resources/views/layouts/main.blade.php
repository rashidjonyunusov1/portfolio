<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Rashidjon Yunusov</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

 
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<style>
  .btn{
    /* background: rgb(192, 188, 188); */
    background-color: aqua;
  }
  .btn:hover{
    color: black;
    background: green;
    
  }
</style>

<body>


  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <!-- start profile img -->
        @include('sections.profile_img')
        <!-- end pofile img -->
        <h1 class="text-light"><a href="index.html">Rashidjon Yunusov</a></h1>
        <!-- start social networks -->
        @include('sections.social_networks')
        <!-- end social networks -->
      </div><br>
      <div style="color: blue;">
        &nbsp&nbsp&nbsp&nbsp&nbsp;<a href="/lang/uz" class="nav-item"><span>UZB</span></a>&nbsp&nbsp&nbsp&nbsp&nbsp;
        <a href="/lang/en" class="nav-item"><span>Eng</span></a>&nbsp&nbsp&nbsp&nbsp&nbsp;
        <a href="/lang/ru" class="nav-item"><span>Rus</span></a>&nbsp&nbsp&nbsp&nbsp&nbsp;
        {{-- {{ \App::getLocale() }} --}}
      </div>
      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>@lang('navbar.home')</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>@lang('navbar.about')</span></a></li>
          <!-- <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li> -->
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>@lang('navbar.portfolio')</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>@lang('navbar.services')</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>@lang('navbar.contact')</span></a></li>
        </ul>
      </nav>
    </div>
  </header>

    @yield('content')


  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Rashidjon  <strong><span>Portfolio</span></strong>
      </div>
      <div class="credits">

        Designed by <a href="mailto:yunusovrashidjon21@gmail.cp">Rashidjon</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>

  
  <script src="assets/js/main.js"></script>
  <script src="assets/js/tele.js"></script>

</body>

</html>