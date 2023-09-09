<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#fff,#ebebeb);
    background-color:#EBEBEB;
    margin: 0 auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from anggota where no_anggota='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
             <div class="alert alert-info" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#ebebeb,#00FFFF );
    background-color:#ffffff;
    margin-bottom: 10px auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);"><strong style="color:#000;"><i class="icon-pencil"></i>&nbsp;Edit anggota</strong></div>
			<p><a class="btn btn-info" href="member.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Kembali</a></p>
	<div class="addstudent">
	<div class="details">Masukan data</div>	
	<form class="form-horizontal" method="POST" action="update_member.php" enctype="multipart/form-data">
		<div class="control-group">
			<label class="control-label" for="inputEmail">No anggota:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="no_anggota" value="<?php echo $row['no_anggota']; ?>" placeholder="No anggota" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Nama siswa:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="nama_siswa" value="<?php echo $row['nama_siswa']; ?>" placeholder="Nama siswa" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Jenis kelamin:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>" placeholder="jenis kelamin" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Alamat:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="alamat" value="<?php echo $row['alamat']; ?>" placeholder="Alamat" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">No. Telp:</label>
			<div class="controls">
			<input type='tel' pattern="[0-9]{12,12}" class="search" name="no_tlp" value="<?php echo $row['no_tlp']; ?>"  placeholder="No. Telp"  autocomplete="off"  maxlength="11" >
			</div>
		</div>
<div class="control-group">
			<label class="control-label" for="inputPassword">Kelas:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="kelas" value="<?php echo $row['kelas']; ?>" placeholder="Kelas" required>
			</div>
		</div>
		
				<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
				<select name="status" required>
									<option><?php  echo $row['status']; ?></option>
									<option>Aktif</option>
									<option>Non-aktif</option>
				</select>
			</div>
		</div>
		
		
				
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>