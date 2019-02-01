      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Penduduk
           
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
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Penduduk</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Desa</th>
                        <th>Rt</th>
                        <th>Rw</th>
                        <th>Kecamatan</th>
                        <th>NO KK</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('config/koneksi.php');

                       // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_warga ORDER BY nik ASC");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
                      <tr>
                        <td><?php echo $row['nik'];?></td>
                        <td><?php echo $row['nama'];?></td>
                        <td><?php echo $row['desa'];?></td>
                        <td><?php echo $row['rt'];?></td>
                        <td><?php echo $row['rw'];?></td>
                        <td><?php echo $row['kec'];?></td>
                        <td><?php echo $row['nokk'];?></td>
                        <td><?php echo $row['jenis_kelamin'];?></td>
                        <td><?php echo $row['status'];?></td>
                        <td><a href="admin.php?page=edit_buku&id=<?php echo $row['nik'];?>">
                            <span class="label label-success">Edit</span>
                            </a>
                            <a onclick="return confirm('Are You Sure  ?')" href="excecute/delete.php?dlt=dlbuku&id=<?php echo $row['nik'];?>">
                            <span class="label label-danger">Hapus</span>
                            </a>                      
                        </td>
                      </tr>
                      <?php } ?>                                            
                    </tbody>                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->