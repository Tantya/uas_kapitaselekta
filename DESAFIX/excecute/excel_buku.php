<?php

$date = $_POST['date'];
                      
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=buku.xls");
 
// memanggil query dari database

                            include('../config/koneksi.php');

                            $result = mysqli_query($connect, "SELECT * FROM tb_warga where date(tgl_entri)='$date'");
        
            ?>
            ?>
      
 
    <h3 align="center">Laporan Data Penduduk</h3>  
    <h4 align="center">Laporan Harian.<?php echo date("D-d/m/Y") ?></h4> 
         
        <table width="300" border="2"> 
            <tbody>
            <tr>
                         <th scope="col" align="center" width="100" height="50">Nik</th>
                        <th scope="col" align="center" width="100" height="50">Nama</th>
                        <th scope="col" align="center" width="100" height="50">Desa</th>
                        <th scope="col" align="center" width="50" height="50">RT</th>
                        <th scope="col" align="center" width="50" height="50">RW</th>
                        <th scope="col" align="center" width="100" height="50">Kecamatan</th>
                        <th scope="col" align="center" width="100" height="50">NO KK</th>
                        <th scope="col" align="center" width="100" height="50">Jenis kelamin</th>
                        <th scope="col" align="center" width="100" height="50">Status Pernikahan</th>
                      </tr>     
        </tbody>

        </div>
    </div>
</div>
   <?php

                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
                      <tr>
					    <td scope="col" align="center"><?php echo $row['nik'];?></td>
                        <td scope="col" align="center"><?php echo $row['nama'];?></td>
                        <td scope="col" align="center"><?php echo $row['desa'];?></td>
                        <td scope="col" align="center"><?php echo $row['rt'];?></td>
                        <td scope="col" align="center"><?php echo $row['rw'];?></td>
                        <td scope="col" align="center"><?php echo $row['kec'];?></td>
                        <td scope="col" align="center"><?php echo $row['nokk'];?></td>
                        <td scope="col" align="center"><?php echo $row['jenis_kelamin'];?></td>
                        <td scope="col" align="center"><?php echo $row['status'];?></td>
                      </tr>
                      <?php } ?>                            
                        </table>       
