  <section class="shop_section" style="margin-bottom:20px;">
    <div class="d-flex justify-content-center mt-4">
      <h2 class="heading_style">
        Infromasi
      </h2>
    </div>
    <div class="container layout_padding2-top mb-4">
      <img src="<?=base_url('assets/index/images/informasi parkir kosong.jpg')?>" style="position: relative;z-index: 1;top: 0px;">
      <div style="position: absolute;top: 20%;left:35%;z-index: 2;color: black;text-align: center;">
      <?php 
      $i = 0;
      foreach ($area as $area => $value):
          $i++;
          $nama = $value['nama'];
          $luas = $value['luas'];
          $jenis = $value['jenis'];
          $jumlahareakosong = $value['jumlahareakosong'];
          $kapasitas = $value['kapasitas'];
      ?>
       <h2><?=$nama?></h2>
       <h3>Jumlah Area Kosong : <?=$jumlahareakosong?></h3>
      <?php endforeach;?>
      </div>
    </div>


    <div class="d-flex justify-content-center mt-3">
      <h2 class="heading_style">
        Lokasi Area A
      </h2>
    </div>
    <div class="container layout_padding2-top">
      <div class="row mt-0">
        <div class="col-md-6">
          <div id="googleMap" style="width:100%;height:380px;"></div>
        </div>

        <div class="col-md-6">
          <div class="contact_form-container pb-4" style="padding:0;">
            <img src="<?=base_url('assets/index/images/denah parkir  motor bawah.jpg')?>" alt="" class="img-fluid" style="height: 94%;width: 100%;">
          </div>
        </div>
      </div>
    </div>

     <div class="d-flex justify-content-center mt-4">
      <h2 class="heading_style">
        Lokasi Area B
      </h2>
    </div>
    <div class="container layout_padding2-top">
      <div class="row mt-0">
        <div class="col-md-6">
          <div id="googleMap1" style="width:100%;height:380px;"></div>
        </div>

        <div class="col-md-6">
          <div class="contact_form-container pb-4" style="padding:0;">
            <img src="<?=base_url('assets/index/images/denah parkir motor belakang.jpg')?>" alt="" class="img-fluid" style="height: 94%;width: 100%;">
          </div>
        </div>
      </div>
    </div>
  </section>