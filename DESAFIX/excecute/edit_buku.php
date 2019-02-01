<?php
include "../config/koneksi.php";
$nik 	= stripslashes($_POST['nik']);
$nama  = stripslashes($_POST['nama']);
$desa     = stripslashes($_POST['desa']);
$rt     = stripslashes($_POST['rt']);
$rw     = stripslashes($_POST['rw']);
$kec  	= stripslashes($_POST['kec']);
$nokk  	= stripslashes($_POST['nokk']);
$jenis_kelamin  	= stripslashes($_POST['jenis_kelamin']);
$status 	= stripslashes($_POST['status']);
$tgl_entri  	= stripslashes($_POST['tgl_entri']);

$sql	= "UPDATE tb_warga SET nama='$nama',desa='$desa',rt='$rt',rw='$rw',kec='$kec',nokk='$nokk',jenis_kelamin='$jenis_kelamin',status='$status',tgl_entri='$tgl_entri' WHERE nik='$nik'";
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_buku'>";
}
?>