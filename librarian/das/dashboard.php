<?php  include('header.php'); ?>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Numbers</div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
									<?php 
								$query_reg_teacher = mysql_query("select * from anggota where status = 'Aktif' ")or die(mysql_error());
								$count_reg_teacher = mysql_num_rows($query_reg_teacher);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_teacher; ?>"><?php echo $count_reg_teacher; ?></div>
                                    <div class="chart-bottom-heading"><strong>Jumlah anggota</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_teacher = mysql_query("select * from buku")or die(mysql_error());
								$count_teacher = mysql_num_rows($query_teacher);
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_teacher; ?>"><?php echo $count_teacher ?></div>
                                    <div class="chart-bottom-heading"><strong>Jumlah buku</strong>

                                    </div>
                                </div>
								<?php 
								$query_teacher = mysql_query("select * from pengguna")or die(mysql_error());
								$count_teacher = mysql_num_rows($query_teacher);
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_teacher; ?>"><?php echo $count_teacher ?></div>
                                    <div class="chart-bottom-heading"><strong>Jumlah pengguna</strong>

                                    </div>
                                </div>
								
						
                    </div>
                    </div>
                
                
                 
                 
                </div>
            </div>
    
        </div>
	<?php include('script.php'); ?>
    </body>

</html>