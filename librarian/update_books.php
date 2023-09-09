<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id_buku=$_POST['id_buku'];
$judul_buku=$_POST['judul_buku'];
$kategori_id=$_POST['kategori_id'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];
$jumlah_buku=$_POST['jumlah_buku'];
$sumber_buku=$_POST['sumber_buku'];
$isbn=$_POST['isbn'];
$thn_terbit=$_POST['thn_terbit'];
$tanggal_masuk=$_POST['tanggal_masuk'];
$status=$_POST['status'];




mysql_query("update buku set judul_buku='$judul_buku',kategori_id='$kategori_id',pengarang='$pengarang',penerbit = '$penerbit',jumlah_buku = '$jumlah_buku',sumber_buku = '$sumber_buku',isbn = '$isbn',thn_terbit='$thn_terbit',tanggal_masuk='$tanggal_masuk',status='$status' where id_buku='$id_buku'")or die(mysql_error());
								
								
 header('location:books.php');
}
?>	