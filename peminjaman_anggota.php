<?php include('header_anggota.php'); ?>
<?php include('navbar_anggota.php'); ?>
    <body style="background:url(img/white.jpg);">
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_peminjaman.php'); ?>
		
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block" style="margin-left:-50px; width:1000px;">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><strong style="color:#000;">Data peminjaman</strong></div>
                            </div>
                            <div class="block-content collapse in" style="width:1100px:">
                                <div class="span12">
									<form>
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example" style="width:1100px:">
										<thead style="width:1100px:">
								    <tr style="width:1100px:">
										  <th>Judul buku</th>                                 
                                        <th>Nama</th>                                 
                                        <th>Kelas</th>                                 
                                        <th>Tanggal pinjam</th>                                 
                                        <th>Jatuh tempo</th>                                
                                        <th>Tanggal pengembalian</th>
										<th>Status</th>
                                    </tr>
										</thead>
										<tbody>
											
												<?php $query= mysql_query("select * from peminjaman
								INNER JOIN anggota ON peminjaman.no_anggota = anggota.no_anggota
								INNER JOIN detil_peminjaman ON peminjaman.id_peminjaman = detil_peminjaman.id_peminjaman
								INNER JOIN buku on detil_peminjaman.id_buku =  buku.id_buku 
								where anggota.no_anggota='$session_id' AND detil_peminjaman.status_peminjaman='pending'")or die(mysql_error());
												$row = mysql_fetch_array($query);
												?>
										
											<tr>
													
									<td><?php echo $row['judul_buku']; ?></td>
                                    <td><?php echo $row['nama_siswa']; ?></td>
                                    <td><?php echo $row['kelas']; ?></td>
									<td><?php echo $row['tgl_peminjaman']; ?></td> 
                                    <td><?php echo $row['tgl_transaksi']; ?> </td>
									<td><?php echo $row['tgl_pengembalian']; ?> </td>
									<td><?php echo $row['status_peminjaman'];?></td>
                                    <td></td> 
									
									</tr>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>