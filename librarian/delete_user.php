<?php
include('dbcon.php');

$id=$_GET['id'];

mysql_query("delete from pengguna where id_pengguna='$id'") or die(mysql_error());

header('location:users.php');
?>