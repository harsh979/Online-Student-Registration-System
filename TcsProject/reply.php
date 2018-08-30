
<?php
$con=mysqli_connect("localhost","root",'',"tcs");
require 'PHPMailer-master/PHPMailerAutoload.php';

if(isset($_POST['confirmation']))
{
$confirmemailid = $_POST['emailconfirmation'];
$qry="SELECT * FROM signup WHERE email_id='".$confirmemailid."'";
$run=mysqli_query($con,$qry);
$row=mysqli_num_rows($run);

if(!$row==0)
{
  $random=rand(100000,1000000);
  $new_password=$random;

  $email_password=$new_password;

  //$new_password=md5($new_password);

	$query2="UPDATE signup set
	 password='".$email_password."' where email_id='".$confirmemailid."'
							";
	$query3=mysqli_query($con,$query2);

	 $email = $confirmemailid;
	// $subject=$_POST['subject'];
	 $msg="Your CHANGE PASSWORD IS $email_password";
	$mail = new PHPMailer(); // the true param means it will throw exceptions on errors, which we need to catch

     $mail->IsSMTP(); // telling the class to use SMTP



  $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure   = 'ssl';
  $mail->Host       = "smtp.gmail.com"; // SMTP server

  $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
  $mail->IsHTML(true);                    // set the SMTP port for the GMAIL server
  $mail->Username   = "gnaman514@gmail.com"; // SMTP account username
  $mail->Password   = "naman1999@";        // SMTP account password

  $mail->SetFrom('gnaman514@gmail.com','ASDF');

  $mail->Subject = "HELLO" ;
  $mail->Body = $msg;// optional - MsgHTML will create an alternate automatically
 $mail->AddAddress($email);

if(!$mail->Send())
{
	echo "mail not sent";
}
else
{

	header('Location: index.php');
}

}
else {
	?>
	<script>
	alert("email does not find!!!");
	window.open('emailconfirmation.php','_self');
	</script>
	<?php
}
}
	?>
