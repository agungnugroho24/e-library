	<?php
 	include('dbcon.php');
	
	$id=$_POST['selector'];
	$no_anggota = $_POST['nama_siswa'];
	$tgl_transaksi  = $_POST['tgl_transaksi'];

	if ($id == '' ){ 
	header("location: borrow.php");
	?>
	

	<?php }else{
	


	mysql_query("insert into peminjaman (no_anggota,tgl_peminjaman,tgl_transaksi) values ('$no_anggota',NOW(),'$tgl_transaksi')")or die(mysql_error());
	$query = mysql_query("select * from peminjaman order by id_peminjaman DESC")or die(mysql_error());
	$row = mysql_fetch_array($query);
	$id_peminjaman  = $row['id_peminjaman']; 
	

$N = count($id);
for($i=0; $i < $N; $i++)
{
	 mysql_query("insert detil_peminjaman (id_buku,id_peminjaman,status_peminjaman) values('$id[$i]','$id_peminjaman','pending')")or die(mysql_error());

}
header("location: borrow.php");
}  
?>
	
	

	
	