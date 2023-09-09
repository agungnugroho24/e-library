			<form id="login_admin" class="form-signin" method="post">
			<h3 class="form-signin-heading"><i class="icon-lock"></i> Login admin</h3>
			<input type="text" class="input-block-level" id="username" name="username" placeholder="username" required>
			<input type="password" class="input-block-level" id="firstname" name="password" placeholder="password" required>
			</select>
			<button id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-check icon-large"></i> Login</button>
							<?php
								if (isset($_POST['submit'])){
								session_start();
								$username = $_POST['username'];
								$password = $_POST['password'];
								$query = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									if( $num_row > 0 ) {
										header('location:librarian/dashboard.php');
								$_SESSION['id']=$row['id_pengguna'];
									}
									else{ ?>
								<div class="alert alert-danger">Akses ditolak</div>		
								<?php
								}}
								?>
			</form>
			<script>
			jQuery(document).ready(function(){
			jQuery("#login_admin").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#password').val();
						var cpassword = jQuery('#cpassword').val();
					
					
					if (password == cpassword){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "admin_login.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Selamat datang admin", { header: 'Login Success' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'librarian/dashboard.php'  }, delay);  
						}else if(html=='false'){
							$.jGrowl("Username atau password salah", { header: 'Login Failed' });
						}
						}
						
						
					});
			
					}else
						{
						$.jGrowl("Username atau password salah", { header: 'Login Failed' });
						}
				});
			});
			</script>
			
			
			
				
		
					