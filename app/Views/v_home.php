<!-- Slider -->
<div class="content-block">
  <!-- <div class="sort-title clearfix text-center">
    <h4>Pembangunan Kenavigasian Wilayah Timur</h4>
  </div> -->
  <!-- content start -->
  <div class="section-content box-sort-in m-b30 button-example">
    <div class=" owl-loaded  owl-carousel ">
      <?php foreach ($slider as $key => $value) { ?>
        <div class="item overlay-black-middle">
          <div class="dlab-thum-bx">
            <img src="<?= base_url('gambar/' . $value['gambar_slider']) ?>" alt="">
            <div class="carousel-caption d-none d-md-block" style="position:absolute; width: 600px; top: 200px; left: 400px; color: #ffff;">
              <h1 class=" text-white" ;"><b><?= $value['judul_slider'] ?></b></h1>
            </div>
          </div>
        </div>
      <?php }  ?>
    </div>
  </div>
</div>

<!-- Daftar Wilayah -->
<div class="section-full bg-white content-inner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="sort-title clearfix section-head text-black text-center">
          <h2 class="title">Daftar Wilayah Distrik Navigasi Timur</h2>
        </div>
      </div>
      <!-- icon box style 1 aligh center -->
      <?php foreach ($wilayah as $key => $value) { ?>
        <div class="col-lg-4 col-md-6 col-sm-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
          <div class="dlab-box service-box-2">
            <div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect rotate">
              <a href="javascript:void(0);"><img src="<?= base_url('gambar/' . $value['gambar_wilayah']) ?>" alt=""></a>
            </div>
            <div class="dlab-info">
              <h4 class="title"><a href="#"></a><?= $value['nama_wilayah'] ?></h4>
              <a href="<?= base_url('Wilayah/detail/' . $value['id_wilayah']) ?>" class="site-button btnhover14 btn-tb">Learn More</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>