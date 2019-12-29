<div class="col-md-6" style="margin:0 auto;padding-top: 10%;padding-bottom:  10%;">
  <div class="contact_form-container">
    <form action="<?=base_url('registerkendaraan/store')?>" method="post">
      <h2>Silahkan Isi Data</h2>
      <div>
        <input type="text" name="nopol" placeholder="Nomor Polisi">
      </div>
      <div>
        <select class="form-control" name="jenis_kendaraan">
            <option>Jenis Kendaraan</option>
            <option>Motor</option>
            <option>Mobil</option>
        </select>
      </div>
      <div>
        <select class="form-control" name="type">
            <option>Type Kendaraan</option>
            <option>Matic</option>
            <option>Bebek</option>
            <option>Laki</option>
        </select>
      </div>
      <div class="d-flex justify-content-end">
        <button type="submit " class="">
          Send
        </button>
      </div>
    </form>
  </div>
</div>