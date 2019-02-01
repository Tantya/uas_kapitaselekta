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
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Pegawai</h3>
                  <a href="?page=add_anggota"  class="btn btn-info pull-right">Tambah Data</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Kode Pegawai</th>
                        <th>Nama Pegawai</th>
                        <th>Jenis Kelamin</th>
                        <th>NRP</th>
                        <th>CC</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_anggota ORDER BY nm_anggota ASC");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
                      <tr>
                        <td><?php echo $row['id_anggota'];?></td>
                        <td><?php echo $row['nm_anggota'];?></td>
                        <td><?php echo $row['jenis_kelamin'];?></td>
                        <td><?php echo $row['nrp'];?></td>
                        <td><?php echo $row['cc'];?></td>
                        <td><a href="admin.php?page=edit_anggota&id=<?php echo $row['id_anggota'];?>">
                            <span class="label label-success">Edit</span>
                            </a>
                            <a onclick="return confirm('Are You Sure  ?')" href="excecute/delete.php?dlt=dlanggota&id=<?php echo $row['id_anggota'];?>">
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