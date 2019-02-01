<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Laporan
            <small>Semua Data Laporan</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Laporan</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Warga</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/excel_buku.php" method="post">
				<div class="box-body">
					<div class="callout callout-info">
					<h4>Data Warga Report Excel!</h4>
					<p>Seluruh Data warga.</p>
                    <input type="date" name="date" class="form-control" placeholder="date">
					</div>
				</div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-center">EXPORT</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
			<div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Pelayanan</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="#" method="post">
				<div class="box-body">
					<div class="callout callout-danger">
					<h4>Data Pelayanan Report Excel!</h4>
					<p>Seluruh Data Pelayanan</p>
					</div>
				</div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-danger pull-center">EXPORT</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
			</div>
			<div class="row">
			<div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Pengajuan Dokumen</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="#" method="post">
				<div class="box-body">
					<div class="callout callout-warning">
					<h4>Pengajuan Dokumen Report Excel!</h4>
					<p>Seluruh Data Pengajuan Dokumen.</p>
					</div>
				</div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-warning pull-center">EXPORT</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
			<div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Dokumen Selesai</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="#" method="post">
				<div class="box-body">
					<div class="callout callout-success">
					<h4>dokumen selesai Report Excel!</h4>
					<p>Seluruh Data dokumen selesai.</p>
					</div>
				</div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-center">EXPORT</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->