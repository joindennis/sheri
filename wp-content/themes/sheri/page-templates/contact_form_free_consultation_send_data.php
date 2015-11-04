<?php 
session_start();
//echo $_POST['letters_code'];
// echo "<br>";
// echo $_POST['letters_code2'];
// strcasecmp($_SESSION['letters_code2'], $_POST['letters_code2']);

//die($_SESSION['6_letters_code']);

	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		  echo '<script type="text/javascript">window.location = "/status/consultation-form/error/"</script>';
	exit;} 

else {echo '';}
	

?>
<?php
/**
 * Template Name: CONSULTATION FORM
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


<?php

$fields_firstname=$_POST['fname'];
$fields_email=$_POST['email'];
$fields_phone=$_POST['phone'];
$select_leave_message = $_POST['leave_message'];
$select_reason = $_POST['reason'];
$select_hear = $_POST['hear'];
$fields_message=$_POST['message'];




 


//$to  = "zeppieri.janice@gmail.com";
//$to  = "dennis.khakimov@gmail.com";

$to  = "info@shfamilylaw.ca";  


$subject = "CONSULTATION FORM";

$message = '

<html>

   <head>

        <title>CONSULTATION FORM</title>

   </head>

    <body>

       <br>

        CONSULTATION FORM:<br><br>

First Name: '.$fields_firstname.'<br>
Email: '.$fields_email.'<br> 
Phone: '.$fields_phone.'<br>
May we leave you a message?:  '.$select_leave_message.'<br>
'.$select_reason.'<br>
'.$select_hear.'<br>
Message: '.$fields_message.'<br>

        
<br><br><br>
    </body>

</html>';        


$headers  = "Content-type: text/html; charset=UTF-8 \r\n";

$headers .= "From: http://shfamilylaw.ca <noreply@shfamilylaw.ca>\r\n";

if (

(($fields_firstname !='') ||
($fields_email !='')

)
)


{

mail($to, $subject, $message, $headers);

echo '<script type="text/javascript">window.location = "/status/consultation-form/success/"</script>';

exit;

}


else {

    echo '<script type="text/javascript">window.location = "/status/consultation-form/error/"</script>';

exit;}   

?> 




<?php get_footer(); ?>