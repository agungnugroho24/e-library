<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Tambah anggota</div>
			<p><a href="students.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Masukan detil anggota</div>		
	<form class="form-horizontal" method="POST" action="student_save.php" enctype="multipart/form-data">
			
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
			<input type="text" id="inputPassword" name="alamat"  placeholder="Gender" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">No. Telp:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="no_tlp"  placeholder="No. Telp" required>
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
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>