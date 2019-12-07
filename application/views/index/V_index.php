<!DOCTYPE html>
<html style="overflow-x: hidden;">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Simpark</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="<?=base_url('assets/index/css/owl.carousel.min.css')?>" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/index/css/bootstrap.css')?>" />

  <!-- fonts style -->
  <link href="<?=base_url('assets/index/css/css.css')?>" rel="stylesheet" />
  <link href="<?=base_url('assets/index/css/css2.css')?>" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?=base_url('assets/index/css/style.css')?>" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?=base_url('assets/index/css/responsive.css')?>" rel="stylesheet" />


  <!-- Javascript -->
  <script type="text/javascript" src="<?=base_url('assets/index/js/jquery-3.4.1.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/index/js/bootstrap.js')?>"></script>

  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <script>
  function initialize() {
    var propertiPeta = {
      center:new google.maps.LatLng(-7.16123, 112.61583),
      zoom:18,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
    
    // membuat Marker
    var marker=new google.maps.Marker({
        position: new google.maps.LatLng(-7.16123, 112.61583),
        map: peta,
        animation: google.maps.Animation.BOUNCE
    });

  }

  // event jendela di-load  
  google.maps.event.addDomListener(window, 'load', initialize);

  function initialize1() {
    var propertiPeta1 = {
      center:new google.maps.LatLng(-7.15917, 112.61606),
      zoom:18,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    var peta1 = new google.maps.Map(document.getElementById("googleMap1"), propertiPeta1);
    
    // membuat Marker
    var marker1=new google.maps.Marker({
        position: new google.maps.LatLng(-7.15917, 112.61606),
        map: peta1,
        animation: google.maps.Animation.BOUNCE
    });

  }

  // event jendela di-load  
  google.maps.event.addDomListener(window, 'load', initialize1);

  function initialize2() {
    var propertiPeta2 = {
      center:new google.maps.LatLng(-7.15927, 112.61569),
      zoom:18,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    var peta2 = new google.maps.Map(document.getElementById("googleMap2"), propertiPeta2);
    
    // membuat Marker
    var marker2=new google.maps.Marker({
        position: new google.maps.LatLng(-7.15927, 112.61569),
        map: peta2,
        animation: google.maps.Animation.BOUNCE
    });

  }

  // event jendela di-load  
  google.maps.event.addDomListener(window, 'load', initialize2);
  </script>
  <!-- endjavascript -->
</head>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <section class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container d-lg-none">
          <a class="navbar-brand" href="#">
            <div class="logo-box">
              <img src="<?=base_url('assets/index/images/logo.png')?>" alt="">
              <span>
                  SISTEM INFORMASI MANAJEMEN PARKIR
              </span>
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
        <div class="header_container ">
          <div class="logo-box">
            <img src="<?=base_url('assets/index/images/logo.png')?>" alt="">
            <span><br>
                  SISTEM INFORMASI MANAJEMEN PARKIR
            </span>
          </div>
          <div>
            <div class="header_top">
              <div class="header_top-contact">

                <a href="" class="ml-7">
                  <div>
                    <img src="<?=base_url('assets/index/images/phone.png')?>" alt="" />
                  </div>
                  <span>
                    (+62) 89678148712
                  </span>
                </a>
                <a href="" class="ml-4">
                  <div>
                    <img src="<?=base_url('assets/index/images/mail.png')?>" alt="" />
                  </div>
                  <span>
                    Simpark@gmail.com
                  </span>
                </a>
              </div>
            </div>
            <div class="header_btm">
              <nav class="navbar navbar-expand-lg custom_nav-container pt-3">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                    <li class="nav-item active">
                      <a class="nav-link" href="<?=base_url('/')?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?=base_url('denahlokasi')?>"> Denah Lokasi </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?=base_url('areamobil')?>"> Area Mobil </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?=base_url('areamotor')?>"> Area Motor </a>
                    </li>
                    </ul>

                  </div>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end header section -->

    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="slider_item-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slider_item-detail">
                      <div class="slider_form-box">
                          <!--<button>
                            
                          </button>-->
                      </div>
                      <div>
                        <h1>
                          Selamat Datang <br>
                          Di <br>
                          SIMPARK
                        </h1>

                        <div class="d-flex">
                          <div>
                            <a href="<?=base_url('register')?>" class="read-btn">

                              <span>
                                Register
                              </span>
                              <img src="<?=base_url('assets/index/images/white-next.png')?>" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <a href="<?=base_url('login')?>" class="quote-btn">

                              <span>
                                Login
                              </span>
                              <img src="<?=base_url('assets/index/images/white-next.png')?>" alt="">
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">
                      <img src="<?=base_url('assets/index/images/SLIDE 1.png')?>" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="slider_item-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slider_item-detail">
                      <div class="slider_form-box">
                      </div>
                      <div>
                        <h1>
                          Sistem <br>
                          Informasi <br>
                          Manajemen Parkir
                        </h1>

                        <div class="d-flex">
                          <div>
                            <a href="<?=base_url('register')?>" class="read-btn">

                              <span>
                                Register
                              </span>
                              <img src="<?=base_url('assets/index/images/white-next.png')?>" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <a href="<?=base_url('login')?>" class="quote-btn">

                              <span>
                                Login
                              </span>
                              <img src="<?=base_url('assets/index/images/white-next.png')?>" alt="">
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">
                      <img src="<?=base_url('assets/index/images/SLIDE 2.png')?>" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="slider_item-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slider_item-detail">
                      <div class="slider_form-box">
                      </div>
                      <div>
                        <h1>
                          Sistem Untuk Mengelola Lahan Parkir<br>
                          Di Universitas Muhammadiyah Gresik <br>
                        </h1>

                        <div class="d-flex">
                          <div>
                            <a href="<?=base_url('register')?>" class="read-btn">

                              <span>
                                Register
                              </span>
                              <img src="<?=base_url('assets/index/images/white-next.png')?>" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <a href="<?=base_url('login')?>" class="quote-btn">

                              <span>
                                Login
                              </span>
                              <img src="<?=base_url('assets/index/images/white-next.png')?>" alt="">
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">

                      <img src="images/SLIDE 3.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="slider_item-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slider_item-detail">
                      <div class="slider_form-box">
                      </div>
                      <div>
                        <h2 style="margin-bottom: 20% ; color:black;">
                          Jangan Hatinya Aja Yang Di Kunci !!! <br>
                          Sepeda Motornya Juga Di Kunci ... <br>
                          Waspada ... Bukan Pencuri Hati Aja Yang Banyak, Pencuri Motor Juga.<br>
                        </h2>

                        <div class="d-flex">
                          <div>
                            <a href="<?=base_url('register')?>" class="read-btn">

                              <span>
                                Register
                              </span>
                              <img src="<?=base_url('assets/index/images/white-next.png')?>" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <a href="<?=base_url('login')?>" class="quote-btn">

                              <span>
                                Login
                              </span>
                              <img src="<?=base_url('assets/index/images/white-next.png')?>" alt="">
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">
                      <img src="<?=base_url('assets/index/images/SLIDE 4.png')?>" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>

      </div>


    </section>

    <!-- end slider section -->
  </div>

  <!-- about section -->
  <section class="about_section ">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="heading_style">
            Tentang Simpark
          </h2>
        </div>

      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="about_img-box">

            <img src="<?=base_url('assets/index/images/a-truck.jpg')?>" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 about_detail-container">
          <div class="about_detail-box">
            <h2>
              Sistem Informasi Manajamen Parkir
            </h2>
            <p style="font-size:20px; text-align: justify">
              Sebuah sistem yang disediakan oleh Universitas Muhammadiyah Gresik 
              yang di khusus kan untuk mahasiswa memarkirkan kendaran dengan menggunakan sistem booking
              yang disesuaikan dengan jumlah lahan parkir yang kosong.
            </p>
          </div>
        </div>
      </div>
    </div>

  </section><br>

  <!-- end about section -->

  <!-- shop section -->
  <section class="shop_section">
    <div class="container">
      <div class="d-flex justify-content-center">
        <h2 class="heading_style">
          Denah Lokasi
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="d-flex align-items-center h-100">
            <div class="shop-detail">
              <h5>
                Letak Denah Lokasi
              </h5>
              <p>
                Letak Antar Denah Lokasi Parkir Mobil dan Motor
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
            <img src="<?=base_url('assets/index/images/denah parkir-png.jpg')?>" alt="" class="img-fluid" style="padding-bottom: 5%;height: 360px;">
        </div>
      </div>
    </div>
  </section><br>
  <!-- end shop section -->

  
  <!-- company section -->
  <section class="company_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="d-flex align-items-center h-100">
            <div class="company-detail">
              <h3>
                Slogan
              </h3>
              <p style="font-size: 25px;">
                "Iki Ati Du Parkiran Maju Mundur Ra Karuan"
                (Pikir Keri)
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="company_img-box">
            <img src="<?=base_url('assets/index/images/SLIDE 4.png')?>" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end company section -->

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="d-flex justify-content-center">
      <h2 class="heading_style">
        Lokasi
      </h2>
    </div>
    <div class="container layout_padding2-top">
      <div class="row">
        <div class="col-md-6">
          <iframe class="h-100 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.695767910352!2d112.61358081477431!3d-7.161127194829405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77ffd7112b48ef%3A0xbc0320214ba5fa8e!2sUniversitas%20Muhammadiyah%20Gresik!5e0!3m2!1snl!2sid!4v1574349535762!5m2!1snl!2sid" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          <!-- <div id="map" ></div> -->
        </div>

        <div class="col-md-6">
          <div class="contact_form-container">
            <h3>
                <br><br><br><br>
                Lokasi Universitas Muhammadiyah Gresik
                <br><br><br><br>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

    <!-- info section -->
  <section class="info_section ">
    <div class="container ">
      <div class="row  mb-3 pb-4">
        <div class="col-md-3 info_logo">
          <div class="logo-box">
            <img src="<?=base_url('assets/index/images/logo-white.png')?>" alt="">
          </div>
          <p>
            Sistem Informasi Manajemen Parkir
          </p>
          <div class="info_social">
            <div>
              <a href="">
                <img src="<?=base_url('assets/index/images/fb.png')?>" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="<?=base_url('assets/index/images/twitter.png')?>" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="<?=base_url('assets/index/images/g-plus.png')?>" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="<?=base_url('assets/index/images/linkedin.png')?>" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 info_address">
          <h5>
            Address
          </h5>
          <p>
            Jl. Sumatera No.101, Setingi, Randuagung, Kec. Gresik, Kabupaten Gresik, Jawa Timur 61121
          </p>
        </div>
        <div class="col-md-3 info_links">

          <div class="info_nav ">
            <nav class="">
              <ul>
                <h5>
                  Links
                </h5>
                <li>
                      <a href="<?=base_url('/')?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li>
                      <a href="<?=base_url('denahlokasi')?>"> Denah Lokasi </a>
                </li>
                <li>
                      <a href="<?=base_url('areamobil')?>"> Area Mobil </a>
                </li>
                <li>
                      <a href="<?=base_url('areamotor')?>"> Area Motor </a>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <div class="col-md-3 info_news">
          <h5>
            Kontak Kami
          </h5>
          <p>
            (+62) 8522369417
          </p>
          <p>
            (+62) 8522369417
          </p>
          <p>
            <a href="">
              Simpark@gmail.com
            </a>
          </p>
        </div>
      </div>


    </div>
  </section>
  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="<?=base_url()?>">Simpark Templates</a>
    </p>
  </section>
  <!-- footer section -->
  
</body>

</html>

  