<?php include('header_anggota.php'); ?>
<?php include('navbar_anggota.php'); ?>
    <body style="background:url(img/white.jpg);">
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
		
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block" style="margin-left:-50px; width:1000px;">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><strong style="color:#000;">Profil siswa</strong></div>
                            </div>
                            <div class="block-content collapse in" style="width:1100px:">
                                <div class="span12">
									<form>
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example" style="width:1100px:">
										<thead style="width:1100px:">
								    <tr style="width:1100px:">
										<th>No. Anggota</th>
                                        <th>Nama siswa</th>                                 
                                        <th>Jenis kelamin</th>
										<th>Alamat</th>
										<th>No. Telp</th>
										<th>Kelas</th>
										<th>Status</th>
                                    </tr>
										</thead>
										<tbody>
											
												<?php $query= mysql_query("select * from anggota where no_anggota = '$session_id'")or die(mysql_error());
												$row = mysql_fetch_array($query);
												?>
										
											<tr>
													
									<td><?php echo $row['no_anggota']; ?></td>
                                    <td><?php echo $row['nama_siswa']; ?></td>
									<td><?php echo $row ['jenis_kelamin']; ?> </td>
                                    <td><?php echo $row['alamat']; ?> </td> 
                                     <td><?php echo $row['no_tlp']; ?></td>
                                    <td><?php echo $row['kelas'];?> </td>
									<td><?php echo $row['status']; ?></td>
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