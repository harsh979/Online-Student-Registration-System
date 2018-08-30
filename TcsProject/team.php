
<?php
	error_reporting(0);
	session_start();
?>
<?php
	if(isset($_SESSION['uid'])){
		if($_SESSION['type']=='student'){
			require_once('db.php');
			$course=$_SESSION['course'];
			$id=$_SESSION['id'];
			$res=mysql_query("SELECT * FROM $course WHERE id = '$id'");
			$userRow=mysql_fetch_array($res);
		}
	}
?>


<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from www.tpo.ecajmer.ac.in/tpoteam.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 May 2018 13:27:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="keywords" content="GECA, GEC Ajmer, ECA, engineering, engineering college,engineering college ajmer,Government College, Government Engineering College Ajmer,Ajmer,Govt. Engg. college,TPO,Training & Placement Cell,Tpo Cell, TPO GECA,tpcell, placement cell, placement ajmer, Placement, Placements, tpo team" />

    <title>Project</title>
	<link rel="icon" href="images/favicon.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!--<script src="js/jquery-1.11.1.min.js"></script>
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<script src="../code.jquery.com/jquery-1.12.4.js"></script>
	<script src="../code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	  $( function() {
		$( "#datepicker" ).datepicker({
				  changeMonth:true,
				  changeYear:true,
				  yearRange:"-100:+0",
				  dateFormat:"yy/mm/dd"
				 });
	  } );
	  </script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="background-color:#f2f2f2;">
<section id="header">
       <!-- Navigation -->

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

         <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <a class="navbar-brand" href="index.php">

                    <h1 class="hidden-lg sm-brand" ><img class="sm-logo" src="img/tplogo.png"/>
                    TPO<small><br/>GEC, AJMER</small></h1>
                    <h1 class="hidden-sm visible-lg lg-brand"><img class="lg-logo"  src="img/tplogo.png" />
                    <small id="small"><br></small>GOVERNMENT ENGINEERING COLLEGE, AJMER</h1>
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                     </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="font-size: 14px;">
                    <li class="dropdown">
                        <li><a href="index.php">Home</a></li>
                    </li>
					<li><a href="gallery.php">Gallery</a></li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">For Student <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="students_inst.php">General Instructions</a></li>
														<?php if (!isset($_SESSION['uid'])) { ?>
													 <li><a href="login.php">Login</a></li>
													 <li><a href="signup.php">Signup</a></li>
												 <?php } else if (isset($_SESSION['uid'])) { ?>
														 <li><a href="viewprofile.php">View viewprofile</a></li>
														 <li><a href="editprofile.php">Editprofile</a></li>
														 <li><a href="marks.php">Update Marks</a></li>
														 <li><a href="logout.php">LogOut</a></li>
												 <?php } ?>


                        </ul>
                    </li>

                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Departments <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="cs.php">CS&IT</a></li>
                            <li><a href="ec.php">Electronics&Communication</a></li>
							<li><a href="ee.php">Electrical ENGINEERING</a></li>

							<li><a href="eic.php">E.I.C</a></li>
							<li><a href="me.php">Mechanical</a></li>
							<li><a href="ce.php">Civil ENGINEERING</a></li>

                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.php" >Placments records</a></li>
                            <li><a href="team.php">Team</a></li>


                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav></section><br><br><br><br><br>
<style>
.team{
	padding-top:0;
}
.w3ls-effect {
    display: block;
    height: 250px;
    overflow: hidden;
    position: relative;
	-webkit-box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.65);
	-moz-box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.65);
	-o-box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.65);
	-ms-box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.65);
    box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.65);
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    opacity: 1;
    filter: alpha(opacity=100);
	margin-bottom:20px;
}
h4{
	margin-top : 0px;
	margin-bottom : 1px;
}

p{
	margin-top : 0px;
	margin-bottom : 1px;
}

.w3ls-effect img {
	width: 100%;
	height: inherit;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	-ms-transition: all 0.5s;
	-o-transition: all 0.5s;
	transition: all 0.5s;
}
.w3ls-effect:before {
	content: '';
	background-color: rgba(0, 0, 0, 0);
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	position: absolute;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	-ms-transition: all 0.5s;
	-o-transition: all 0.5s;
	transition: all 0.5s;
}
.w3ls-effect:hover:before {
	background-color: rgba(0, 0, 0, 0.8);
}
.w3ls-effect:hover .w3layouts-caption {
	-moz-transform: translateY(-100%);
	-o-transform: translateY(-100%);
	-ms-transform: translateY(-100%);
	-webkit-transform: translateY(-100%);
	transform: translateY(-100%);
	border-radius: 0 0 0 0;
}
.w3ls-effect:hover .wthree-icon {
	bottom: 25%;
	-moz-transform: translateY(-80%);
	-o-transform: translateY(-80%);
	-ms-transform: translateY(-80%);
	-webkit-transform: translateY(-80%);
	transform: translateY(-80%);
}
.w3ls-effect:hover .wthree-icon a {
	-webkit-animation-name: translate-transition;
	-webkit-animation-duration: 0.8s;
	-webkit-animation-timing-function: linear;
	-webkit-animation-iteration-count: 1;
	animation-name: translate-transition;
	animation-duration: 0.8s;
	animation-timing-function: linear;
	animation-iteration-count: 1;
}
.w3ls-effect .w3layouts-caption {
    background-color: rgba(0, 105, 99, 0.31);
    -webkit-transition: all cubic-bezier(0.27, 0.89, 0.95, 0.59) 0.5s;
    -moz-transition: all cubic-bezier(0.27, 0.89, 0.95, 0.59) 0.5s;
    -ms-transition: all cubic-bezier(0.27, 0.89, 0.95, 0.59) 0.5s;
    -o-transition: all cubic-bezier(0.27, 0.89, 0.95, 0.59) 0.5s;
    transition: all cubic-bezier(0.27, 0.89, 0.95, 0.59) 0.5s;
    padding: 10px;
    text-align: left;
    position: relative;
    z-index: 99;
	-webkit-border-radius: 25px 0 0 0;
	-moz-border-radius: 25px 0 0 0;
    border-radius: 25px 0 0 0;
}
.w3ls-effect .w3layouts-caption h4 {
    color: #fa5d07;
    font-size: 1.3em;
	letter-spacing:.5px;
}
.w3ls-effect .w3layouts-caption p {
    margin-top: 0.3em;
    font-size: 13px;
    letter-spacing: 1px;
    color: #fff;
}
.w3ls-effect .wthree-icon {
    bottom: 0;
    padding: 0 0 0 15px;
    left: 0;
    position: absolute;
    right: 0;
    text-align: left;
    overflow: hidden;
    z-index: 9;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    -moz-transform: translateY(1000%);
    -o-transform: translateY(1000%);
    -ms-transform: translateY(1000%);
    -webkit-transform: translateY(1000%);
    transform: translateY(1000%);
}
.social-icon .social-agileinfo li a{
	color:#fff!important;
}
</style>

	<!-- team -->
	<div class="team" id="team">
		<div class="agile_team_grids">
			<div class="col-md-12">
			<div class="row">
			<h2 style="text-align:center;">Team</h2>
			</div>
			</div>
		<div class="col-md-12">
		<div class="row">
			<div class="col-md-5"></div>
			<div class="col-md-2 agile_team_grid">
				<div class="w3ls-effect">
						<img src="img/harshit.jpg" alt="img">
						<a href="#" target="_blank"><div class="w3layouts-caption">
							<h4>Harshit Gupta</h4>
							<p>B.Tech 4the Year C.S.</p>
							<p>+91-7230853014</p>
						</div></a>
						<div class="wthree-icon social-icon">
							<ul class="social-agileinfo" style="list-style-type: none;">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
							</ul>
						</div>
				</div>
			</div>
			<div class="col-md-5"></div>
		</div><br><br></div>
		<br><br></div>
		<br>
		</div>
	<!-- //team -->
<br><div class="footer">
	    	<div class="container">

		    	<div class="row">
		    		<div class="col-footer col-md-6 col-sm-6 col-xs-12">
                        <h3 style="padding-bottom:10px;color:white;"><i class="fa fa-asterisk"></i> &nbsp;About</h3>
                        <p style="color:white;text-align:justify;">Government Engineering College, Ajmer, is generally referred to as ECA. It is a public state technical college located in Ajmer, India. It was established in 1997. The foundation stone was kept by Former Technical Education Ministor Kalicharan Saraf at BADALIYA. It is one of the leading engineering colleges in Rajasthan.</p>
                    </div>


		    		<div class="col-footer col-md-6 col-sm-6 col-xs-12">
		    			<h3 style="padding-bottom:15px;"><i class="fa fa-asterisk" style="color:white;"></i> &nbsp;Contact Us</h3>
		    			<p style="color:white">
							Government Engineering College Ajmer<br>
							Ajmer - 305025 <br>
	        				<b>Phone:</b> +91-1234567890<br/>
	        				<b>Phone:</b> +91-xxxxxxxxxx<br/>
	        				<b>Email:</b> <a href="mailto:xyz@gmail.com" target="_blank" class="extlinks" style="color:white">xyz@gmail.com</a>
	        			</p>
		    		</div>
		    	</div>
		    	<div class="col-md-12 col-sm-12 col-xs-12" align=center id="socialicons" style="border-top: 2px solid #497A9C;padding-top:10px;">
		    		<div class="col-md-6 col-sm-6 col-md-offset-3 col-xs-12 col-sm-offset-3" align=center style="margin-left:30%;">
					<div class="col-sm-2 col-xs-2"><a href="#" class="extlinks" target="_blank"><div style="color:white;font-size:20px;"><i class="fa fa-facebook-square"></i></div></a></div>
					<div class="col-sm-2 col-xs-2"><a href="#" class="extlinks" target="_blank"><div style="color:white;font-size:20px;"><i class="fa fa-twitter-square"></i></div></a></div>
					<div class="col-sm-2 col-xs-2"><a href="#" class="extlinks" target="_blank"><div style="color:white;font-size:20px;"><i class="fa fa-google-plus-square"></i></div></a></div>
					<div class="col-sm-2 col-xs-2"><a href="#" class="extlinks" target="_blank"><div style="color:white;font-size:20px;"><i class="fa fa-linkedin-square"></i></div></a></div>
		    		</div>
				</div>
				<div class="col-md-12 col-sm-12">
	    			<div class="footer-copyright"><a href="#" class="extlinks" style="color:white;">Copyright &copy; Harshit gupta</a></div>
	    		</div>
				<div class="col-md-12 col-sm-12" float=right >
					<div class="footer-copyright" ><a href="#" style="color:white"> Feedback</a> </div>
				</div>
	    		<style type="text/css">
	    		#socialicons h3 {
	    			border-bottom: none;
	    		}
	    		</style>
		    </div>
	    </div>
    <!-- jQuery -->
     <!--<script src="js/jquery.js"></script>-->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <!--<script src="js/jquery.flexisel.js"></script>-->

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2500 //changes the speed
    })
    </script>
</body>

<!-- Mirrored from www.tpo.ecajmer.ac.in/tpoteam.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 May 2018 13:27:55 GMT -->
</html>
