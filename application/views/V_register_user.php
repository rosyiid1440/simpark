<div class="col-md-6" style="margin:0 auto;padding-top: 10%;padding-bottom:  10%;">
  <div class="contact_form-container">
    <form action="<?=base_url('registeruser/store')?>" method="post">
      <h2>Silahkan Isi Data</h2>
      <div>
        <input type="text" name="username" id="username" placeholder="Username">
      </div>
      <div>
        <input type="password" name="password" id="password" placeholder="Password">
      </div>
      <div>
        <input type="text" name="nama" id="nama" placeholder="Nama">
      </div>
      <div>
        <textarea class="form-control" name="alamat" id="alamat" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat"></textarea>
      </div>
      <div>
        <input type="text" name="nohp" id="nohp" placeholder="No_HP">
      </div>
      <div class="d-flex justify-content-end">
        <button type="submit " class="">
          Register
        </button>
      </div>
    </form>
  </div>
</div>