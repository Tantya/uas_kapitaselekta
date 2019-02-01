<?php
include "config/koneksi.php";
 ?>
 <!-- Content Wrapper. Contains page content -->
 <script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
 </script>
 
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
                  <h3 class="box-title">Tambah Data Penduduk</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/save_buku.php" method="post">
                  <div class="box-body">
					<div class="form-group">
                      <label class="col-sm-2 control-label">NIK</label>
                      <div class="col-sm-10">
                        <input type="text" name="nik" required="" class="form-control" placeholder="NIK">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" name="nama" required="" class="form-control" placeholder="Nama">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Desa</label>
                      <div class="col-sm-10">
						<select class="form-control select2" name="desa">
							<option selected="selected">Pilih</option>
                            <option selected="selected">Batukarut</option>
                            <option selected="selected">Ancolmekar</option>'
                            <option selected="selected">Andir</option>
                            <option selected="selected">Lebak Wangi</option>
						</select>
						</div>
					</div><!-- /.form-group -->
                    
                    
                    <div class="form-group">
                      <label class="col-sm-2 control-label">RT</label>
                      <div class="col-sm-10">
                        <input type="text" name="rt" required="" class="form-control" placeholder="Masukan RT">
                      </div>
                    </div>
                    
                                        
                    <div class="form-group">
                      <label class="col-sm-2 control-label">RW</label>
                      <div class="col-sm-10">
                        <input type="text" name="rw" required="" class="form-control" placeholder="Masukan RW">
                      </div>
                    </div>
                    
                    
					<div class="form-group">
                      <label class="col-sm-2 control-label">Kecamatan</label>
                      <div class="col-sm-10">
						<select class="form-control select2" name="kec">
							<option selected="selected">Pilih</option>
							<option selected="selected">Arjasari</option>
                            <option selected="selected">Baleendah</option>
                            <option selected="selected">Banjaran</option>
                            <option selected="selected">Bojongsoang</option>
                            <option selected="selected">Cangkuang</option>
                            <option selected="selected">Cicalengka</option>
                            <option selected="selected">Cikancung</option>
                            <option selected="selected">Cileunyi</option>
						</select>
						</div>
					</div><!-- /.form-group -->
					<div class="form-group">
                      <label class="col-sm-2 control-label">No KK</label>
                      <div class="col-sm-10">
                        <input type="text" name="nokk" required="" class="form-control" placeholder="No_KK">
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
                  
                  					<div class="form-group">
                      <label class="col-sm-2 control-label">Tgl_entri</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control" name="tgl_entri" value="<?php echo date("Y-m-d");?>" readonly/>
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