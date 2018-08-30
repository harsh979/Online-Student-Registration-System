<?php
	error_reporting(0);
	session_start();
?>



<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
   <script src="css/bootstrap/jquery.js"></script>
   <script src="css/bootstrap/boot.js"></script>
   <link rel="stylesheet" href="css/bootstrap/boot.css">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="keywords" content="GECA, GEC Ajmer, ECA, engineering, engineering college,engineering college ajmer" />

    <title>Project</title>
	<link rel="icon" href="images/favicon.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!--<!--script src="js/jquery-1.11.1.min.js"></script-->
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<!--script src="../code.jquery.com/jquery-1.12.4.js"></script-->
	<!--script src="../code.jquery.com/ui/1.12.1/jquery-ui.js"></script-->
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


	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<!--script type="text/javascript" src="engine0/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section --></head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="background-color:#f2f2f2;">
<section id="header">
       <!-- Navigation -->

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="container">


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
<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <!--ol class="carousel-indicators"  id="indexcaruosel">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol-->

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        <div class="item active">
                <div class="fill" style="background-image:url('img/t1.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item ">
                <div class="fill" style="background-image:url('img/t2.jpg');"></div>
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/t3.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    




<section id="main-content"  style="font-color:black;">

    <div class="container">
        <div class="row">
            <div class="col-md-3" id="leftCol">
              <br>
            </div>

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
    <section id="page-content">



        <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="margin-top:0px;"><font face="verdana">About GECA</font></h1>

                </div>
            </div>
           <div class="row">

            <div class="col-lg-6">
                <img class="img-responsive" src="images/5.jpg"  alt="">
            </div>
           <div class="col-md-6">
                <h2 style="margin-top:0px;"><font face="verdana">About Institute</font></h2>
                <p><font face="verdana">Government Engineering College Ajmer is referred erstwhile as ECA. It is an autonomous institution of Government of Rajasthan located in Ajmer(India) established in 1997. The campus is built on around 300 acres of land and is surrounded by beautiful Aravali. The campus has many buildings consisting of Main Building, First Year and Electronics Block, Civil Engineering Block, Electrical Engineering Block, Mechanical Workshop, Central Library and Guest House.</p><p> These buildings constitute the Central Computer Lab, Mechanical workshops, CAD/CAM lab, Electrical Workshops/labs, Electronics Lab, Chemistry Lab and the Physics Lab, English Language Lab among various other laboratories. The huge Computer Centre has a capacity of more than 100 computers and central library has more than 20,000 books. There is congenial atmosphere in the campus where students and teachers work in harmony.</font></p></p>
                <p><font face="verdana">Government Engineering College Ajmer draws on a reserve of extraordinary talent as a by-product of its selective, stringent and consequently, amazingly successful JEE-Main for admissions to all the UG programmes Graduate Aptitude Test in Engineering (GATE) is the certain for admissions to all PG programmes And others post graduate programs like MBA & MCA are also recruiting. Arguably the toughest exams in their rank.</font> </p>

                </div>
                <div class="col-lg-12">
                <p><font face="verdana">In REAP 2017 more than 10000 students applied for about 4000 govt seats. GECA has an acceptance rate of less than 12.5% as for undergraduates. In GATE 2017, more than 9,00,000 students applied for  seats. Selection of M.Tech Students is through GATE is the certain. With its challenging problems that test the depth of the aspirants knowledge, the surprise element of the continually varying pattern and the immense competition, clearing the REAP is considered the pinnacle of achievement for a student in all over India. The pool of talent thus embraces the best and the brightest from across the length and breadth of the nation. People from the most diverse backgrounds come together in their quest to extend the frontiers of scientific and technological knowledge and in the process forge life-long friendships and inculcate the spirit of teamwork and dedication, which gives them a head start in terms of their careers in the distant corners of the globe.</font> </p>

            </div>
        </div>
    </section>

    <br>
</div></section>




            </div>
        </div><!--row-->
    </div>

</section>
<br/><br/>
<section>
<div class="container">
    <div class="row">



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

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrolling-nav.js"></script>


    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2500 //changes the speed
    })
    </script>


 </script>
</body>
</html>
