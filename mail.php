<?php
    	function protect($field){
      		$string=htmlentities($field,ENT_QUOTES);
      		$string= mysql_real_escape_string(trim(strip_tags(addslashes($field))));
      		return $string;
    	}
    	$fullname =  protect($_POST['fullname']);
    	// var_dump($fullname);
    	$bot = protect($_POST['bots']);
    	if (isset($_POST['mycopy'])) {
    		$mycopy = protect($_POST['mycopy']);
    		// var_dump($mycopy);
    	}else{
    		$mycopy = 'no';
    	}
    	if(empty($bot)){ 
        	require 'phpmailer/class.phpmailer.php';
	        try {
	            $mail = new PHPMailer(true); //New instance, with exceptions enabled

	            $fullname =  protect($_POST['fullname']);
	            $email = protect($_POST['email']);
	            $message = protect($_POST['message']);
	            // var_dump($fullname,$email,$message);
	            // var_dump($mycopy);
	            $to = 'weezykon@penherz.com';
	            $subject = "$fullname Just Filled the Contact Form, check what he has for you.";

	            $mail->AddAddress($to);
	            $mail->From       = $email;
	            $mail->FromName   = $fullname;
	            $mail->Subject  = $subject;

	            $body= "
	                <html>
	                    <head>
	                        <title>Contact</title>
	                        <style>
	                        </style>
	                    </head>
	                    <body>
	                        <div style='width:100%'>
	                        	<h3>$fullname Contact Form</h3>
	                            <table width='100%' height='462' cellpadding='10' cellspacing='0'>
								  	<tr bgcolor='#fff'>
								    	<td height='74' colspan='2' align='center' valign='middle'>
											<img src='http://weezykon.penherz.com/img/log.png' width='300px' />
								    	</td>
								  	</tr>
								  	<tr bgcolor='#AA0078' style='color:#FAFAFA;'>
								    	<td width='235' height='58' style='padding-left:20px;'><b>$fullname</b></td>
								    	<td width='263' bgcolor='#AA0078'><b>$email</b></td>
								  	</tr>
								  	<tr bgcolor='#FAFAFA'>
								    	<td colspan='2' valign='top' style='padding:20px;min-height:250px !important;'>$message</td>
								  	</tr>
								  	<tr bgcolor='#AA0078' style='color:#fff;'>
								    	<td height='66' colspan='2' align='center'>Copyright &copy; Weezykon 2017</td>
								  	</tr>
								</table>
	                        </div>    
	                    </body>
	                </html>
	            ";
	            $body = preg_replace('/\\\\/','', $body); //Strip backslashes
	            // var_dump($body);
	            $mail->MsgHTML($body);
	            // var_dump($mail->MsgHTML($body));
	            $mail->IsSMTP();                           // tell the class to use SMTP
	            $mail->SMTPAuth   = true;                  // enable SMTP authentication
	            $mail->Port       = 465;                    // set the SMTP server port
	            $mail->Timeout    = 5;                    // Timeout
	            $mail->Host       = "ssl://smtp.googlemail.com"; // SMTP server
	            $mail->Username   = "iamweezykon@gmail.com";     // SMTP server username
	            $mail->Password   = "konvictmuzic";            // SMTP server password

	            $mail->isSendmail();  // tell the class to use Sendmail
	            $mail->AddReplyTo("no-reply@penherz.com");
	            $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	            $mail->WordWrap   = 80; // set word wrap
	            $mail->IsHTML(true); // send as HTML
	            $mail->Send();
		    	$feedback = "<div class='alert alert-success alert-bold-border fade in alert-dismissable'>
				    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
				        $fullname, Thanks for contacting Me, I would get back to you soon.  
				      </div>";
			    echo $feedback;
	        } catch (phpmailerException $e) {
	            // echo $e->errorMessage();
	        }
	       //  if ($mycopy == 'yes') {
		      //   try {
		      //       $mail = new PHPMailer(true); //New instance, with exceptions enabled

		      //       $fullname =  protect($_POST['fullname']);
		      //       $email = protect($_POST['email']);
		      //       $message = protect($_POST['message']);
		      //       // var_dump($fullname,$email,$message);
		      //       // var_dump($mycopy);
		      //       $to = $email;
		      //       $subject = "$fullname Just Filled the Contact Form, check what he has for you.";

		      //       $mail->AddAddress($to);
		      //       $mail->From       = $email;
		      //       $mail->FromName   = $fullname;
		      //       $mail->Subject  = $subject;

		      //       $body= "
		      //           <html>
		      //               <head>
		      //                   <title>Contact</title>
		      //                   <style>
		      //                   </style>
		      //               </head>
		      //               <body>
		      //                   <div style='width:100%'>
		      //                   	<h3>$fullname Contact Form</h3>
		      //                       <table width='100%' height='462' cellpadding='10' cellspacing='0'>
								// 	  	<tr bgcolor='#fff'>
								// 	    	<td height='74' colspan='2' align='center' valign='middle'>
								// 				<img src='http://weezykon.penherz.com/img/log.png' width='300px' />
								// 	    	</td>
								// 	  	</tr>
								// 	  	<tr bgcolor='#AA0078' style='color:#FAFAFA;'>
								// 	    	<td width='235' height='58' style='padding-left:20px;'><b>$fullname</b></td>
								// 	    	<td width='263' bgcolor='#AA0078'><b>$email</b></td>
								// 	  	</tr>
								// 	  	<tr bgcolor='#FAFAFA'>
								// 	    	<td colspan='2' valign='top' style='padding:20px;min-height:250px !important;'>$message</td>
								// 	  	</tr>
								// 	  	<tr bgcolor='#AA0078' style='color:#fff;'>
								// 	    	<td height='66' colspan='2' align='center'>Copyright &copy; Weezykon 2017</td>
								// 	  	</tr>
								// 	</table>
		      //                   </div>    
		      //               </body>
		      //           </html>
		      //       ";
		      //       $body = preg_replace('/\\\\/','', $body); //Strip backslashes
		      //       var_dump($body);
		      //       $mail->MsgHTML($body);

		      //       $mail->IsSMTP();                           // tell the class to use SMTP
		      //       $mail->SMTPAuth   = true;                  // enable SMTP authentication
		      //       $mail->Port       = 465;                    // set the SMTP server port
		      //       $mail->Timeout    = 5;                    // Timeout
		      //       $mail->Host       = "ssl://smtp.googlemail.com"; // SMTP server
		      //       $mail->Username   = "iamweezykon@gmail.com";     // SMTP server username
		      //       $mail->Password   = "konvictmuzic";            // SMTP server password

		      //       $mail->isSendmail();  // tell the class to use Sendmail
		      //       $mail->AddReplyTo("no-reply@penherz.com");
		      //       $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		      //       $mail->WordWrap   = 80; // set word wrap
		      //       $mail->IsHTML(true); // send as HTML
		      //       $mail->Send();
			    	// $feedback = "<div class='alert alert-success alert-bold-border fade in alert-dismissable'>
					   //  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					   //      $fullname, Thanks for contacting Me, I would get back to you soon.  
					   //    </div>";
				    // echo $feedback;
		      //   } catch (phpmailerException $e) {
		      //       // echo $e->errorMessage();
		      //   }
	       //  }
    	}
?>