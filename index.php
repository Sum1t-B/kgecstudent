<?php
include('php/connection.php');
$query="SELECT * FROM `admin`";
$res=mysqli_query($conn,$query);
$query1="SELECT * FROM `notice` ORDER BY id DESC LIMIT 20";
$res1=mysqli_query($conn,$query1);
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Kalyani Government Engineering College:Student Section</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="TechEdu Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />

<link rel="stylesheet" href="css/lightbox.css">
<!-- carousel slider -->  
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> 
<!-- //carousel slider -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<!--/web-fonts-->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<!--//web-fonts-->
</head>
<body>
	<!--/banner-bottom-->
			  <div class="w3_agilits_banner_bootm">
			     <div class="w3_agilits_inner_bottom">
			            <div class="wthree_agile_login">
						     <ul>
								<li><i class="fa fa-phone" aria-hidden="true"></i>+91 3325821309</li>
								<li><i class="fa fa-envelope-o list-icon" aria-hidden="true"></i><a href="mailto:contact@kgec.edu.in">contact@kgec.edu.in</a></li>
							</ul>
						</div>
						 
				</div>
			</div>
			<!--//banner-bottom-->
  <!--/banner-section-->
	<div id="demo-1" data-zs-src='["images/b1.jpg","images/b2.jpg","images/b3.jpg","images/b4.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.php"><span class="letter">K</span>G<span>E</span>C</a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="#portfolio" class="scroll">Institute Information</a></li>
								<li><a href="#team" class="scroll">Representatives</a></li>
								<li><a href="#testimonials" class="scroll" >Updates</a></li>
								<li><a href="#contact" class="scroll">Contact</a></li>
							</ul>
						</div>
					<div class="clearfix"> </div>	
				</nav>
			</div> 

			   </div>
		<!--//header-w3l-->
			<!--/banner-info-->
			   <div class="baner-info">
				   <h3><span>K</span>alyani<span>G</span>overnment<span>E</span>ngineering<span>C</span>ollege</h3>
				  <p>Student's Section</p>
			   </div>
			<!--/banner-ingo-->		
		</div> 
    </div>
  <!--/banner-section-->	
<!--portfolio-->
	<div id="portfolio" class="portfolio w3ls-section">
		<div class="container">
			<h3 class="w3ls-title">Institute Information</h3>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Btech Department</span></li>
					<li class="resp-tab-item"><span>Mtech & Mca Department</span></li>
					<li class="resp-tab-item"><span>Hostels</span></li>
					<li class="resp-tab-item"><span>Clubs</span></li>					
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 portfolio-grids">
							<a href="btech_year.php?id=cseb">
								<img src="images/cse.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Computer Science & Engg.</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="btech_year.php?id=eceb">
								<img src="images/ece.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Electroics & Comm. Engg.</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="btech_year.php?id=itb">
								<img src="images/it.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Information Technology</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="btech_year.php?id=meb">
								<img src="images/me.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Mechanical Engg.</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="btech_year.php?id=eeb">
								<img src="images/ee.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Electrical Engg.</h5>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>		
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 portfolio-grids">
							<a href="mtech_year.php?id=csem">
								<img src="images/cse.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Computer Science & Engg.</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="mtech_year.php?id=ecem">
								<img src="images/ece.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Electronics & Comm. Engg.</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="mtech_year.php?id=itm">
								<img src="images/it.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Information Technology</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="mtech_year.php?id=mem">
								<img src="images/me.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Production Engg.</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="mtech_year.php?id=eem">
								<img src="images/ee.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Electrical Engg.</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="bca_year.php?id=mca">
								<img src="images/mca.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Computer Applications</h5>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php?id=apc">
								<img src="images/apc.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>APC Hall</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php?id=pc">
								<img src="images/pc.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>PC</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php?id=rbc">
								<img src="images/rbc.jpg?id=rbc" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>RBC Hall</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php?id=rrr">
								<img src="images/rrr.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>RRR Hall</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php?id=vc">
								<img src="images/vc.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>VC</h5>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php?id=ecell">
								<img src="images/ecell1.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>KGEC E-CELL</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php?id=keygen">
								<img src="images/keygen1.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>KeyGEN Coders</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php?id=litmus">
								<img src="images/litmus1.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Litmus</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php?id=nova">
								<img src="images/nova1.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Nova</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php?id=les">
								<img src="images/lesquiz1.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Les Quizerables</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
						<a href="notice.php?id=riyaz">
								<img src="images/riyaz1.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Riyaz</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php?id=ely">
								<img src="images/elysium1.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Elysium</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php?id=chit">
								<img src="images/chitrank1.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>Chitrank</h5>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php">
								<img src="images/g2.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>TechEdu</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php">
								<img src="images/g5.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>TechEdu</h5>
								</div>
							</a>
						</div>
						<div class="col-md-3 portfolio-grids">
							<a href="notice.php">
								<img src="images/g6.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<h5>TechEdu</h5>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>						
			</div>
		</div>
		</div>	
	</div>
	<!--//portfolio-->
  <!--//main-header-->
	<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
	<!-- testimonial -->
	<div class="wthree-testi w3ls-section" id="testimonials">
		<!-- container -->
		<div class="container">
			<h3 class="w3ls-title">Recent Updates</h3> 
			<div class="w3_wthree-testi_grids text-center">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
			<?php
			while($row1=mysqli_fetch_array($res1))
			{
			?> 
							<li>	
								<div class="wthree-testi_grid">
									<div class="testimonial-left">
										<i class="fa fa-user" aria-hidden="true"></i> 
									</div>
									<p><?php echo $row1['tag']; ?></p>
									<h5><?php echo $row1['dept1']; ?></h5>
								</div>
							</li>
			<?php } ?>
						</ul>
					</div>
				</section>
				
			</div>
		</div>
	</div>
<!-- //testimonial --> 
<!-- team -->
	<div class="testimonials w3ls-section" id="team">
		<div class="container">
			<h3 class="w3ls-title">Our Representatives</h3>
		<div class="w3_testimonials_grids w3_testimonials_grids">
			<div id="owl-demo" class="owl-carousel">
			<?php
			while($row=mysqli_fetch_array($res))
			{
			?> 
				<div class="item w3_agileits_testimonials_grid">
					<img src="images/t1.png" alt=" " class="img-responsive" />
					<h4><?php echo $row['name']; ?></h4>
					<p><?php echo $row['dept1']; ?></p>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
	</div>
<!-- //team -->
	
	<!-- contact -->
	<div class="contact-bottom w3ls-section" id="contact">
		<div class="container">
			<h3 class="w3ls-title">contact</h3>
			<p>Kalyani Government Engineering College is the best college all over the West Bengal under Maulana Abul Kalam Azad University of Technology 
(formerly - West Bengal University of Technology).</p>
			<div class="w3layouts-list">
					<div class="col-md-4 li"><span class="fa fa-map-marker" aria-hidden="true"></span><h6>Kalyani,Nadia</h6></div>
					<div class="col-md-4 li"><span class="fa fa-phone" aria-hidden="true"></span><h6>+91 3325821309</h6></div>
					<div class="col-md-4 li"><span class="fa fa-location-arrow" aria-hidden="true"></span><a href="mailto:contact@kgec.edu.in">contact@kgec.edu.in</a></div>
					<div class="clearfix"></div>
			</div>
			<div class="col-md-6 col-sm-6  col-xs-6 agileits_w3layouts-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.8821949500702!2d88.44664871447843!3d22.99135908496888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8952d71094a7f%3A0x8f1c6d3ff467d96b!2sKalyani+Government+Engineering+College!5e0!3m2!1sen!2sin!4v1530769722622" style="border:0" allowfullscreen></iframe>
			</div>	
			<div class="col-md-6 col-sm-6 col-xs-6 contact-right-w3l">
				<form action="sendmail.php" method="POST">
					<input type="text" class="name" name="fname" placeholder="First Name" required="">
					<input type="text" class="name" name="lname" placeholder="Last Name" required="">
					<input type="email" class="name" name="email" placeholder="Email" required="">
					<input type="text" class="name" name="subject" placeholder="Subject" required="">
					<textarea name="message" placeholder="Your Message" required=""></textarea>
					<input type="submit" value="SEND MESSAGE">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //contact -->
	<!-- footer -->
	<div class="agileits_w3layouts-footer">
		<div class="col-md-6 col-sm-8 agileinfo-copyright">
			<p>© 2018. All rights reserved | Design by <a href="http://kgec.edu.in/">Kalyani Government Engineering College</a></p>
		</div>
		<div class="col-md-6 col-sm-4 agileinfo-icons">
			<ul>
				<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
				<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
				<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
    <!-- footer -->
	<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				  Tech Edu
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 
<!--script for portfolio-->
	<script src="js/lightbox-plus-jquery.min.js"> </script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>
	<!--//script for portfolio-->


<script src="js/owl.carousel.js"></script>  
	<script>
		$(document).ready(function() { 
			$("#owl-demo").owlCarousel({
			  autoPlay: true, //Set AutoPlay to 3 seconds
			  items :3,
			  itemsDesktop : [640,2],
			  itemsDesktopSmall : [414,1],
			  navigation : true,
			  // THIS IS THE NEW PART
				afterAction: function(el){
					//remove class active
					this
					.$owlItems
					.removeClass('active')
					//add class active
					this
					.$owlItems //owl internal $ object containing items
					.eq(this.currentItem + 1)
					.addClass('active')
					}
			// END NEW PART
		 
			});
			
		}); 
	</script>
	
<!-- here starts scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/
										
				$().UItoTop({ easingType: 'easeOutQuart' });
									
				});
		</script>
		<!-- flexSlider -->
					<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
		<!-- //flexSlider -->

		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- /ends-smoth-scrolling -->
	<!-- //here ends scrolling icon -->
	
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	
<script src="js/SmoothScroll.min.js"></script>
  </body>
 </html> 
