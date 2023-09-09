<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("update buku set status = 'Archive' where id_buku='$id'")or die(mysql_error());
header('location:books.php');
?>