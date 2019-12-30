  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Detail User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->

        
        <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?=base_url('dashboard/pemarkir/profile/update')?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?=$user['nama']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" value="<?=$user['alamat']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No hp</label>
                                    <input type="text" name="nohp" class="form-control" id="exampleInputEmail1" value="<?=$user['nohp']?>">
                                </div>
                            </div>
                        <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?=base_url('dashboard')?>" class="btn btn-success">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
      </div>
    </section>