<?php 
session_start();


if( !isset($_SESSION['admin_name'])) {
  header("Location:login_form.php");
  exit;
}


?>


<!Doctype HTML>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="style5.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

	<div id="mySidenav" class="sidenav">
		<p class="logo"><span>L</span>-gaming</p>
		<a href="admin_page.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Admin page</a>
		<a href="logout.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Keluar</a>


	</div>
	<div id="main">

		<div class="head">
			<div class="col-div-6">
				<span style="font-size:30px;cursor:pointer; color: black;" class="nav">&#9776; Dashboard</span>
				<span style="font-size:30px;cursor:pointer; color: black;" class="nav2">&#9776; Dashboard</span>
			</div>

			<div class="col-div-6">
				<div class="profile">

					<img src="image/logo.jpg" class="pro-img" />
					<p>Land<span>Owner</span></p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="clearfix"></div>
		<br />

		<div class="col-div-3">
			<div class="box">
				<p>67<br /><span>Users</span></p>
				<i class="fa fa-users box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>45<br /><span>Product</span></p>
				<i class="fa fa-list box-icon"></i>
			</div>
		</div>



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>

			$(".nav").click(function () {
				$("#mySidenav").css('width', '70px');
				$("#main").css('margin-left', '70px');
				$(".logo").css('visibility', 'hidden');
				$(".logo span").css('visibility', 'visible');
				$(".logo span").css('margin-left', '-10px');
				$(".icon-a").css('visibility', 'hidden');
				$(".icons").css('visibility', 'visible');
				$(".icons").css('margin-left', '-8px');
				$(".nav").css('display', 'none');
				$(".nav2").css('display', 'block');
			});

			$(".nav2").click(function () {
				$("#mySidenav").css('width', '300px');
				$("#main").css('margin-left', '300px');
				$(".logo").css('visibility', 'visible');
				$(".icon-a").css('visibility', 'visible');
				$(".icons").css('visibility', 'visible');
				$(".nav").css('display', 'block');
				$(".nav2").css('display', 'none');
			});

		</script>

</body>


</html>