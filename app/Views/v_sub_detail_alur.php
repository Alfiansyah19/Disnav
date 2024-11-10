    <div class="page-content bg-white">
      <!-- inner page banner -->
      <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(<?= base_url('gambar/banner.jpg') ?>);">
        <div class="container">
          <div class="dlab-bnr-inr-entry">
            <h1 class="text-white"><?= $judul ?></h1>
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
                        <h5 class="dlab-tilte"><a href="<?= base_url('alur/sub_detail_perlintasan/' . $alur['id_wilayah']) ?>">Alur Perlintasan</a></h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box-ho">
                      <div class="icon-sm m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-ruler-pencil"></i></a> </div>
                      <div class="icon-content">
                        <h5 class="dlab-tilte"><a href="<?= base_url('alur/sub_detail_pelabuhan/' . $alur['id_wilayah']) ?>">Alur Masuk Pelabuhan</a></h5>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- icon box style 1 aligh center END -->