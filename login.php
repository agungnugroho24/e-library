<?php
// show all errors and warning
  ini_set('display_errors', 0);
  error_reporting(E_ALL);

session_start(); //kuncinya ada disini, tulis diawal script sebelum menulis yang lain
 
$server = 'localhost';
$user_db = 'root';
$password_db = '';
$nama_db = 'rila';
 
/* Koneksi database*/
mysql_connect( $server, $user_db, $password_db ) or die( mysql_error() );
mysql_select_db( $nama_db ) or die( mysql_error() );
 
/* Ambil variabel */
$no_anggota = $_REQUEST['no_anggota'];
$no_tlp = $_REQUEST['no_tlp'];
 
/* Validasi */
$error = 0;
if( empty( $no_anggota ) || empty( $no_tlp ) ) {
 echo '<br><br><br><br><br><br><h3 align="center">Please fill the column!!!<h3><br>';
 $error++;
} else {
 $sql = "select no_anggota, no_tlp from anggota where no_anggota = '$no_anggota' and no_tlp = '$no_tlp'";
 $query = mysql_query( $sql );
 $row = mysql_fetch_row( $query );
 
 
 if( empty( $row[0] ) ) {
  echo '<br><br><br><br><br><br><h3 align="center">Unknown user!!!<h3><br>';
  $error++;
 } else {
  if( $row[1] != $no_tlp ) {
  echo '<br><br><br><br><br><br><h3 align="center">Wrong password!!!<h3><br>';
  $error++;
 } else {
  /*Daftarkan ke server sbg variabel global*/
  /* session_register() Sebaiknya tdk digunakan (Deprecated Function)
  session_register( 'email', 'password' );
  */
  $_SESSION['no_anggota'] = $no_anggota;
  $_SESSION['no_tlp'] = $no_tlp;
 } //end else
 } //end else
}
 
if( $error == 0 ) {
 /* Redirect jika tidak ada error */
echo '<script language="javascript">'; 
echo 'top.location.href = "dashboard_anggota.php";'; 
echo '</script>'; 
exit();
} else {
 echo "<script>window.alert('Please Sign in or Sign Up first');
        window.location=('index.php')</script>";}
 exit();
?>