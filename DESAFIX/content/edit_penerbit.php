<?php
                            include('config/koneksi.php');
                            $get_id = $_GET['id'];
                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_penerbit WHERE id_penerbit='$get_id' limit 1");

                            // tampilkan query
                            $row=mysqli_fetch_object($result);
?>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                    <h1>
            Data Kecamatan
            <small>All Data Kecamatan</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Kecamatan</a></li>
            <li class="active">Kecamatan</li>
          </ol>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Kecamatan</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/edit_penerbit.php" method="post">
                  <div class="box-body">                    					
					<div class="form-group">
                      <label class="col-sm-2 control-label">Kecamatan</label>
                      <div class="col-sm-10">
                        <input type="text" name="nm_penerbit" value="<?php echo $row->id_pengarang;?>" required="" class="form-control" placeholder="Kecamatan">
                      </div>
                    </div>					
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="javascript:history.back()" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
