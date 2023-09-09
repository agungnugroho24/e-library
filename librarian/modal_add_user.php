	<div id="add_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Tambah pengguna</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Username</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="username" placeholder="Username" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				<input type="password" name="password" id="inputPassword" placeholder="Password" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Nama depan</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="nama_depan" placeholder="Nama depan" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Nama belakang</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="nama_belakang" placeholder="Nama belakang" required>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nama_depan=$_POST['nama_depan'];
	$nama_belakang=$_POST['nama_belakang'];
	
	mysql_query("insert into pengguna (username,password,nama_depan,nama_belakang) values('$username','$password','$nama_depan','$nama_belakang')")or die(mysql_error());
	}
	?>