<?php
include "config/koneksi.php";
$sql=mysqli_query($connect,"SELECT * FROM tb_anggota order by id_anggota DESC LIMIT 0,1");
 $data=mysqli_fetch_array($sql);
 $kodeawal=substr($data['id_anggota'],1,4)+1;
 if($kodeawal<10){
  $kode='A00'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='A0'.$kodeawal;
 }else{
  $kode='A'.$kodeawal;
 }
 ?>
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
           <h1>
            Data Pegawai
            <small>Semua Data Pegawai</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Pegawai</a></li>
            <li class="active">Data Pegawai</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Pegawai</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/save_anggota.php" method="post">
                  <div class="box-body">                    
					<div class="form-group">
                      <label class="col-sm-2 control-label">ID Pegawai</label>
                      <div class="col-sm-10">
                        <input type="text" required="" value="<?php echo $kode;?>" class="form-control" placeholder="ID Anggota" disabled="">
                        <input type="hidden" name="id_anggota" value="<?php echo $kode;?>" required="" class="form-control" placeholder="ID Anggota">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Nama Pegawai</label>
                      <div class="col-sm-10">
                        <input type="text" name="nm_anggota" required="" class="form-control" placeholder="Nama Anggota">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">NRP</label>
                      <div class="col-sm-10">
                       <input type="text" name="nrp" required="" class="form-control" placeholder="nrp">
                      </div>
                    </div>
                    					<div class="form-group">
                      <label class="col-sm-2 control-label">CC</label>
                      <div class="col-sm-10">
                        <input type="text" name="cc" required="" class="form-control" placeholder="CC">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
						<select class="form-control select2" name="jenis_kelamin">
							<option selected="selected">Laki-Laki</option>
							<option>Perempuan</option>
						</select>
						</div>
					</div><!-- /.form-group -->
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
