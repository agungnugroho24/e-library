<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_member.php'); ?>
    <div class="container" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#fff,#ebebeb);
    background-color:#ebebeb;
    margin: 0 auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#ebebeb,#00FFFF );
    background-color:#ffffff;
    margin-bottom: 10px auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong style="color:#000;"><i class="icon-user icon-large"></i>&nbsp;Tabel anggota</strong>
                                </div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                             
								<p><a href="add_member.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Tambah anggota</a></p>
							
                                <thead>
                                    <tr>
                       
                                        <th>Nama siswa</th>                                 
                                        <th>Jenis kelamin</th>
										<th>Alamat</th>
										<th>Kontak</th>
										<th>Kelas</th>
										<th>Status</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from anggota")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['no_anggota'];  ?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['nama_siswa']; ?></td>
                                    <td><?php echo $row['jenis_kelamin']; ?> </td> 
                                    <td><?php echo $row['alamat']; ?> </td>
                                    <td><?php echo $row['no_tlp']; ?></td>
									<td><?php echo $row['kelas']; ?></td> 
									<td><?php echo $row['status']; ?></td> 
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_student_modal.php'); ?>
										<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_member.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>