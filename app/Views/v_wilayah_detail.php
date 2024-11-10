    <div class="page-content bg-white">
      <!-- inner page banner -->
      <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(<?= base_url('gambar/banner.jpg') ?>);">
        <div class="container">
          <div class="dlab-bnr-inr-entry">
            <h1 class="text-white"><?= $wilayah['nama_wilayah'] ?></h1>
          </div>
        </div>
      </div>
      <!-- inner page banner END -->

      <div class="section-full bg-white content-inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="sort-title clearfix text-center">
                <h4>Bagian</h4>
              </div>
              <!-- icon box style 1 aligh center -->
              <div class="section-content box-sort-in button-example p-b0">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box-ho">
                      <div class="icon-sm m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-pulse"></i></a> </div>
                      <div class="icon-content">
                        <h5 class="dlab-tilte"><a href="<?= base_url('wilayah/sub_detail_alur/' . $wilayah['id_wilayah']) ?>">Pembangunan Alur Pelayanan & Perlintasan</a></h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box-ho">
                      <div class="icon-sm m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-ruler-pencil"></i></a> </div>
                      <div class="icon-content">
                        <h5 class="dlab-tilte"><a href="<?= base_url('wilayah/sub_detail_sarana/' . $wilayah['id_wilayah']) ?>">Sarana Bantu Navigasi Pelayanan</a></h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box-ho">
                      <div class="icon-sm m-b20"> <a href="javascript:void(0);" class="icon-cell text-primary"><i class="ti-desktop"></i></a> </div>
                      <div class="icon-content">
                        <h5 class="dlab-tilte"><a href="<?= base_url('wilayah/sub_detail_telekom/' . $wilayah['id_wilayah']) ?>">Pembangunan Telekomunikasi Pelayaran</a></h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box">
                      <div class="icon-sm m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-headphone-alt"></i></a> </div>
                      <div class="icon-content">
                        <h5 class="dlab-tilte"><a href="<?= base_url('wilayah/sub_detail_armada/'. $wilayah['id_wilayah'])?>">Armada Kapal Negara Kenavigasian</a></h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box">
                      <div class="icon-sm m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-ruler-pencil"></i></a> </div>
                      <div class="icon-content">
                        <h5 class="dlab-tilte"><a href="<?= base_url('wilayah/sub_detail_sdm/'. $wilayah['id_wilayah'])?>">Sumber Daya Manusia</a></h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box">
                      <div class="icon-sm m-b20"> <a href="javascript:void(0);" class="icon-cell text-primary"><i class="ti-desktop"></i></a> </div>
                      <div class="icon-content">
                        <h5 class="dlab-tilte"><a href="<?= base_url('wilayah/sub_detail_fasilitas/' . $wilayah['id_wilayah'])?>">Fasilitas Penunjang</a></h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end -->
            </div>
          </div>
        </div>
        <!-- icon box style 1 aligh center END -->