

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
                        <form role="form" action="<?=base_url('dashboard/user/update/'.$b['id_user'])?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" value="<?php echo $b['username']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputEmail1" value="<?=$b['password']?>">
                                </div>
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <select class="form-control" name="level">
                                      <?php if ( $b['level'] === 'admin' ) : ?>
                                        <option value="admin"<?php if ($b['level'] == 'admin') echo ' selected="selected"'; ?>>Admin</option>
                                      <?php elseif ( $b['level'] == 'petugas') : ?>
                                        <option value="petugas"<?php if ($b['level'] == 'petugas') echo ' selected="selected"'; ?>>Petugas</option>
                                      <?php else : ?>
                                        <option value="user"<?php if ($b['level'] == 'user') echo ' selected="selected"'; ?>>User</option>
                                      <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?php echo $b['nama']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" value="<?=$b['alamat']?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No Hp</label>
                                    <input type="text" name="nohp" class="form-control" id="exampleInputEmail1" value="<?php echo $b['nohp']?>">
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