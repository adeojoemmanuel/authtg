<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


class Mailer{
    var $report;
    var $email;
    function __construct($email, $name){
        $this->email = $email;
        $sender = 'no_reply@tailorgang.io'; 
        $sender_name = 'Tailorgang Online Market';
        $replyTo = "no_reply@tailorgang.io";
        $recipient = $email;
        $recipient_name = $name;
        $subject = "Tailorgang Account Verification";
        $host = 'mail.tailorgang.io';
        $username = 'no_reply@tailorgang.io';
        $password = 'salvation00'; // your password
        // Send the mail
        $html_body = '    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Tailorgang verification email</title>
      <style type="text/css">
      body {
       padding-top: 0 !important;
       padding-bottom: 0 !important;
       padding-top: 0 !important;
       padding-bottom: 0 !important;
       margin:0 !important;
       width: 100% !important;
       -webkit-text-size-adjust: 100% !important;
       -ms-text-size-adjust: 100% !important;
       -webkit-font-smoothing: antialiased !important;
     }
     .tableContent img {
       border: 0 !important;
       display: block !important;
       outline: none !important;
     }
     a{
      color:#382F2E;
    }

    p, h1{
      color:#382F2E;
      margin:0;
    }
 p{
      text-align:left;
      color:#999999;
      font-size:14px;
      font-weight:normal;
      line-height:19px;
    }

    a.link1{
      color:#382F2E;
    }
    a.link2{
      font-size:16px;
      text-decoration:none;
      color:#ffffff;
    }

    h2{
      text-align:left;
       color:#222222; 
       font-size:19px;
      font-weight:normal;
    }
    div,p,ul,h1{
      margin:0;
    }

    .bgBody{
      background: #ffffff;
    }
    .bgItem{
      background: #ffffff;
    }
	
@media only screen and (max-width:480px)
		
{
		
table[class="MainContainer"], td[class="cell"] 
	{
		width: 100% !important;
		height:auto !important; 
	}
td[class="specbundle"] 
	{
		width:100% !important;
		float:left !important;
		font-size:13px !important;
		line-height:17px !important;
		display:block !important;
		padding-bottom:15px !important;
	}
		
td[class="spechide"] 
	{
		display:none !important;
	}
	    img[class="banner"] 
	{
	          width: 100% !important;
	          height: auto !important;
	}
		td[class="left_pad"] 
	{
			padding-left:15px !important;
			padding-right:15px !important;
	}
		 
}
	
@media only screen and (max-width:540px) 

{
		
table[class="MainContainer"], td[class="cell"] 
	{
		width: 100% !important;
		height:auto !important; 
	}
td[class="specbundle"] 
	{
		width:100% !important;
		float:left !important;
		font-size:13px !important;
		line-height:17px !important;
		display:block !important;
		padding-bottom:15px !important;
	}
		
td[class="spechide"] 
	{
		display:none !important;
	}
	    img[class="banner"] 
	{
	          width: 100% !important;
	          height: auto !important;
	}
	.font {
		font-size:18px !important;
		line-height:22px !important;
		
		}
		.font1 {
		font-size:18px !important;
		line-height:22px !important;
		
		}
}

    </style>
<script type="colorScheme" class="swatch active">
{
    "name":"Default",
    "bgBody":"ffffff",
    "link":"382F2E",
    "color":"999999",
    "bgItem":"ffffff",
    "title":"222222"
}
</script>
  </head>
  <body paddingwidth="0" paddingheight="0"   style="padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;" offset="0" toppadding="0" leftpadding="0">
    <table bgcolor="#ffffff" width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent" align="center"  style="font-family:Helvetica, Arial,serif;">
  <tbody>
    <tr>
      <td><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff" class="MainContainer">
  <tbody>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="40">&nbsp;</td>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
  <!-- =============================== Header ====================================== -->   
    <tr>
    	<td height="75" class="spechide"></td>
        
        <!-- =============================== Body ====================================== -->
    </tr>
    <tr>
      <td class="movableContentContainer " valign="top">
        <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        	<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr>
                            <td valign="top" align="center">
                              <div class="contentEditableContainer contentImageEditable">
                                <div class="contentEditable">
                                  <img src="https://ik.imagekit.io/nugitech/wp-content/uploads/2018/08/194X47.png" width="251"  alt="" data-default="placeholder" data-max-width="560">
                                </div>
                              </div>
                            </td>
                          </tr>
                        </table>
        </div>
        <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        	<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr><td height="55"></td></tr>
                          <tr>
                            <td align="left">
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" align="center">
                                  <h2 >Thank you for signing up to the Tailorgang Online Store! </h2>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height="15"> </td></tr>

                          <tr>
                            <td align="left">
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" align="center">
                                  <p >
                                    To get you ready for the experience, please kindly verify your email '.$email.'. Copy this link: <a target="_blank" href="#" class="link1" >'.$link.'</a> to your browser to verify your account. 
                                    <br>
                                    <br>
                                    If you have any Trouble doing so, please email us at help@tailorgang.io or call our team on +234. 
                                    <br>
                                    <br>
                                    Thank you for Joining our community of Tailors, Customers and vendors!,
                                    <br>
                                    <span style="color:#222222;">The Tailorgang Team</span>
                                  </p>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height="55"></td></tr>

                          <tr>
                            <td align="center">
                              <table>
                                <tr>
                                  <td align="center" bgcolor="#289CDC" style="background:#894291; padding:15px 18px;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;">
                                    <div class="contentEditableContainer contentTextEditable">
                                      <div class="contentEditable" align="center">
                                        <a target="_blank" href="#" class="link2" style="color:#ffffff;">Verify your Account</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr><td height="20"></td></tr>
                        </table>
        </div>
        <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td height="65">
    </tr>
    <tr>
      <td  style="border-bottom:1px solid #DDDDDD;"></td>
    </tr>
    <tr><td height="25"></td></tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" class="specbundle"><div class="contentEditableContainer contentTextEditable">
                                      <div class="contentEditable" align="center">
                                        <p  style="text-align:left;color:#CCCCCC;font-size:12px;font-weight:normal;line-height:20px;">
                                          <span style="font-weight:bold;">Tailorgang</span>
                                          <br>
                                          Calabar, Nigeria
                                          <br>
                                          <a class="link1" class="color:#382F2E;" style="text-decoration: none;" >Uninterested? Ignore email</a>
                                          <br>
                                        </p>
                                      </div>
                                    </div></td>
      <td valign="top" width="30" class="specbundle">&nbsp;</td>
      <td valign="top" class="specbundle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="92" style="vertical-align: middle">
                                    <div class="contentEditableContainer contentFacebookEditable">
                                      <div class="contentEditable">
                                        <a target="_blank" href="#"><img src="https://play.google.com/intl/en_us/badges/images/badge_new.png" width="92" alt="facebook icon" data-default="placeholder" data-max-width="92" data-customIcon="true"></a>
                                      </div>
                                    </div>
                                  </td>
      <td valign="top" width="16">&nbsp;</td>
      <td valign="top" width="92" style="vertical-align: middle">
                                    <div class="contentEditableContainer contentTwitterEditable">
                                      <div class="contentEditable">
                                        <a target="_blank" href="#"><img src="https://developer.apple.com/app-store/marketing/guidelines/images/badge-download-on-the-app-store.svg" width="92" alt="twitter icon" data-default="placeholder" data-max-width="92" data-customIcon="true"></a>
                                      </div>
                                    </div>
                                  </td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr><td height="88"></td></tr>
  </tbody>
</table>

        </div>
        
        <!-- =============================== footer ====================================== -->
      
      </td>
    </tr>
  </tbody>
</table>
</td>
      <td valign="top" width="40">&nbsp;</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
      </body>
      </html>

';
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = $host;  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = $username;                 // SMTP username
            $mail->Password = $password;                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            $mail->setFrom($sender, $sender_name);
            $mail->addAddress($recipient, $recipient_name);     // Add a recipient
            $mail->addReplyTo($sender, 'Do Not Reply');
            $mail->isHTML(true);                                  
            $mail->Subject = $subject;
            $mail->Body    = $html_body;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->send();
            $this->report = 1;
        } catch (Exception $e) {
            $this->report = 0;
        }
        
    }
    function getReport(){
        return $this->report;
    }
} 
?>

