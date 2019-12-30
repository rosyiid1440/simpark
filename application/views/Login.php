  <div class="col-md-6" style="margin:0 auto;padding-top: 10%;padding-bottom:  10%;">
    <div class="contact_form-container">
      <form action="<?= base_url('irr/auth')?>" method="post">
        <h2>Silahkan Login</h2>
        <div>
          <input type="text" name="username" id="name" placeholder="Userame">
        </div>
        <div>
          <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div class="d-flex justify-content-end">
          <button type="submit " class="">
            Login
          </button>
        </div>
      </form>
    </div>
  </div>