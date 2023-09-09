<?php 
include('dbcon.php');

$id=$_GET['id'];
$id_buku = $_GET['id_buku'];

mysql_query("update peminjaman LEFT JOIN detil_peminjaman on peminjaman.id_peminjaman = detil_peminjaman.id_peminjaman   set status_peminjaman='returned',tgl_pengembalian= NOW() where peminjaman.id_peminjaman='$id' and detil_peminjaman.id_buku = '$id_buku'")or die(mysql_error());						
 header('location:view_borrow.php');

?>	