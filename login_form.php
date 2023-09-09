			
			<form id="login_form1" class="form-signin" method="post" action="login.php">
						<h3 class="form-signin-heading"><i class="icon-lock"></i> Login anggota</h3>
						<input type="text" class="input-block-level" id="no_anggota" name="no_anggota" placeholder="No. anggota" required>
						<input type="password" class="input-block-level" id="no_tlp" name="no_tlp" placeholder="Password" required>
						<button data-placement="right" title="Login anggota" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Login</button>
															
			</form>
						
			<div id="button_form" class="form-signin" >
			Pustakawan
			<hr>
				<h3 class="form-signin-heading"><i class="icon-edit"></i> Admin </h3>
				<button data-placement="top" title="Login admin" id="signin_student" onclick="window.location='librarian/index.php'" id="btn_student" name="login" class="btn btn-info" type="submit">Login</button>

			</div>
	<script type="text/javascript">
	$(document).ready(function(){$('#signin_student').tooltip('show'); $('#signin_student').tooltip('hide');});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){$('#signin_teacher').tooltip('show'); $('#signin_teacher').tooltip('hide');});
	</script>
												