  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Booking</h1>
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
                <div class="card">
                    <div class="card-header">
                      <h4>Kendaraan</h4>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <a href="<?=base_url('dashboard/pemarkir/booking/tambah')?>"><button class="btn btn-primary mb-3">(+) Booking Parkir</button></a>
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 169.35px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">#</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Nomer Polisi</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Jenis Kendaraan</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Area</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Tanggal</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 219.55px;" aria-label="Browser: activate to sort column ascending">Status</th>
                                              </tr>
                                        </thead>
                                        <tbody id="isi">
                                            <?php 
                                            $i = 0;
                                            foreach ($booking as $booking => $value):
                                                $i++;
                                                $id = $value['id'];
                                                $nopol = $value['nopol'];
                                                $jenis_kendaraan = $value['jenis_kendaraan'];
                                                $area = $value['nama_area'];
                                                $tanggal = $value['tanggal'];
                                                $status = $value['status'];
                                            ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?=$i?></td>
                                                <td><?=$nopol?></td>
                                                <td><?=$jenis_kendaraan?></td>
                                                <td><?=$area?></td>
                                                <td><?=$tanggal?></td>
                                                <td> 
                                                  <?php
                                                    if($status=='Booking'){
                                                      echo '<a href="'.base_url('dashboard/user/cetak/'.$id).'" class="btn btn-primary btn-xs">Cetak Karcis</a>';
                                                    }else{
                                                      echo $status;
                                                    }
                                                  ?>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->


                    
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

  

