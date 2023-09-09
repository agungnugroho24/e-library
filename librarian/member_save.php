<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$nama_siswa=$_POST['nama_siswa'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$no_tlp=$_POST['no_tlp'];
$kelas=$_POST['kelas'];
$status=$_POST['status'];



								
mysql_query("insert into anggota(nama_siswa,jenis_kelamin,alamat,no_tlp,kelas,status) values('$nama_siswa','$jenis_kelamin','$alamat','$no_tlp','$kelas','$status')")or die(mysql_error());
 
 
header('location:member.php');
}
?>	