<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_archive.php'); ?>
    <div class="container" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#fff,#d7d7d7);
    background-color:#fff;
    margin: 0 auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
						<!--  -->
								    		   <div class="alert alert-info" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#ebebeb,#00FFFF );
    background-color:#ffffff;
    margin-bottom: 10px auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong style="color:#000;"><i class="icon-user icon-large"></i>&nbsp;Arsip</strong>
                                </div>
						<!--  -->
						<center class="title">
						<h1>Daftar buku</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
								</div>
							
                                <thead>
                                    <tr>
									    <th>Acc No.</th>                                 
                                        <th>Judul buku</th>                                 
                                        <th>Kategori</th>
										<th>Pengarang</th>
										<th class="action">Jumlah</th>
										<th>Sumber buku</th>
										<th>Penerbit</th>
										<th>ISBN</th>
										<th>Tahun terbit</th>
										<th>Tanggal masuk</th>
										<th>Status</th>										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from buku where status = 'Archive'")or die(mysql_error());
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
                                    <td class="action"><?php echo $row['jumlah_buku']; ?> </td>
                                     <td><?php echo $row['sumber_buku']; ?></td>
									 <td><?php echo $row['isbn']; ?></td>
									 <td><?php echo $row['thn_terbit']; ?></td>		
									<td><?php echo $row['tanggal_masuk']; ?></td>
									 <td><?php echo $row['status']; ?></td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>