<?php
include "../config/koneksi.php";
$id_anggota 	= stripslashes($_POST['id_anggota']);
$nm_anggota  		= stripslashes($_POST['nm_anggota']);
$nrp     		= stripslashes($_POST['nrp']);
$jenis_kelamin     		= stripslashes($_POST['jenis_kelamin']);
$cc     		= stripslashes($_POST['cc']);

$sql	= "UPDATE tb_anggota SET nm_anggota='$nm_anggota',jenis_kelamin='$jenis_kelamin',nrp='$nrp',cc='$cc' WHERE id_anggota='$id_anggota'";
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_anggota'>";
}
?>