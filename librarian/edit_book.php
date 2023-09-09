<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
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
		$query=mysql_query("select * from buku LEFT JOIN kategori on kategori.kategori_id  = buku.kategori_id where id_buku='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		$kategori_id = $row['kategori_id'];
		?>
             <div class="alert alert-info" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#ebebeb,#00FFFF );
    background-color:#ffffff;
    margin-bottom: 10px auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);"><i class="icon-pencil" style="color:#000;"></i><strong style="color:#000;">&nbsp;Edit buku</div>
			<p><a class="btn btn-info" href="books.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Kembali</a></p>
	<div class="addstudent">
	<div class="details">Masukan data</div>	
	<form class="form-horizontal" method="POST" action="update_books.php" enctype="multipart/form-data">
		<div class="control-group">
			<label class="control-label" for="inputEmail">Id buku:</label>
			<div class="controls">
			<input type="text" class="span4" name="id_buku" value="<?php echo $row['id_buku']; ?>" placeholder="id buku" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Judul buku:</label>
			<div class="controls">
			<input type="text" class="span4" name="judul_buku" value="<?php echo $row['judul_buku']; ?>" placeholder="judul buku" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Kategori:</label>
			<div class="controls">
			<select name="kategori_id">
				<option value="<?php echo $kategori_id; ?>"><?php echo $row['kategori_id']; ?></option>
				<?php $query1 = mysql_query("select * from kategori where kategori_id != '$kategori_id'")or die(mysql_error());
				while($row1 = mysql_fetch_array($query1)){
				?>
				<option value="<?php echo $row1['kategori_id']; ?>"><?php echo $row1['nama_kategori']; ?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Pengarang:</label>
			<div class="controls">
			<input type="text" class="span4" name="pengarang" value="<?php echo $row['pengarang']; ?>" placeholder="pengarang" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Jumlah buku:</label>
			<div class="controls">
			<input class="span1" type="text" name="jumlah_buku" value="<?php echo $row['jumlah_buku']; ?>" placeholder="jumlah buku" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Sumber buku:</label>
			<div class="controls">
			<input type="text" class="span4"  name="sumber_buku" value="<?php echo $row['sumber_buku']; ?>" placeholder="sumber buku" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Penerbit:</label>
			<div class="controls">
			<input type="text" class="span4" name="penerbit" value="<?php echo $row['penerbit']; ?>" placeholder="penerbit" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Isbn:</label>
			<div class="controls">
			<input type="text" class="span4" name="isbn" value="<?php echo $row['isbn']; ?>" placeholder="isbn" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tahun terbit:</label>
			<div class="controls">
			<input type="text" name="thn_terbit" value="<?php echo $row['thn_terbit']; ?>" placeholder="tahun terbit" required>
			</div>
		</div>
			<div class="control-group">
			<label class="control-label" for="inputPassword">Tanggal Masuk:</label>
			<div class="controls">
			<input type="text" class="span4" name="tanggal_masuk" value="<?php echo $row['tanggal_masuk']; ?>" placeholder="tanggal masuk" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
			<select name="status">
				<option><?php echo $row['status']; ?></option>
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