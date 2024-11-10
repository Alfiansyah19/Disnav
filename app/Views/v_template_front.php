<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $db = Config\Database::connect();
  $web = $db->table('tbl_kantor')->where('id', 1)->get()->getRowArray();
  $wilayah = $db->table('tbl_wilayah')->get()->getResultArray();

  ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <meta name="robots" content="" />
  <meta name="description" content="EduZone - Education Collage & School HTML5 Template" />
  <meta property="og:title" content="EduZone - Education Collage & School HTML5 Template" />
  <meta property="og:description" content="EduZone - Education Collage & School HTML5 Template" />
  <meta property="og:image" content="" />
  <meta name="format-detection" content="telephone=no">

  <!-- FAVICONS ICON -->
  <link rel="icon" href="<?= base_url('gambar/' . $web['logo_kantor']) ?>" type="image/x-icon" />
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('gambar/' . $web['logo_kantor']) ?>" />

  <!-- PAGE TITLE HERE -->
  <title><?= $judul ?></title>

  <!-- MOBILE SPECIFIC -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

  <!-- STYLESHEETS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('front') ?>/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('front') ?>/css/style.css">
  <link class="skin" rel="stylesheet" type="text/css" href="<?= base_url('front') ?>/css/skin/skin-1.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('front') ?>/css/templete.css">
  <!-- Google Font -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
  </style>

  <!-- REVOLUTION SLIDER CSS -->
  <link rel="stylesheet" type="<?= base_url('front') ?>/plugins/revolution/revolution/css/revolution.min.css">

</head>

<body id="bg">
  <!-- header -->
  <header class="site-header mo-left header">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
      <div class="main-bar clearfix ">
        <div class="container clearfix">
          <!-- website logo -->
          <div class="logo-header mostion logo-dark">
            <a href=""><img src="<?= base_url('gambar/' . $web['header_logo']) ?>" alt=""></a>
          </div>

          <!-- extra nav -->
          <?php if (!session()->has('id_user')) : ?>
            <div class="extra-nav">
              <div class="extra-cell">
                <a href="<?= base_url('Auth/login') ?>" class="site-button btnhover13">Login</a>
              </div>
            </div>

          <?php else: ?>
            <div class="extra-nav">
              <div class="extra-cell">
                <a href="<?= base_url('Admin/Dashboard') ?>" class="site-button btnhover13">Dashboard</a>
              </div>
            </div>
          <?php endif ?>


        </div>
      </div>
    </div>
    <!-- main header END -->
  </header>
  <!-- header END -->

  <?php if ($page) {
    echo view($page);
  }

  ?>
  <!-- Footer -->
  <footer class="site-footer">
    <div class="p-tb60 text-center bg-success">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="font-weight-300 text-white"><?= $web['title'] ?></h3>
            <div class="dlab-separator bg-white"></div>
            <ul class="list-inline m-t20">
              <li><a href="<?= $web['facebook'] ?>" class="site-button white outline circle"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?= $web['youtube'] ?>" class="site-button white outline circle"><i class="fa fa-youtube"></i></a></li>
              <li><a href="<?= $web['linkedin'] ?>" class="site-button white outline circle"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="<?= $web['instagram'] ?>" class="site-button white outline circle"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer END -->
  <button class="scroltop icon-up" type="button"><i class="fa fa-arrow-up"></i></button>
  <!-- JAVASCRIPT FILES ========================================= -->
  <script src="<?= base_url('front') ?>/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
  <script src="<?= base_url('front') ?>/plugins/wow/wow.js"></script><!-- WOW JS -->
  <script src="<?= base_url('front') ?>/plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
  <script src="<?= base_url('front') ?>/plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
  <script src="<?= base_url('front') ?>/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
  <script src="<?= base_url('front') ?>/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
  <script src="<?= base_url('front') ?>/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
  <script src="<?= base_url('front') ?>/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
  <script src="<?= base_url('front') ?>/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
  <script src="<?= base_url('front') ?>/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
  <script src="<?= base_url('front') ?>/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
  <script src="<?= base_url('front') ?>/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
  <script src="<?= base_url('front') ?>/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
  <script src="<?= base_url('front') ?>/plugins/lightgallery/js/lightgallery-all.min.js"></script><!-- Lightgallery -->
  <script src="<?= base_url('front') ?>/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
  <script src="<?= base_url('front') ?>/js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
  <script src="<?= base_url('front') ?>/plugins/countdown/jquery.countdown.js"></script><!-- COUNTDOWN FUCTIONS  -->
  <script src="<?= base_url('front') ?>/js/dz.ajax.js"></script><!-- CONTACT JS  -->
  <script src="<?= base_url('front') ?>/plugins/rangeslider/rangeslider.js"></script><!-- Rangeslider -->

  <script src="<?= base_url('front') ?>/js/jquery.lazy.min.js"></script>
  <!-- REVOLUTION JS FILES -->
  <script src="<?= base_url('front') ?>/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="<?= base_url('front') ?>/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
  <script src="<?= base_url('front') ?>/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="<?= base_url('front') ?>/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="<?= base_url('front') ?>/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="<?= base_url('front') ?>/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="<?= base_url('front') ?>/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="<?= base_url('front') ?>/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="<?= base_url('front') ?>/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="<?= base_url('front') ?>/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script src="<?= base_url('front') ?>/js/rev.slider.js"></script>
  <script>
    jQuery(document).ready(function() {
      'use strict';
      dz_rev_slider_1();
      $('.lazy').Lazy();
    }); /*ready*/
  </script>
  </div>
</body>

</html>