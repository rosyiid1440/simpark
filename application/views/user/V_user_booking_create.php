
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
                            <h3 class="card-title">Booking Parkir</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?=base_url('dashboard/pemarkir/booking/valid')?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nopol Kendaraan</label>
                                    <select class="form-control" name="kendaraan">
                                        <?php foreach ($kendaraan as $kendaraan => $value):
                                            $id_kendaraan = $value['id_kendaraan'];
                                            $nopol = $value['nopol'];
                                        ?>
                                            <option value="<?=$id_kendaraan?>"><?=$nopol?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Area</label>
                                    <select class="form-control" name="area">
                                        <?php foreach ($area as $area => $value):
                                            $id_area = $value['id_area'];
                                            $area = $value['nama'];
                                            $kosong = $value['jumlahareakosong'];
                                        ?>
                                            <option value="<?=$id_area?>"><?=$area?> | kosong : <?=$kosong?></option>
                                        <?php endforeach;?>
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