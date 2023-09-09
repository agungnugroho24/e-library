<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
<?php
$judul_buku = $_POST['judul_buku'];
/* $category = $_POST['category']; */
$pengarang = $_POST['pengarang'];
?>

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
	box-shadow:0 1px 3px rgba(0,0,0,.5);">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong style="color:#000;"><i class="icon-user icon-large"></i>&nbsp;Tabel buku</strong>
                                </div>
						<!--  -->
								    <ul class="nav nav-pills">
										<li   class="active"><a href="books.php">Semua</a></li>
										<li><a href="new_books.php">Buku baru</a></li>
										<li><a href="old_books.php">Buku hilang</a></li>
										<li><a href="damage.php">Buku rusak</a></li>
										<li><a href="sub_rep.php">Perlu penggantian</a></li>
									</ul>
						<!--  -->
						<center class="title">
						<h1>Daftar buku</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Cetak</a>
								</div>
								<p><a href="add_books.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Tambah buku</a></p>
							
                                <thead>
                                    <tr>
									    <th>Acc No.</th>                                 
                                        <th>Judul buku</th>                                 
                                        <th>Kategori</th>
										<th>Pengarang</th>
										<th>Penerbit</th>
										<th class="action">Jumlah</th>
										<th>Sumber buku</th>
										<th>ISBN</th>
										<th>Tahun terbit</th>
										<th>Tanggal masuk</th>
										<th>Status</th>
										<th class="action">Action</th>		
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 

				
								  $user_query=mysql_query("select * from buku where status != 'Archive' and judul_buku LIKE  '%$judul_buku%'
								  OR status != 'Archive' and pengarang LIKE '%$pengarang%'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['id_buku'];  
									$cat_id=$row['kategori_id'];
									$jumlah_buku = $row['jumlah_buku'];
									
									$borrow_details = mysql_query("select * from detil_peminjaman where id_buku = '$id' and status_peminjaman = 'pending'");
									$row11 = mysql_fetch_array($borrow_details);
									$count = mysql_num_rows($borrow_details);
									
									$total =  $jumlah_buku  -  $count; 
									/* $t4otal =  $jumlah_buku  - $borrow_details;
									
									echo $total; */
											$cat_query = mysql_query("select * from kategori where kategori_id = '$cat_id'")or die(mysql_error());
											$cat_row = mysql_fetch_array($cat_query);
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['id_buku']; ?></td>
                                    <td><?php echo $row['judul_buku']; ?></td>
									<td><?php echo $cat_row ['kategori_id']; ?> </td>
                                    <td><?php echo $row['pengarang']; ?> </td> 
									 <td><?php echo $row['penerbit']; ?></td>
                                    <td class="action"><?php echo /* $row['jumlah_buku']; */   $total;   ?> </td>
                                     <td><?php echo $row['sumber_buku']; ?></td>
									 <td><?php echo $row['isbn']; ?></td>
									 <td><?php echo $row['thn_terbit']; ?></td>		
									 <td><?php echo $row['tanggal_masuk']; ?></td>
									 <td><?php echo $row['status']; ?></td>
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td class="action">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_book<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_book_modal.php'); ?>
										<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_book.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
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