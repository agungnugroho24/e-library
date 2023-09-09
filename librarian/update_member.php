<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$no_anggota=$_POST['no_anggota'];
$nama_siswa=$_POST['nama_siswa'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$no_tlp=$_POST['no_tlp'];
$kelas=$_POST['kelas'];
$status=$_POST['status'];

mysql_query("update anggota set nama_siswa='$nama_siswa',jenis_kelamin='$jenis_kelamin',alamat='$alamat',no_tlp = '$no_tlp',kelas = '$kelas',status = '$status' where no_anggota='$no_anggota'")or die(mysql_error());
								
								
header('location:member.php');
}
?>	