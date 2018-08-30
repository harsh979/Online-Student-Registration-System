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
							<li><a href="#" target="#">Civil ENGINEERING</a></li>

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
    </nav></section><html>



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

        <!-- Footer -->


<section id="main-content"  style="font-color:black;">

<div class="col-md-12" style="margin-top:60px">
<h1><center>Civil Engineering</center></h1>
 <h2>About Us</h2>
     Civil engineering is a professional engineering discipline that deals with the design, construction, and maintenance of the physical and naturally built environment, including works like roads, bridges, canals, dams, and buildings. Civil engineering is the second-oldest engineering discipline after military engineering, and it is defined to distinguish non-military engineering from military engineering. It is traditionally broken into several sub-disciplines including architectural engineering, environmental engineering, geotechnical engineering, control engineering, structural engineering, earthquake engineering, transportation engineering, forensic engineering, municipal or urban engineering, water resources engineering, materials engineering, wastewater engineering, offshore engineering, facade engineering, quantity surveying, coastal engineering, construction surveying, and construction engineering. Civil engineering takes place in the public sector from municipal through to national governments, and in the private sector from individual homeowners through to international companies.

In general, civil engineering is concerned with the overall interface of human created fixed projects with the greater world. General civil engineers work closely with surveyors and specialized civil engineers to design grading, drainage, pavement, water supply, sewer service,dams, electric and communications supply. General civil engineering is also referred to as site engineering, a branch of civil engineering that primarily focuses on converting a tract of land from one usage to another. Site engineers spend time visiting project sites, meeting with stakeholders, and preparing construction plans. Civil engineers apply the principles of geotechnical engineering, structural engineering, environmental engineering, transportation engineering and construction engineering to residential, commercial, industrial and public works projects of all sizes and levels of construction.

h2>Program Outcomes (POs)</h2>

						 <p>Engineering Graduates will be able to:<br><br>

							<b>PO1. Engineering knowledge:</b> Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems.<br><br>

							<b>PO2. Problem analysis:</b> Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.<br><br>

							<b>PO3. Design/development of solutions:</b> Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations.<br><br>

							<b>PO4. Conduct investigations of complex problems:</b> Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.<br><br>

							<b>PO5. Modern tool usage:</b> Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.<br><br>

							<b>PO6. The engineer and society:</b> Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.<br><br>

							<b>PO7. Environment and sustainability:</b> Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.<br><br>

							<b>PO8. Ethics:</b> Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.<br><br>

							<b>PO9. Individual and team work:</b> Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.<br><br>

							<b>PO10. Communication:</b> Communicate effectively on complex engineering activities with the engineering community and with society at large, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.<br><br>

							<b>PO11. Project management and finance:</b> Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work, as a member and leader in a team, to manage projects and in multidisciplinary environments.<br><br>

							<b>PO12. Life-long learning:</b> Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change.</p>




							</div>
</section>

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
