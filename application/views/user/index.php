<!--
=========================================================
* Argon Design System - v1.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2020 Creative Tim (http://www.creative-tim.com)

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/frontend/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/frontend/img/favicon.png">
  <title>
    SPK Pemilihan Parfum
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url();?>assets/frontend/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/frontend/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url();?>assets/frontend/css/font-awesome.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/frontend/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url();?>assets/frontend/css/argon-design-system.css?v=1.2.0" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/frontend/css/custom.css" rel="stylesheet" />
</head>

<body class="landing-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="<?php echo base_url('user');?>">
        <img src="<?php echo base_url();?>assets/frontend/img/brand/whites.png" height="80" width="110">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../../../index.html">
                <img src="<?php echo base_url();?>assets/frontend/img/brand/whites.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item">
            <a href="<?= base_url('user/data_parfum');?>" class="nav-link" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="nav-link-inner--text">Data Parfum</span>
            </a>
          </li> 
          <li class="nav-item dropdown">
            <a href="<?= base_url('user/perhitungan');?>" class="nav-link" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="nav-link-inner--text">Perhitungan</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user/metode_perhitungan');?>" class="nav-link" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="nav-link-inner--text">Perhitungan Filtering</span>
            </a>
          </li>   
        </ul>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" data-toggle="tooltip" title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" data-toggle="tooltip" title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" data-toggle="tooltip" title="Follow us on Twitter">
              <i class="fa fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="#" data-toggle="tooltip" title="Star us on Github">
              <i class="fa fa-github"></i>
              <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
          </li>
          <li class="nav-item d-none d-lg-block ml-lg-4">
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Auth');?>" class="nav-link" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="btn btn-sm btn-primary">Login</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
<div class="wrapper">
<div class="section section-hero section-shaped">
  <div class="shape shape-style-1 shape-primary">
    <span class="span-150"></span>
    <span class="span-50"></span>
    <span class="span-50"></span>
    <span class="span-75"></span>
    <span class="span-100"></span>
    <span class="span-75"></span>
    <span class="span-50"></span>
    <span class="span-100"></span>
    <span class="span-50"></span>
    <span class="span-100"></span>
  </div>
  <div class="page-header">
    <div class="container shape-container d-flex align-items-center py-lg">
      <div class="col px-0">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center">
            <img src="<?php echo base_url();?>assets/frontend/img/brand/whites.png" style="width: 300px;" class="img-fluid">
            <p class="lead text-white">Web Sistem Pendukung Keputusan Pemilihan Parfum Metode Multi Attribute Utility Theory ( MAUT ).</p>
            <div class="btn-wrapper mt-5">
              <a href="<?php echo site_url('user/perhitungan'); ?>" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0">
                <span class="btn-inner--icon"><i class="ni ni-atom"></i></span>
                <span class="btn-inner--text-sm">Mulai Analisa Perhitungan</span>
              </a>
            </div>
            <div class="mt-5">
              <small class="font-weight-bold mb-0 mr-2 text-white">*proudly coded by</small>
              <img src="<?php echo base_url();?>assets/frontend/img/brand/creativetim-white-slim.png" style="height: 28px;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="separator separator-bottom separator-skew zindex-100">
    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
    </svg>
  </div>
</div>
<div class="section section-components pb-0" id="section-components">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
    <div class="section features-6">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="info info-horizontal info-hover-primary">
              <div class="description pl-4">
                <h5 class="title">AROMATERAPI</h5>
                <p>Ternyata salah satu manfaat parfum adalah bisa membantu memperbaiki suasana hati. Jadi, saat Anda sedang merasa agak sedih, cobalah semprotkan parfum favorit Anda khususnya yang memiliki aroma orange atau aroma pinewood. Aroma-aroma tersebut dipercaya bisa menumbuhkan kembali semangat Anda. Selain itu, pilihlah aroma parfum yang sesuai dengan suasana hati atau aroma yang bisa membuat Anda merasa lebih baik.</p><br>
                <p>
                Dengan begitu, Anda bisa menggunakan parfum yang menenangkan pikiran dan tubuh Anda saat stres. Agar manfaat parfum Anda untuk aromaterapi bisa dirasakan, perlu melakukan sedikit percobaan untuk menemukan aroma yang tepat dan mampu bekerja di berbagai situasi.</p>
                <a href="#" class="text-info">Learn more</a>
              </div>
            </div>
            <div class="info info-horizontal info-hover-primary mt-5">
              <div class="description pl-4">
                <h5 class="title">KEPRIBADIAN</h5>
                <p>Anda pasti tahu jika aroma parfum bisa menjadi tanda atau ciri dari orang yang memakainya. Ada sebagian orang yang menggunakan parfum dengan aroma yang sama setiap hari. Ada pula yang menggunakan parfum dengan aroma berbeda sesuai suasana hati setiap hari.</p><br>
                <p>
                Apapun parfum yang dipakai, Anda harus yakin jika pilihan parfum tersebut bisa menggambarkan sesuatu tentang Anda. Temukan aroma yang sempurna untuk mencerminkan diri Anda baik dari dalam maupun dari luar. Jadi, pilihlah parfum yang sesuai dengan kepribadian dan aromanya tidak menusuk hidung.</p>
                <a href="#" class="text-info">Learn more</a>
              </div>
            </div>
            <div class="info info-horizontal info-hover-primary mt-5">
              <div class="description pl-4">
                <h5 class="title">DIRI MENJADI LEBIH MENARIK</h5>
                <p>Indra penciuman menjadi salah satu yang paling peka dari panca indra lainnya. Bisa jadi, Anda hanya tertarik pada seseorang hanya karena aroma badan mereka yang harum. Perlu diketahui, parfum kaya akan feromon yang dapat digunakan untuk menarik lawan jenis dan dapat membuat kita menjadi menarik bagi orang lain.</p>
                <a href="#" class="text-info">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-10 mx-md-auto">
            <img class="ml-lg-5" src="<?php echo base_url();?>assets/frontend/img/ill/ill.png" width="100%">
          </div>
        </div>
      </div>
    </div>
    <div class="section features-1">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-primary badge-pill mb-3">Insight</span>
            <h3 class="display-3">Semangat dengan Wewangian Cinta</h3>
            <p class="lead">Tips Supaya Aroma Parfum Tahan Lama.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
                <i class="ni ni-settings-gear-65"></i>
              </div>
              <h6 class="info-title text-uppercase text-primary">Lakukan Setelah Mandi</h6>
              <p class="description opacity-8">Menyemprotkan parfum setelah mandi adalah waktu terbaik karena kulit tubuh yang lembap mampu mengikat parfum dengan baik dan sempurna. Selain itu, dengan mandi terlebih dulu pori-pori kulit akan terbuka lebar sehingga mudah menyerap cairan parfum yang telah disemprotkan.</p>
              <a href="javascript:;" class="text-primary">More about us
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
                <i class="ni ni-atom"></i>
              </div>
              <h6 class="info-title text-uppercase text-success">Semprotkan Parfum di Titik yang Tepat</h6>
              <p class="description opacity-8">Jangan asal menyemprotkan parfum, ya, Sista! Mulailah dari titik nadi dan beberapa bagian tubuh seperti leher, dada pergelangan tangan, belakang telinga, lengan bawah, di belakang lutut, siku dalam dan bahu. Area tubuh ini dipercaya cenderung menghasilkan panas lebih tinggi yang otomatis akan menyebarkan aroma parfum ke seluruh tubuh. Dengan begitu parfum akan menciptakan jejak aroma yang bagus atau disebut dengan sillage.</p>
              <a href="javascript:;" class="text-primary">More about us
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle">
                <i class="ni ni-world"></i>
              </div>
              <h6 class="info-title text-uppercase text-warning">Semprotkan dari Jarak Tertentu</h6>
              <p class="description opacity-8">Sista juga harus perhatikan jarak semprotannya. Jaga jarak sekitar 15-25 cm dari tubuh agar penyebaran parfum menjadi lebih luas dan merata. Sehingga wanginya dijamin lebih tahan lama, terasa ringan, dan juga menyegarkan.</p>
              <a href="javascript:;" class="text-primary">More about us
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br /><br />
    <footer class="footer">
      <div class="container">
        <div class="row row-grid align-items-center mb-5">
          <div class="col-lg-6">
            <h3 class="text-primary font-weight-light mb-2">Terimakasih Telah Mendukung Kami!</h3>
          </div>
          <div class="col-lg-6 text-lg-center btn-wrapper">
            <button target="_blank" href="https://twitter.com/creativetim" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
              <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
            </button>
            <button target="_blank" href="https://www.facebook.com/CreativeTim/" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
              <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
            </button>
            <button target="_blank" href="https://dribbble.com/creativetim" rel="nofollow" class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
              <span class="btn-inner--icon"><i class="fa fa-dribbble"></i></span>
            </button>
            <button target="_blank" href="https://github.com/creativetimofficial" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="Star on Github">
              <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
            </button>
          </div>
        </div>
        <hr>
        <div class="row align-items-center justify-content-md-between">
          <div class="col-md-6">
            <div class="copyright">
              Copyright © Suhavid Hendra Kusuma | SPK Pemilihan Parfum (MAUT) 2020 <a href="" target="_blank">Designed by Creative Tim</a>.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav nav-footer justify-content-end">
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url();?>assets/frontend/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/frontend/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/frontend/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/frontend/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?php echo base_url();?>assets/frontend/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url();?>assets/frontend/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/frontend/js/plugins/moment.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/frontend/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="<?php echo base_url();?>assets/frontend/js/argon-design-system.min.js?v=1.2.0" type="text/javascript"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>