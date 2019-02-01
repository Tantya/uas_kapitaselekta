<?php
                            include('config/koneksi.php');

                            $get_id = $_GET['id'];
                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_warga WHERE nik='$get_id' limit 1");

                            // tampilkan query
                            $row=mysqli_fetch_object($result);
?>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Buku
            <small>All Data Penduduk</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Data Penduduk</a></li>
            <li class="active">Data Penduduk</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Buku</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/edit_buku.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Kode penduduk</label>
                      <div class="col-sm-10">
                        <input type="text" required="" value="<?php echo $row->nik;?>" class="form-control" placeholder="NIK" disabled="">
                        <input type="hidden" name="nik" value="<?php echo $row->nik;?>" required="" class="form-control" placeholder="NIK">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" name="nama" value="<?php echo $row->nama;?>" required="" class="form-control" placeholder="nama">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Desa</label>
                      <div class="col-sm-10">
						<select class="form-control select2" name="desa">
							<option selected="selected">Pilih</option>
                            <option selected="selected">Lebak Muncang</option>
                            <option selected="selected">Batu Nunggal</option>'
                            <option selected="selected">Batu Karut</option>
                            <option selected="selected">Lebak Wangi</option>
						</select>
						</div>
					</div>
                    					<div class="form-group">
                      <label class="col-sm-2 control-label">RT</label>
                      <div class="col-sm-10">
                        <input type="text" name="rt" value="<?php echo $row->rt;?>" required="" class="form-control" placeholder="Rt">
                      </div>
                    </div>
                    					<div class="form-group">
                      <label class="col-sm-2 control-label">RW</label>
                      <div class="col-sm-10">
                        <input type="text" name="rw" value="<?php echo $row->rw;?>" required="" class="form-control" placeholder="RW">
                      </div>
                    </div><!-- /.form-group -->
					<div class="form-group">
                      <label class="col-sm-2 control-label">Kecamatan</label>
                      <div class="col-sm-10">
						<select class="form-control select2" name="kec">
							<option selected="selected">Pilih</option>
							<option selected="selected">Banjaran</option>
                            <option selected="selected">Ciwidey</option>
                            <option selected="selected">Pangalengan</option>
                            <option selected="selected">Lengkong</option>
                            <option selected="selected">Regol</option>
						</select>
						</div>
					</div><!-- /.form-group -->
					                   					<div class="form-group">
                      <label class="col-sm-2 control-label">No KK</label>
                      <div class="col-sm-10">
                        <input type="text" name="nokk" value="<?php echo $row->nokk;?>" required="" class="form-control" placeholder="nokk">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-10" >
                        <p>
                          <input type="radio" name="jenis_kelamin" id="Jenis_Kelamin" value="Laki-Laki" />
                          <label for="Jenis_Kelamin">Laki-Laki</label>
                          <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Jenis_Kelamin" />
                          <label for="Jenis_Kelamin">Perempuan</label>
                        </p>
                      </div>
                    </div>
  					<div class="form-group">
                      <label class="col-sm-2 control-label">Status Perkwinan</label>
                      <div class="col-sm-10">
						<select class="form-control select2" name="status">
                                              <option>Belum Menikah</option>
                                              <option>Menikah</option>
                                              <option>Duda</option>
                                               <option>Janda</option>
                                            </select>
                                          </p>
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