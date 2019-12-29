
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
                            <h3 class="card-title">Input Parkir</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?=base_url('dashboard/petugas/parkir/valid')?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                  <label>Nama / ID Pemarkir</label>
                                  <select class="form-control" name="id_pemarkir" id="select2" style="width: 100%;">
                                    <option>-- Select Pemarkir --</option>
                                        <?php foreach ($pemarkir as $pemarkir => $value):
                                            $iduser = $value['id_user'];
                                            $nama = $value['nama'];
                                            $idpemarkir = $value['id_pemarkir'];
                                        ?>
                                            <option value="<?=$iduser?>"><?=$nama?> | <?=$idpemarkir?></option>
                                        <?php endforeach;?>
                                  </select>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Nopol</label>
                                    <select class="form-control" name="nopol" id="nopol">
                                        <option>-- Select Nopol --</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Area</label>
                                    <select class="form-control" name="area" id="area">
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
    <script>
    // A $( document ).ready() block.
    $( document ).ready(function() {
        $('#select2').select2();
        $('#nopol').select2();
        $('#area').select2();

        $('#select2').on('change', function() {
          var id = $(this).val();
            $.ajax({
                url : "<?php echo base_url('dashboard/petugas/parkir/tambah/kendaraan/');?>",
                method : "POST",
                data : {id: id},
                async : true,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_kendaraan+'>'+data[i].nopol+'</option>';
                    }
                    $('#nopol').html(html);
                }
            });
        });
    });
   </script>