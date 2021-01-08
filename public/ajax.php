<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/vendor/autoload.php';

include_once("db-connect.php");




// ========================= START SUBSCRIBE FORM  =========================

if(isset($_POST['subscribe_email']))
{
	$email = $_POST['subscribe_email'];
	
	
	$stmt = $conn->prepare("SELECT * FROM subscribers WHERE email = ?");
	$stmt->execute(array($email));
	$row = $stmt->fetch();

	$count = $stmt->rowCount();

	// if count > 0 this mean the database contain record about this username
	
	if ($count > 0 )
	{
		  $state = 'error';
		  $response = ['state'=>$state];
		  echo json_encode($response);
	}
	else
	{
		
		$stmt = "INSERT INTO subscribers ( email,  Add_Date)
						VALUES('$email', now() )";

		$conn->exec($stmt);
		
		
		  $state = 'success';
		  $response = ['state'=>$state];
		  echo json_encode($response);
		
	}
	
	
}



// ========================= START SEND MESSAGE FROM CONTACT =========================

if(isset($_POST['msg']))
{
	
	
	  $fname 		= $_POST['fname'];
	  $lname 		= $_POST['lname'];
	  $name 		= $fname .' '. $lname;
	  $email 		= $_POST['email'];
	  $phone 		= $_POST['phone'];
	  $msg 			= $_POST['msg'];	
	  $msg2 		= filter_var($_POST['msg'],FILTER_SANITIZE_STRING);	
	
  	  $subject 	    = $_POST['subject'];
      $mail_to 		= 'elkholuy@gmail.com';
	
	

	$stmt = "INSERT INTO mails ( name, mail_from, phone, subject, msg, Add_Date)
									VALUES('$name', '$email', '$phone', '$subject', '$msg2', now() )";

	$conn->exec($stmt);
	
	
	 
		$mail = new PHPMailer;  
	    $mail->CharSet = "UTF-8";                             // Passing `true` enables exceptions
	try {

		//From email address and name
		$mail->setFrom($email,$name);

		$mail->addAddress($mail_to); //Recipient name is optional
		$mail->Subject  = $subject;

		$mail->isHTML(true);

		$mail->CharSet = 'UTF-8';
		$mail->Body = $msg;
		$mail->AltBody = "This is the plain text version of the email content";
		$mail->send();
		
		} catch (Exception $e) {
				echo 'Email could not be sent. Mailer Error: ', $mail->ErrorInfo;

		}  
	
	exit('success');
}



// ========================= START GET USER INFO  =========================

if(isset($_POST['get_user_info']))
{
	$token = $_POST['user_token'];
	$type  = $_POST['type'];
	$lang  = $_POST['lang'];
	
	
	$stmt = $conn->prepare("SELECT * FROM users WHERE remember_token = ?");
	$stmt->execute(array($token));
	$row = $stmt->fetch();

	$count = $stmt->rowCount();

	// if count > 0 this mean the database contain record about this username
	
	if ($count > 0 )
	{
		if($type == 'phone')
		{
			echo '<input class="form-control field" type="number" name="phone" value="'.$row['phone'].'" required>';
			echo '<small id="phone_error" class="form-text text-danger error"></small>';
			echo '<input type="hidden" class="target" value="userphone">';
			
		}
		else
		{
			echo '<input class="form-control field" type="text" name="company" value="'.$row['company'].'" required>';
			echo '<small id="company_error" class="form-text text-danger error"></small>';
			echo '<input type="hidden" class="target" value="usercompany">';
		}
	}
	else
	{
		if($lang == 'en')
		{
			echo '<p class="text-danger">Something went wrong, please try again later.</p>';
		}
		else
		{
			echo '<p class="text-danger">هناك شئ خاطئ، يرجى المحاولة فى وقت لاحق.</p>';
		}
		
	}
	
	
}
	


// ========================= START SHOW VIEW CART  =========================

if(isset($_POST['show_view_cart']))
{
	$order_id 	= $_POST['show_view_cart'];
	$lang 		= $_POST['lang'];
	

	if($lang == 'en')
	{
		?>
			<div class="view-cart get_cart" >
				<i class="fa fa-shopping-cart fa-15x"></i> View Cart
				<span class="badge badge-dark mx-1 items_number" >1</span>
			</div>

		<?php
	}
	else
	{
		?>
			<div class="view-cart get_cart">
				<i class="fa fa-shopping-cart fa-15x"></i> عرض عربة التسوق
				<span class="badge badge-dark mx-1 items_number" >1</span>
			</div>

		<?php
	}
}