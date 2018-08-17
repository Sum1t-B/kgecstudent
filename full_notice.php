<?php
$id=$_GET['id'];
include('php/connection.php');
$query="SELECT * FROM `notice` WHERE id='$id'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
$dept=$row['dept'];
$idi=$row['id'];
$time=$row['time'];
$notice_no=$dept."/".$idi."/".$time;
$query1="SELECT * FROM `admin` WHERE dept='$dept'";
$res1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_array($res1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Representative Notice</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background: #dcdcdc;">
	<div class="row" style="margin: 20px;font-family: cambria;font-size: 1.5em;">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<p class="text-center">Government of West Bengal</p>
				<p class="text-center">Kalyani Government Engineering College</p>
				<p class="text-center"><?php echo $row['dept1']; ?></p>
				<p class="text-center">Kalyani-741235,Nadia</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5">
				<p class="text-left">Notice No:<?php echo $notice_no; ?></p>
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-5">
				<p class="text-right">Date:<?php echo $row['date']; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<p class="text-center">Sub:	<?php echo $row['tag']; ?></p>
			</div>
			<div class="col-sm-1"></div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-sm-12">
				<p class="text-left"><?php echo $row['content']; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-9"></div>
			<div class="col-sm-3">
				<p class="text-right"><?php echo $row1['name']; ?></p>
				<p class="text-right"><?php echo $row1['dept1']; ?></p>
			</div>
		</div>
	</div>
</body>
</html>