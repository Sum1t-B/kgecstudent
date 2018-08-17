<!DOCTYPE html>
<head>
<title>KGEC Admin Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<style type="text/css">
	.form-control {
    display: block;
    width: 100%;
    height: 48px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #fff;
    background-color: #a46f8b;
    background-image: none;
    border: 1px solid #f3e9e9;
    border-radius: 0px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
</style>
</head>
<body>
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Register Now</h2>
		<form action="../php/registration_redirect.php" method="POST">
			<input type="text" class="ggg" name="name" placeholder="NAME" required="">
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
			<input type="text" class="ggg" name="number" placeholder="PHONE" required="">
			<div class="form-group">
  <select class="form-control" name="dept" required>
    <option>WHICH DEPARTMENT FOR?</option>
    <option value="cseb1">CSE Btech 1st Year</option>
    <option value="cseb2">CSE Btech 2nd Year</option>
    <option value="cseb3">CSE Btech 3rd Year</option>
    <option value="cseb4">CSE Btech 4th Year</option>
    <option value="csem1">CSE Mtech 1st Year</option>
    <option value="csem2">CSE Mtech 2nd Year</option>
    <option value="itb1">IT  Btech 1st Year</option>
    <option value="itb2">IT  Btech 2nd Year</option>
    <option value="itb3">IT  Btech 3rd Year</option>
    <option value="itb4">IT  Btech 4th Year</option>
    <option value="itm1">IT  Mtech 1st Year</option>
    <option value="itm2">IT  Mtech 2nd Year</option>
    <option value="eceb1">ECE  Btech 1st Year</option>
    <option value="eceb2">ECE  Btech 2nd Year</option>
    <option value="eceb3">ECE  Btech 3rd Year</option>
    <option value="eceb4">ECE  Btech 4th Year</option>
    <option value="ecem1">ECE  Mtech 1st Year</option>
    <option value="ecem2">ECE  Mtech 2nd Year</option>
    <option value="meb1">MECHANICAL  Btech 1st Year</option>
    <option value="meb2">MECHANICAL  Btech 2nd Year</option>
    <option value="meb3">MECHANICAL  Btech 3rd Year</option>
    <option value="meb4">MECHANICAL  Btech 4th Year</option>
    <option value="mem1">PRODUCTION  Mtech 1st Year</option>
    <option value="mem2">PRODUCTION  Mtech 2nd Year</option>
    <option value="eeb1">ELECTRICAL  Btech 1st Year</option>
    <option value="eeb2">ELECTRICAL  Btech 2nd Year</option>
    <option value="eeb3">ELECTRICAL  Btech 3rd Year</option>
    <option value=eeb4"">ELECTRICAL  Btech 4th Year</option>
    <option value="eem1">ELECTRICAL  Mtech 1st Year</option>
    <option value="eem2">ELECTRICAL  Mtech 2nd Year</option>
    <option value="mca1">MCA 1st Year</option>
    <option value="mca2">MCA 2nd Year</option>
    <option value="mca3">MCA 3rd Year</option>
    <option value="apc">APC</option>
    <option value="pc">PC</option>
    <option value="rbc">RBC</option>
    <option value="rrr">RRR</option>
    <option value="vc">VC</option>
    <option value="ecell">KGEC-E-CELL</option>
    <option value="keygen">KEYGEN CODERS</option>
    <option value="litmus">LITMUS</option>
    <option value="nova">NOVA</option>
    <option value="les">LES QUIZERABLES</option>
    <option value="riyaz">RIYAZ</option>
    <option value="ely">ELYSIUM</option>
    <option value="chit">CHITRANK</option>
  </select>
</div>
			<input type="password" class="ggg" name="pass" placeholder="PASSWORD" required="">
			<input type="password" class="ggg" name="repass" placeholder="RETYPE PASSWORD" required="">
				<div class="clearfix"></div>
				<input type="submit" value="submit" name="register">
		</form>
		<p>Already Registered.<a href="index.php">Login</a></p>
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
