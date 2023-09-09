<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_member.php'); ?>
    <div class="container" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#fff,#ebebeb);
    background-color:#EBEBEB;
    margin: 0 auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
 <div class="alert alert-info" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#ebebeb,#00FFFF );
    background-color:#ffffff;
    margin-bottom: 10px auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);"><strong style="color:#000;">Tambah anggota</strong></div>
			<p><a href="member.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#d7d7d7,#000066 );
    background-color:#ebebeb;
    margin-bottom: 10px auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);"><strong>Masukan detil anggota</strong></div>		
	<form class="form-horizontal" method="POST" action="member_save.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Nama siswa:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="nama_siswa"  placeholder="Nama siswa" required>

			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Jenis kelamin:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="jenis_kelamin"  placeholder="Jenis kelamin" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Alamat:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="alamat"  placeholder="Alamat" required>
			</div>
		</div>	
	<div class="control-group">
			<label class="control-label" for="inputPassword">No. Telp:</label>
			<div class="controls">
			<input type='tel' pattern="[0-9]{11,11}" class="search" name="no_tlp"  placeholder="No. Telp"  autocomplete="off"  maxlength="11" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Kelas:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="kelas"  placeholder="Kelas" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="status"  placeholder="Status" required>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Simpan</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>