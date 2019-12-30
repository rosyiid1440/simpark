  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
          <!-- /.col -->
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
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cpu"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><?=$jenis?> <?=$nama?></span>
                  <span class="info-box-number">Jumlah kosong <?= $jumlahareakosong?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->     
          <?php endforeach;?>     
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">History Parkir</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-sm-12">
                      <table id="example2" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                          <tr role="row">
                              <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 169.35px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">#</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Nama</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">nama Area</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Nomor Polisi</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 219.55px;" aria-label="Browser: activate to sort column ascending">Jenis Kendaraan</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Tanggal</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Status</th>
                              
                          </tr>
                        </thead>
                        <tbody id="isi">
                            <?php 
                            $i = 0;
                            foreach ($parkir as $parkir => $value):
                                $i++;
                                $id = $value['id'];
                                $nama = $value['nama_pemarkir'];
                                $nama_area = $value['nama_area'];
                                $nopol = $value['nopol'];
                                $jenis_kendaraan = $value['jenis_kendaraan'];
                                $tanggal = $value['tanggal'];
                                $status = $value['status'];
                            ?>
                            <tr role="row" class="odd">
                                <td class="sorting_1"><?=$i?></td>
                                <td><?=$nama?></td>
                                <td><?=$nama_area?></td>
                                <td><?=$nopol?></td>
                                <td><?=$jenis_kendaraan?></td>
                                <td><?=$tanggal?></td>
                                <td><?=$status?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
  $("#example2").DataTable();
  
  </script>

  