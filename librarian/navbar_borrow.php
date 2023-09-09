      <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#680000,#FF6103);
    background-color:#ffffff;
    margin: 0 auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
					<ul class="nav">
					<li><a href="dashboard.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
					<li><a href="users.php"><i class="icon-user icon-large"></i>&nbsp;Pengguna</a></li>
					<?php 
					include('dropdown.php');
					?>
					<li><a href="books.php"><i class="icon-book icon-large"></i>&nbsp;Buku</a></li>
					<li><a href="member.php"><i class="icon-group icon-large"></i>&nbsp;Anggota</a></li>
					<li><a href="archive.php"><i class="icon-list-alt icon-large"></i>&nbsp;Arsip</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="icon-search icon-large"></i>&nbsp;Advance Search</a></li>
					<!-- <li><a href="section.php"><i class="icon-group icon-large"></i>&nbsp;Sections</a></li> -->
				
					<li><a href="logout.php" ><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
					</ul>
					 <div class="pull-right">
						<div class="admin"></div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
		 <?php include('search_form.php'); ?>

 
