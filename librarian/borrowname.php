<form method="post" action="borrow_save.php">
<div class="border-borrow">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Nama peminjam</label>
				<div class="controls">
				<select name="member_id" class="chzn-select" required/>
				<option></option>
				<?php $result =  mysql_query("select * from anggota")or die(mysql_error()); 
				while ($row=mysql_fetch_array($result)){ ?>
				<option value="<?php echo $row['no_anggota']; ?>"><?php echo $row['nama_siswa']; ?></option>
				<?php } ?>
				</select>
				</div>
			</div>
				<div class="control-group"> 
					<label class="control-label" for="inputEmail">Tanggal peminjaman</label>
					<div class="controls">
					<input type="text"  class="w8em format-d-m-y highlight-days-67 range-low-today" name="due_date" id="sd" maxlength="10" style="border: 3px double #CCCCCC;" required/>
					</div>
				</div>
				<div class="control-group"> 
					<div class="controls">
						<button class="btn btn-success" name="borrow"><i class="icon-plus"></i> Meminjam</button>
						<button name="delete_student" class="btn btn-danger"><i class="icon-check icon-large"></i> Iya</button>
					</div>
				</div>
</div>
