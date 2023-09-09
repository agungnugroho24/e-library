<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("delete from anggota where no_anggota='$id'") or die(mysql_error());
header('location:member.php');
?>