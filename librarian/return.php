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
				<div class="span12">		
						<div class="alert alert-info" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#ebebeb,#00FFFF );
    background-color:#ffffff;
    margin-bottom: 10px auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);"><strong style="color:#000;">Buku yang sudah dikembalikan</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Cetak</a>
								</div>
                                <thead>
                                    <tr>
                                        <th>Judul buku</th>                                 
                                        <th>Nama siswa</th>                                 
                                        <th>Kelas</th>                                 
                                        <th>Tanggal pinjam</th>                                 
                                        <th>Jatuh tempo</th>                                
                                        <th>Tanggal pengembalian</th>

                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from peminjaman
								LEFT JOIN anggota ON peminjaman.no_anggota = anggota.no_anggota
								LEFT JOIN detil_peminjaman ON peminjaman.id_peminjaman = detil_peminjaman.id_peminjaman
								LEFT JOIN buku on detil_peminjaman.id_buku =  buku.id_buku 
								where detil_peminjaman.status_peminjaman = 'returned'ORDER BY peminjaman.id_peminjaman DESC
								  ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['id_peminjaman'];
									$id_buku=$row['id_buku'];
									$id_detil_peminjaman=$row['id_detil_peminjaman'];
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['judul_buku']; ?></td>
                                    <td><?php echo $row['nama_siswa']; ?></td>
                                    <td><?php echo $row['kelas']; ?></td>
									<td><?php echo $row['tgl_peminjaman']; ?></td>
									<td><?php echo $row['tgl_transaksi']; ?></td>
									<td><?php echo $row['tgl_pengembalian']; ?> </td>
                                    <td></td> 
									 
                                    </tr>
									<?php  }  ?>
                                </tbody>
                            </table>
							

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