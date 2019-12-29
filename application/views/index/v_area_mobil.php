<section class="shop_section">
    <div class="d-flex justify-content-center mt-4">
      <h2 class="heading_style">
        Infromasi
      </h2>
    </div>
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
    <div class="container layout_padding2-top mb-4">
      <div class="thumbnail">
        <img src="<?=base_url('assets/index/images/informasi parkir kosong.jpg')?>">
        <div class="caption">
          <h2><?=$nama?></h2>
          <h3>Jumlah Area Kosong : <?=$jumlahareakosong?></h3>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
      <h2 class="heading_style">
        <?=$nama?>
      </h2>
    </div>
    <div class="container layout_padding2-top mb-4">
      <div class="row mt-0">
        <div class="col-md-6">
          <div id="googleMap2" style="width:100%;height:380px;"></div>
        </div>

        <div class="col-md-6">
          <div class="contact_form-container pb-4" style="padding:0;">
            <img src="<?=base_url('assets/index/images/denah parkir  mobil belakang.jpg')?>" alt="" class="img-fluid" style="height: 94%;width: 100%;">
          </div>
        </div>
      </div>
    </div>
    <?php endforeach;?>
  </section>