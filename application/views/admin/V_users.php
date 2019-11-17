  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Area Parkir</h1>
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
                      <h4>User</h4>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 169.35px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">#</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 219.55px;" aria-label="Browser: activate to sort column ascending">Username</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Password</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Level</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="3" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Aksi</th>
                                                <th style="display: none"></th> 
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="isi">
                                            <?php 
                                            $i = 0;
                                            foreach ($user as $user => $value):
                                                $i++;
                                                $id = $value['id_user'];
                                                $username = $value['username'];
                                                $password = $value['password'];
                                                $level = $value['level'];
                                            ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?=$i?></td>
                                                <td><?=$username?></td>
                                                <td><?=$password?></td>
                                                <td><?=$level?></td>
                                                <td>
                                                  <a href="<?=base_url('dashboard/user/hapus/'.$id)?>" class="btn btn-success btn-sm">Detail</a>
                                                </td>
                                                <td>
                                                  <a href="<?=base_url('dashboard/user/edit/'.$id)?>" class="btn btn-primary btn-sm">Edit</a>
                                                </td>
                                                <td>
                                                  <a href="<?=base_url('dashboard/user/hapus/'.$id)?>" class="btn btn-danger btn-sm">Hapus</a>
                                                </td>
                                                <td style="display: none"></td>
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


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h4>Admin</h4>
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
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 219.55px;" aria-label="Browser: activate to sort column ascending">Username</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Password</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Level</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="2" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Aksi</th>
                                                <th style="display: none"></th> 
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="isi">
                                            <?php 
                                            $i = 0;
                                            foreach ($admin as $admin => $value):
                                                $i++;
                                                $id = $value['id_user'];
                                                $username = $value['username'];
                                                $password = $value['password'];
                                                $level = $value['level'];
                                            ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?=$i?></td>
                                                <td><?=$username?></td>
                                                <td><?=$password?></td>
                                                <td><?=$level?></td>
                                                <td>
                                                  <a href="<?=base_url('dashboard/user/edit/'.$id)?>" class="btn btn-primary btn-sm">Edit</a>
                                                </td>
                                                <td>
                                                  <a href="<?=base_url('dashboard/user/hapus/'.$id)?>" class="btn btn-danger btn-sm">Hapus</a>
                                                </td>
                                                <td style="display: none"></td>
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

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h4>Petugas</h4>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example3" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 169.35px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">#</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 219.55px;" aria-label="Browser: activate to sort column ascending">Username</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Password</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Level</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="2" style="width: 194.233px;" aria-label="Platform(s): activate to sort column ascending">Aksi</th>
                                                <th style="display: none"></th> 
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="isi">
                                            <?php 
                                            $i = 0;
                                            foreach ($petugas as $petugas => $value):
                                                $i++;
                                                $id = $value['id_user'];
                                                $username = $value['username'];
                                                $password = $value['password'];
                                                $level = $value['level'];
                                            ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?=$i?></td>
                                                <td><?=$username?></td>
                                                <td><?=$password?></td>
                                                <td><?=$level?></td>
                                                <td>
                                                  <a href="<?=base_url('dashboard/user/edit/'.$id)?>" class="btn btn-primary btn-sm">Edit</a>
                                                </td>
                                                <td>
                                                  <a href="<?=base_url('dashboard/user/hapus/'.$id)?>" class="btn btn-danger btn-sm">Hapus</a>
                                                </td>
                                                <td style="display: none"></td>
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
  $("#example3").DataTable();
  $("#example1").DataTable();
  $("#example2").DataTable();
  
  </script>

  

