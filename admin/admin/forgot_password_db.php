<?php
	require_once 'include/connection.php';
	// session_start();
	use PHPMailer\PHPMailer\PHPMailer; 
	use PHPMailer\PHPMailer\Exception;
	// Base files 
	require_once 'asset/PHPMailer/src/Exception.php';
	require_once 'asset/PHPMailer/src/PHPMailer.php';
	require_once 'asset/PHPMailer/src/SMTP.php';

	if(isset($_POST['forgot_password'])){
		$email = $_POST['email'];
		if($email){
			$register = "SELECT * FROM admin WHERE email='".$email."'";
			$register_qry = mysqli_query($con,$register);
			$row_count = mysqli_num_rows($register_qry);

			if($row_count == 0){
				$_SESSION['error_msg'] = 'Wrong Email...';
				echo "<script> window.location='forgot_password.php';</script>";
			}else{
				$passwordlength= 10;
				$symbols= '~!@#$*%`?[]{};<>?.,_-()';
				$symbolscount= strlen($symbols);
				$randomposition= mt_rand(0, $symbolscount - 1);
				$password= substr($symbols, $randomposition, 1);
				$password .= chr(mt_rand(48,57));
				$password .= chr(mt_rand(65,90));

				while (strlen($password) < $passwordlength){
					$password .= chr(mt_rand(97,122));
				}

				$password = str_shuffle($password);
				$subject = 'Forgot Password';
		    $message = '
				<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
			    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
			        style="@import font-family: "Open Sans", sans-serif;">
		        <tr>
	            <td>
                <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td style="height:80px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td style="height:20px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>
                      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                          style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                        <tr>
                          <td style="height:40px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td style="padding:0 35px;">
                            <h1 style="color:#1e1e2d; font-weight:500;argin:0;font-size:32px;font-family:"Rubik",sans-serif;">You have requested to reset your password</h1>
                            <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:2px solid #cecece; width:130px; font-size:18px;"><b>'.$password.'</b></span>
                            <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                            We cannot simply send you your Old Password. 
                            New Password has been generated for you. 
                            </p>
                            <a href="http://localhost/company/icodermgt/admin/login.php"style="background:#20e277;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;">Login Here</a>
                            <td></td>
                          </td>
                        </tr>
                        <tr>
                          <td style="height:40px;">&nbsp;</td>
                        </tr>
                      </table>
                    </td>
                    <tr>
                      <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td style="height:80px;">&nbsp;</td>
                    </tr>
                </table>
	            </td>
		        </tr>
			    </table>
				</body>';					
				$mail = new PHPMailer(true);                              
				try {
				  $mail->isSMTP();                                            //Send using SMTP
					$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
					$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
					$mail->Username   = 'prakashdabhi6292@gmail.com';                     //SMTP username
					$mail->Password   = 'hvqvncdzeijkhypv';                               //SMTP password
					$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
					$mail->Port       = 465;     

			    $mail->setFrom('testmail@yopmail.com', ""); // sender's email and name
			    $mail->addAddress($email);  // receiver's email and name
			    
			    $mail->isHTML(true);  
			    $mail->Subject = $subject;
			    $mail->Body    = $message;

			    $mail->send();
			    $register = "SELECT * FROM admin WHERE email='".$email."'";
					$register_qry = mysqli_query($con,$register);
					$row_count = mysqli_num_rows($register_qry);
						if($row_count > 0){
							$upd_qry  = "update admin set password='$password' where email='$email'";
   						$update   = mysqli_query($con,$upd_qry);
   					}
				  $_SESSION['success_msg'] = 'Mail Sent';
				  echo "<script>window.location='login.php';</script>";
				} catch (Exception $e) { // handle error.
				  $_SESSION['error_msg'] = 'Mail Not Sent'; 
				  echo "<script> window.location='forgot_password.php';</script>";
				} 
			}
		}
	}
?>