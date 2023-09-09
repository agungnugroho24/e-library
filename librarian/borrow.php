<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_borrow.php'); ?>
    <div class="container" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#fff,#ebebeb);
    background-color:#EBEBEB;
    margin: 0 auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);">
		<div class="margin-top">
			<div class="row">	
								<div class="alert alert-info" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#ebebeb,#00FFFF );
    background-color:#ffffff;
    margin-bottom: 10px auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong style="color:#000;"><i class="icon-user icon-large"></i>&nbsp;Tabel peminjaman</strong>
                                </div>

		<div class="span12">		

		<form method="post" action="borrow_save.php">
<div class="span3">

				<div class="control-group">
				<label class="control-label" for="inputEmail">Nama peminjam</label>
				<div class="controls">
				<select name="nama_siswa" class="chzn-select"required/>
				<option></option>
				<?php $result =  mysql_query("select * from anggota")or die(mysql_error()); 
				while ($row=mysql_fetch_array($result)){ ?>
				<option value="<?php echo $row['no_anggota']; ?>"><?php echo $row['nama_siswa']; ?></option>
				<?php } ?>
				</select>
				</div>
			</div>
				<div class="control-group"> 
					<label class="control-label" for="inputEmail">Due Date</label>
					<div class="controls">
					<input type="text"  class="w8em format-d-m-y highlight-days-67 range-low-today" name="tgl_transaksi" id="sd" maxlength="10" style="border: 3px double #CCCCCC;" required/>
					</div>
				</div>
				<div class="control-group"> 
					<div class="controls">

								<button name="delete_student" class="btn btn-success"><i class="icon-plus-sign icon-large"></i> Meminjam</button>
					</div>
				</div>
				</div>
				<div class="span8">
						<div class="alert alert-success"><strong>Pilih buku</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0px" class="table" id="example">

                                <thead border="1000px">
                                    <tr>
                       
                                        <th>Acc No.</th>                                 
                                        <th>Judul buku</th>                                 
                                        <th>Kategori</th>
										<th>Pengarang</th>
										<th>Penerbit</th>
										<th>Status</th>
										<th>Pilih</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from buku where status != 'Archive' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['id_buku'];  
									$cat_id=$row['kategori_id'];

											$cat_query = mysql_query("select * from kategori where kategori_id = '$cat_id'")or die(mysql_error());
											$cat_row = mysql_fetch_array($cat_query);
									?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['id_buku']; ?></td>
                                    <td><?php echo $row['judul_buku']; ?></td>
									<td><?php echo $cat_row ['kategori_id']; ?> </td> 
                                    <td><?php echo $row['pengarang']; ?> </td> 
									 <td><?php echo $row['penerbit']; ?></td>
									  <td width=""><?php echo $row['status']; ?></td> 
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="20">
												<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>" >
												
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                                </tbody>
                            </table>
							
			    </form>
			</div>		
			</div>		
<script>		
$(".uniform_on").change(function(){
    var max= 3;
    if( $(".uniform_on:checked").length == max ){
	
        $(".uniform_on").attr('disabled', 'disabled');
		         alert('3 Books are allowed per borrow');
        $(".uniform_on:checked").removeAttr('disabled');
		
    }else{

         $(".uniform_on").removeAttr('disabled');
    }
})
</script>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>