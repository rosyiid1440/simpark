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
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                            
                          </div>
                          <div class="card-body pt-0">
                            <div class="row">
                              <div class="col-7">
                                <h2 class="lead"><b><?=$detail['nama']?></b></h2>
                                <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: <?=$detail['alamat']?></li>
                                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: <?=$detail['nohp']?></li>
                                </ul>
                              </div>
                              <div class="col-5 text-center">
                                <img src="../../dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="text-right">
                              <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a>
                              <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> View Profile
                              </a>
                            </div>
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

  

