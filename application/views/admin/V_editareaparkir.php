

  <!-- Content Wrapper. Contains page content -->
  <section class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
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
                            <h3 class="card-title">Edit Area Parkir</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?=base_url('dashboard/areaparkir/update/'.$b['id_area'])?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lokasi</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?php echo $b['nama']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Luas Lokasi</label>
                                    <input type="text" name="luas" class="form-control" id="exampleInputEmail1" value="<?=$b['luas']?>">
                                </div>
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <select class="form-control" name="jenis">
                                    <option value="Motor"<?php if ($b['jenis'] == 'Motor') echo ' selected="selected"'; ?>>Motor</option>
                                    <option value="Mobil"<?php if ($b['jenis'] == 'Mobil') echo ' selected="selected"'; ?>>Mobil</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jml Area Kosong</label>
                                    <input type="text" name="jumlahareakosong" class="form-control" id="exampleInputEmail1" value="<?=$b['jumlahareakosong']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kapasitas</label>
                                    <input type="text" name="kapasitas" class="form-control" id="exampleInputEmail1" value="<?=$b['kapasitas']?>">
                                </div>
                            </div>
                        <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?=base_url('dashboard/areaparkir')?>" class="btn btn-success">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>