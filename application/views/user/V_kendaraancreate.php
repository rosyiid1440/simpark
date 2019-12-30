
  <!-- Content Wrapper. Contains page content -->
  <section class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kendaraan</h1>
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
                            <h3 class="card-title">Tambah Kendaraan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?=base_url('dashboard/pemarkir/kendaraan/valid')?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nopol</label>
                                    <input type="text" name="nopol" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kendaraan</label>
                                    <select class="form-control" name="jenis">
                                    <option value="Motor">Motor</option>
                                    <option value="Mobil">Mobil</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control" name="type">
                                    <option value="Manual">Manual</option>
                                    <option value="Matic">Matic</option>
                                    </select>
                                </div>
                            </div>
                        <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>