<?php
	error_reporting(0);
	session_start();
?>
<?php
	if(isset($_SESSION['user_name'])){
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
														 <li><a href="viewprofile.php">View profile</a></li>
														 <li><a href="editprofile.php">Editprofile</a></li>
														 <li><a href="marks.php">Update Marks</a></li>
														 <li><a href="logout.php">Logout</a></li>
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
                            <li><a href="about.php">Placments records</a></li>
                            <li><a href="team.php">Team</a></li>


                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav></section><html>
<head>
<style>
div
{
text-style:justify;
}
font{
	color:black;
}
</style>
</head>

</html>


<br><br><br>
    <!-- Page Content -->
    <
	<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="margin-top:0px;"><font face="verdana">Instructions</font>

                </h1>

            </div>
        </div>
            <div class="col-lg-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <li> <h4 class="panel-title">
                               Do register on the portal to take part in the placements session.
                            </h4></li>
                        </div>
                  </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <li><h4 class="panel-title">
                               Keep your resume and profile updated on the portal.
                            </h4></li>
                        </div>
                     </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <li> <h4 class="panel-title">
                                Fill Correct details on the portal .
                            </h4></li>
                        </div>
                       </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <li> <h4 class="panel-title">

                            </h4></li>
                        </div>
                   </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <li><h4 class="panel-title">
                               Failure to do so will result in penalty in terms of TPO credits which may lead to your debarment from future placement activities.
                            </h4></li>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <li> <h4 class="panel-title">
                                Keep visiting the portal regularly.
                            </h4></li>
                        </div>
                      </div>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <li><h4 class="panel-title">
                              you have to follow the college rules.
                            </h4></li>
                        </div>
                     </div>
					 <div class="panel panel-default">
                        <div class="panel-heading">
                            <li><h4 class="panel-title">
                               Sleep and eat well before the placement drive.
                            </h4></li>
                        </div>
                     </div


                    <!-- /.panel -->
                </div>
                <!-- /.panel-group -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
  </div>
  </div>
    </section>


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
</html>
