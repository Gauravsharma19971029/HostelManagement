<?php if($_SESSION['id'])

{ ?><div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="my-profile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
} else { ?>
<div class="brand clearfix">

		<a class="he1" href="index.php"   style="font-size:20px;border: 10px ;padding: 1% ;float: left;display: block;">Home</a>
		<a class="he1" href="log.php"  style="font-size:20px;border: 20px ;padding: 1%;float: left;">Login</a>
		<a class="he1"  href="about.php"  style="font-size:20px;border: 20px ;padding: 1%;float: left;">About</a>
		<a class="he1" href="contact.php"  style="font-size:20px;border: 20px ;padding: 1%;float: left;">Contact</a>
		<a class="he1" href="Gallery.php"  style="font-size:20px;border: 20px ;padding: 1%;float: left;">Gallery</a>


		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>