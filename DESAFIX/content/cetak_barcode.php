      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Buku
            <small>All Data Buku</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Buku</a></li>
            <li class="active">Data Buku</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Buku</h3>
                </div><!-- /.box-header -
            $query = mysqli_query($koneksi, "SELECT * FROM perpus_ceres WHERE kd_buku='$_GET[kd_buku]'");
            $data  = mysqli_fetch_array($query);
            ?>
            
                 <div class="print-area table-responsif" id="print-area-2">
                <table id="example" class="table table-hover table-bordered">
                      <tr>
                      <td><center><?php echo $data['no_rak']; ?></center>                  
                      </tr>
                      <tr>
                      <td><center><img style="margin-top: 5px;" alt="<?php $data['kd_buku'];?>" src="<?php echo "barcode.php?size=60&text=$_GET[kd_buku]&print=true"; ?>" /></center>                  
                      </tr>
                      <tr>
                      <td><center><?php echo $data['judul_buku']; ?></center>                  
                      </tr>
                      <tr>
                      <td><center><?php echo $data['jabatan']; ?></center>                  
                      </tr>
                      
                      </table>
                    
  </div>
   <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
   
    <div class="text-right">
                  <a href="javascript:printDiv('print-area-2');" class="btn btn-sm btn-danger" >Cetak  <i class="fa fa-print"></i></a>
                
            </div>
                        
                </div>
      		  </div>