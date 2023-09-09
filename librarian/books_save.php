<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$judul_buku=$_POST['judul_buku'];
$kategori_id=$_POST['kategori_id'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];
$jumlah_buku=$_POST['jumlah_buku'];
$sumber_buku=$_POST['sumber_buku'];
$isbn=$_POST['isbn'];
$thn_terbit=$_POST['thn_terbit'];
/* $date_receive=$_POST['date_receive']; */
/* $date_added=$_POST['date_added']; */
$status=$_POST['status'];							
mysql_query("insert into buku (judul_buku,kategori_id,pengarang,jumlah_buku,sumber_buku,penerbit,isbn,thn_terbit,tanggal_masuk,status)
 values('$judul_buku','$kategori_id','$pengarang','$jumlah_buku','$sumber_buku','$penerbit','$isbn','$thn_terbit',NOW(),'$status')")or die(mysql_error());
 
 
header('location:books.php');
}
?>	