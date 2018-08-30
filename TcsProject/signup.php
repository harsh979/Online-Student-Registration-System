<!DOCTYPE
<html>
<head>
	<title>Sign up</title>
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

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

</head>
<body><section id="header">
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
																		<li><a href="login.php">Login</a></li>
																		<li><a href="signup.php">Sign up</a></li>


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

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav></section>


<style>

	p{

		color: red;

		margin: 0;

	}
	.contact-form {
		margin: 3em 0;
	}
	select {
	  display: inline-block;
	  background: none;
	  border:solid 1px #999999;
	  border-radius:10px;
	  width: 100%;
	  outline: none;
	  padding:.5em;
	  font-size: .9em;
	  color: #000000;
	  margin-bottom: 1.5em;
	}

	.contact-form input[type="password"] {
	  display: inline-block;
	  background: none;
	  border:solid 1px #999999;
	  width: 100%;
	  border-radius:10px;
	  outline: none;
	  padding:.5em;
	  font-size: .9em;
	  color: #000000;
	  margin-bottom: 1.5em;
	}

	.contact-form input[type="file"] {
	  display: inline-block;
	  background: none;
	  border:solid 1px #999999;
	  border-radius:10px;
	  width: 100%;
	  outline: none;
	  padding:.5em;
	  font-size: .9em;
	  color: #000000;
	  margin-bottom: 1.5em;
	}

	.contact-form input[type="number"] {
	  display: inline-block;
	  background: none;
	  border:solid 1px #999999;
	  border-radius:10px;
	  width: 100%;
	  outline: none;
	  padding:.5em;
	  font-size: .9em;
	  color: #000000;
	  margin-bottom: 1.5em;
	}

	input[type=text]:focus,input[type=number]:focus,input[type=password]:focus,input[type=email]:focus,input[type=file]:focus,select:focus, textarea:focus {
	  box-shadow: 0 0 10px rgba(81, 203, 238, 5);
	  border: 2px solid rgba(81, 203, 238, 5);
	}

	.contact-form input[type="text"] {
	  display: inline-block;
	  background: none;
	  border:solid 1px #999999;
	  width: 100%;
	  outline: none;
	  border-radius:10px;
	  padding:.5em;
	  font-size: .9em;
	  color: #000000;
	  margin-bottom: 1.5em;
	}
	.contact-form input[type="email"] {
	  display: inline-block;
	  background: none;
	  border:solid 1px #999999;
	  width: 100%;
	  border-radius:10px;
	  outline: none;
	  padding:.5em;
	  font-size: .9em;
	  color: #000000;
	  margin-bottom: 1.5em;
	}
	.contact-form textarea {
	  display: inline-block;
	  background: none;
	  border:solid 1px #999999;
	  width: 100%;
	  border-radius:10px;
	  outline: none;
	  padding:.5em;
	  font-size: .9em;
	  color: #000000;
	  margin-bottom: 1.5em;
	  min-height:100px;
	}
	button.btn1{
		color: #ffffff;
		font-size: 1em;
		padding: .5em 1em;
		border: solid 1px #fbd232;
		text-align: center;
		text-decoration: none;
		background: #023253;
		width:100%;
		border-radius:10px;
		transition: 0.5s all;
		-webkit-transition: 0.5s all;
		-moz-transition: 0.5s all;
		-o-transition: 0.5s all;
		-ms-transition: 0.5s all;
	}

</style>



						<div class="header-bottom">

			<div class="container">

				<div class="wthree-heading">

					<h2>Student Login</h2>

				</div>

			</div>

		</div>

	</div>

	<!-- //banner -->



	<div class="container" style="margin-top:40px;">

		<div class="contact-form">

				<form action="" method="post">

					<div class="row"  class="form-group">

						<h1 style="text-align:center;">STUDENT SIGN UP</h1>

						<div class="col-md-2"></div>

						<div class="col-md-8">

							<select name="lcourse" id="size" required="">

								<option value="">Select course</option>

								<option value="btech">B.Tech.</option>


							</select>

							<input type="text" placeholder="Student Name" name="user" value="" required="">

							<input type="text" placeholder="Father's name" name="f_name" value="" required="">

							<input type="text" placeholder="Mother's name" name="m_name" value="" required="">

              <input class="form-control" id="date" name="date" placeholder="YYY/MM/DD" type="text"/>

							<input type="text" placeholder="Permanent address" name="p_address" value="" required="">

              <input type="text" placeholder="Local" address" name="l_address" value="" required="">

              <input type="email" placeholder="Email id" name="email" value="" required="">

              <input type="text" class="form-control" id="Phone" placeholder="mobile no" name="mob_no" value="" maxlength="11" required="">

              <input type="text" placeholder="10th percentage / CGPA" name="per" value="" required="">
                            <input type="text" placeholder="Year of passing(10th)" name="yop" value="" required="">
                            <input type="text" placeholder="12th percentage / CGPA" name="perr" value="" required="">

                            <input type="text" placeholder="Year of passing(12th)" name="yopp" value="" required="">
                            <input type="text" placeholder="Jee maain score" name="jee" value="" required="">
                            <input type="text" placeholder="enter your password" name="password" value="" required="">
                            <button class="btn2" name="signup" type="submit">Sign up</button>

						</div>

					</div>

				</form>

		</div>

	</div><br>



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


<?php

include('db.php');

if(isset($_POST['signup']))
{
$course = $_POST['lcourse'];
$username = $_POST['user'];
$f_name = $_POST["f_name"];
$m_name = $_POST["m_name"];
$date = $_POST['date'];
$p_address = $_POST['p_address'];
$l_address = $_POST['l_address'];
$email = $_POST['email'];
$mob = $_POST['mob_no'];
$per = $_POST['per'];
$yop = $_POST['yop'];
$perr= $_POST['perr'];
$yopp = $_POST['yopp'];
$jee = $_POST['jee'];
$pass = $_POST['password'];



 $sql = "INSERT INTO `signup`(`course`, `student_name`, `father_name`, `mother_name`, `dob`, `permanent_address`, `local_address`, `email_id`, `mobile_no`, `percentage/cgpa`, `year_passing(10th)`, `peercentage/cgpa`, `year_passing(12th)`, `Jee_main_score`,`password`) VALUES ('$course','$username', '$f_name', '$m_name','$date','$p_address','$l_address','$email','$mob','$per','$yop','$perr','$yopp','$jee','$pass')";
if(mysqli_query($con, $sql)){
    ?>
       <script>
		        alert ("Records added successfully and your username is your name");
		      	setTimeout(function(){window.location.href="login.php"},1000);
		</script>
			<?php
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

 }
// close connection
mysqli_close($con);

?>
