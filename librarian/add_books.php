<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
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
	box-shadow:0 1px 3px rgba(0,0,0,.5);"><strong style="color:#000;">Tambah buku</strong></div>
			<p><a href="books.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#d7d7d7,#000066 );
    background-color:#ebebeb;
    margin-bottom: 10px auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);"><strong>Masukan detil buku</strong></div>		
	<form class="form-horizontal" method="POST" action="books_save.php" enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Judul buku:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="judul_buku"  placeholder="Judul buku" required>
			</div>
		</div>
		
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Kategori</label>
			<div class="controls">
			<select name="kategori_id">
			<option></option>
			<?php
			$cat_query = mysql_query("select * from kategori");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
			<option value="<?php echo $cat_row['kategori_id']; ?>"><?php echo $cat_row['nama_kategori']; ?></option>
			<?php  } ?>
			</select>
		</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Pengarang:</label>
			<div class="controls">
	<input type="text"  class="span4" id="inputPassword" name="pengarang"  placeholder="Pengarang" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Penerbit:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="penerbit"  placeholder="Penerbit" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="iionputPassword">Jumlah buku:</label>
			<div class="controls">
			<input type="text" class="span1" id="inputPassword" name="jumlah_buku"  placeholder="Jumlah" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Publikasi buku:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="sumber_buku"  placeholder="Publikasi buku" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Isbn:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="isbn"  placeholder="ISBN" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tahun cetak:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="thn_terbit"  placeholder="Tahun cetak" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
			<select name="status" required>
				<option></option>
				<option>Baru</option>
				<option>Lama</option>
				<option>Hilang</option>
				<option>Rusak</option>
				<option>Perlu penggantian</option>
			</select>
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