<?php include('header.php'); ?>
<?php include('navbar_dashboard.php'); ?>

    <div class="container" >
		<div class="margin-top">
			<div class="row" >	
			<div class="span12" >	
				<?php  include('das/header.php'); ?>
    <body>
        <div class="container-fluid" style="margin-left:200px; width:1000px; margin-top:-50px;">
            <div class="row-fluid">
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block" >
                            <div class="navbar navbar-inner block-header" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#ebebeb,#00FFFF );
    background-color:#ffffff;
    margin-bottom: 10px auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);">
                                <div class="muted pull-left"> <strong style="color:#000;">Data Numbers</strong></div>
                            </div>
                            <div class="block-content collapse in" style="margin-left:135px; margin-right:-50px; wdith:900px;">
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
	<?php include('das/script.php'); ?>
    </body>

</html>
				
				

    </div>
<?php include('footer.php') ?>