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
  <style type="text/css">
    .centered{
      text-align:center;
      position: absolute;
      top: 70%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    img {
    display: block;
    width:100%;
    }

    .thumbnail {
        position: relative;
        display: inline-block;
    }

    .caption {
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate( -50%, -50% );
        text-align: center;
        font-weight: bold;
    }
  </style>

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
<body style="background-image: url(<?=base_url('assets/index/images/bg-login.jpg')?>);background-size: 210%; position: relative;">
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
                      <a class="nav-link" href="<?=base_url();?>">Home </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?=base_url('denahlokasi')?>"> Denah Lokasi <span class="sr-only">(current)</span></a>
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