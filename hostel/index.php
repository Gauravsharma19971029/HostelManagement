<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$stmt=$mysqli->prepare("SELECT username,email,password,id FROM admin WHERE (userName=?|| email=?) and password=? ");
				$stmt->bind_param('sss',$username,$username,$password);
				$stmt->execute();
				$stmt -> bind_result($username,$username,$password,$id);
				$rs=$stmt->fetch();
				$_SESSION['id']=$id;
				$uip=$_SERVER['REMOTE_ADDR'];
				$ldate=date('d/m/Y h:i:s', time());
				if($rs)
				{
                //  $insert="INSERT into admin(adminid,ip)VALUES(?,?)";
   // $stmtins = $mysqli->prepare($insert);
   // $stmtins->bind_param('sH',$id,$uip);
    //$res=$stmtins->execute();
					header("location:admin-profile.php");
				}

				else
				{
					echo "<script>alert('Invalid Username/Email or password');</script>";
				}
			}
				?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home</title>

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include('includes/header.php');?>
	<style type="text/css">
		@media only screen and (max-width: 600px) {
  		a.he1 a style{
  			font-size:10px;border: 5px ;padding: 1px 8px 2px 10px;float: left;display: block;

  		}
    			
  }
}
	</style>
	
	<div class="login-page bk-img" style="background-image: url(youth-hostel-sign-7850779.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 ><font color="white">Hostel Management Portal   </font>  
						</h1>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>