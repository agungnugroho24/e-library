<?php
 session_start(); 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['no_anggota']) || (trim($_SESSION['no_anggota']) == '')) { ?>
<script>
window.location = "anggota.php";
</script>
<?php
}
$session_id=$_SESSION['no_anggota'];

$user_query = mysql_query("select * from anggota where no_anggota = '$session_id'")or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
$user_username = $user_row['no_anggota'];
?>