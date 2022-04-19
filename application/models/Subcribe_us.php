<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Subcribe_us extends CI_Model
{
    function __construct()
    {
        parent::__construct();
       $this->load->helper('url');
    }
    
    public function subscriber_user($email){
        $date =date("Y-n-d");
        $to =$email;
        $date =date("Y-n-d");
              $htmlContent='<!doctype html>
<html class="fixed">
<head>
<style type="text/css">
@media only screen and (max-width: 600px) {
		.main { width: 320px !important; }.top-image { width: 100% !important;}
		.inside-footer { width: 320px !important; }
		table[class="contenttable"] {  width: 320px !important; text-align: left !important;}
        td[class="force-col"] { display: block !important; }
	     td[class="rm-col"] { display: none !important; }
		.mt { margin-top: 15px !important; }
		*[class].width300 {width: 255px !important;}
		*[class].block {display:block !important;}
		*[class].blockcol {display:none !important;}
		.emailButton{ width: 100% !important;}
            
       .emailButton a {display:block !important; font-size:18px !important;
        }
    }
</style>
</head>
            
  <body link="#FC5050" vlink="#004CDA" alink="#FC5050">
            
<table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">
		<tr>
			<td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
				<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
					<tr>
						<td colspan="4" valign="top" class="image-section" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff;border-bottom: 4px solid #FC5050;text-align:center;">
							<a href="https://www.tirupatipackersmovers.com/"><img class="top-image" src="'.base_url().'public/tirupati/img/logo.png" style="line-height: 1;" alt="Tirupati Packers and Movers "></a>
						</td>
					</tr>
					<tr>
						<td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td class="head-title" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 28px;line-height: 34px;font-weight: bold; text-align: center;">
										<div  class="mktEditable" id="main_title"  text-align: center;>
									   Thank you for subscribe to our newsletter!
										</div>
									</td>
								</tr>
							    
								<tr>
									<td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"></td>
								</tr>
								<tr>
									<td class="grey-block" style="border-collapse: collapse;border: 0;margin: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff; text-align:center;">
									<div class="mktEditable" id="cta">
										<strong>Date:</strong> '.$date.'<br>
										    
			                       	</div>
									</td>
								</tr>
								<tr>
									<td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 15px 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 21px;">
										<hr size="1" color="#eeeff0">
									</td>
								</tr>
								<tr>
									<td class="text" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
									<div class="mktEditable" id="main_text">
										Dear  '.$email.' <br> <br>
                                         We appreciate you  for subscribe to our newsletter. <br>
										    
                                        Have a great day!
										    
                                    </div>
									</td>
								</tr>
								<tr>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
									 &nbsp;<br>
									</td>
								</tr>
										    
										    
							</table>
						</td>
					</tr>
										    
										    
					<tr>
						<td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;text-align: center;">
										<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
											<tr>
												    <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.facebook.com/Tirupati-packers-and-movers-109441400858499/"><img src="'.base_url().'public/tirupati/img/facebook2x.png"style="width:20px;"></a></td>
												        
                                                     <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.instagram.com/tirupati_packers_movers/"><img src="'.base_url().'public/tirupati/img/instagram2x.png" style="width:20px;"></a></td>
                									 <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://twitter.com/MoversTirupati"><img src="'.base_url().'public/tirupati/img/twitter2x.png"  style="width:20px;"></a></td>
                									     
                                                   <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.youtube.com/channel/UCfeOrGoW0CuIcNpTaNRJgiw"><img src="'.base_url().'public/tirupati/img/youtube2x1.png" style="width:20px;"></a></td>
                								    <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.linkedin.com/in/tirupati-packers-7538341b2"><img src="'.base_url().'public/tirupati/img/linkedin2x.png" style="width:20px;"></a></td>
                								        
                                                     <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://api.whatsapp.com/send?phone=919075152003&amp;text=i%27m+inquiring+about+shifting." style="width:20px;"><img src="'.base_url().'public/tirupati/img/whatsapp2x.png" style="width:20px;"></a></td>
                                                         
                                                </tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr bgcolor="#fff" style="border-top: 4px solid #FC5050;">
						<td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td class="inside-footer" align="center" valign="middle" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 12px;line-height: 16px;vertical-align: middle;text-align: center;width: 580px;">
						<div id="address" class="mktEditable">
												<b>Tirupati Packers and Movers </b><br>
                          			Plot no B14 Gajanan Colony<br>Near Reliance Mall<br>Garkheda, Aurangabad.INDIA(MH)<br>
                         	   <a style="color: #FC5050;" href="https://www.tirupatipackersmovers.com/contact-us/">Contact Us</a>
									</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
  </body>
</html>';
        
        $subject = "Thank you for subscribe to our newsletter | Tirupati Packers and Movers  ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:Tirupati Packers and Movers<notification@tirupatipackersmovers.com>" . "\r\n";
        $headers .= "Reply-To:noreply@tirupatipackersmovers.com" . "\r\n";
        $headers .= "X-Mailer:PHP/" . phpversion();
        mail($to,$subject,$htmlContent,$headers,'-fnotification@tirupatipackersmovers.com');
        
        
        
    }
    
    public function subscriber_admin($email)
    {
        
        $date =date("Y-n-d");
         $htmlContent='<!doctype html>
<html class="fixed">
<head>
<style type="text/css">
@media only screen and (max-width: 600px) {
		.main { width: 320px !important; }.top-image { width: 100% !important;}
		.inside-footer { width: 320px !important; }
		table[class="contenttable"] {  width: 320px !important; text-align: left !important;}
        td[class="force-col"] { display: block !important; }
	     td[class="rm-col"] { display: none !important; }
		.mt { margin-top: 15px !important; }
		*[class].width300 {width: 255px !important;}
		*[class].block {display:block !important;}
		*[class].blockcol {display:none !important;}
		.emailButton{ width: 100% !important;}
            
       .emailButton a {display:block !important; font-size:18px !important;
        }
    }
</style>
</head>
            
  <body link="#FC5050" vlink="#004CDA" alink="#FC5050">
            
<table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">
		<tr>
			<td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
				<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
					<tr>
						<td colspan="4" valign="top" class="image-section" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff;border-bottom: 4px solid #FC5050;text-align:center;">
							<a href="https://www.tirupatipackersmovers.com/"><img class="top-image" src="'.base_url().'public/tirupati/img/logo.png" style="line-height: 1;" alt="Tirupati Packers and Movers "></a>
						</td>
					</tr>
					<tr>
						<td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td class="head-title" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 28px;line-height: 34px;font-weight: bold; text-align: center;">
										<div class="mktEditable" id="main_title">
									      Newsletter signup notification
										</div>
									</td>
								</tr>
							    
								<tr>
									<td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"></td>
								</tr>
								<tr>
									<td class="grey-block" style="border-collapse: collapse;border: 0;margin: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff; text-align:center;">
									<div class="mktEditable" id="cta">
										<strong>Date:</strong> '.$date.'<br>
										    
			                       	</div>
									</td>
								</tr>
								<tr>
									<td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 15px 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 21px;">
										<hr size="1" color="#eeeff0">
									</td>
								</tr>
								<tr>
									<td class="text" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
									<div class="mktEditable" id="main_text">
										Dear   Admin,<br><br>
										Newsletter subscribe by User
										    
                                        <br> Email : <b> '.$email.'</b>
                                        <br> <br> Tirupati Packers and Movers
                                    </div>
									</td>
								</tr>
								<tr>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
									 &nbsp;<br>
									</td>
								</tr>
                                            
                                            
							</table>
						</td>
					</tr>
                                            
                                            
					<tr>
						<td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;text-align: center;">
										<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
											<tr>
												    <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.facebook.com/Tirupati-packers-and-movers-109441400858499/"><img src="'.base_url().'public/tirupati/img/facebook2x.png"style="width:20px;"></a></td>
												        
                                                     <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.instagram.com/tirupati_packers_movers/"><img src="'.base_url().'public/tirupati/img/instagram2x.png" style="width:20px;"></a></td>
                									 <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://twitter.com/MoversTirupati"><img src="'.base_url().'public/tirupati/img/twitter2x.png"  style="width:20px;"></a></td>
                									     
                                                   <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.youtube.com/channel/UCfeOrGoW0CuIcNpTaNRJgiw"><img src="'.base_url().'public/tirupati/img/youtube2x1.png" style="width:20px;"></a></td>
                								    <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.linkedin.com/in/tirupati-packers-7538341b2"><img src="'.base_url().'public/tirupati/img/linkedin2x.png" style="width:20px;"></a></td>
                								        
                                                     <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://api.whatsapp.com/send?phone=919075152003&amp;text=i%27m+inquiring+about+shifting." style="width:20px;"><img src="'.base_url().'public/tirupati/img/whatsapp2x.png" style="width:20px;"></a></td>
                                                         
                                                </tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr bgcolor="#fff" style="border-top: 4px solid #FC5050;">
						<td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td class="inside-footer" align="center" valign="middle" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 12px;line-height: 16px;vertical-align: middle;text-align: center;width: 580px;">
						<div id="address" class="mktEditable">
												<b>Tirupati Packers and Movers </b><br>
                          			Plot no B14 Gajanan Colony<br>Near Reliance Mall<br>Garkheda, Aurangabad.INDIA(MH)<br>
                         	   <a style="color: #FC5050;" href="https://www.tirupatipackersmovers.com/contact-us/">Contact Us</a>
									</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
  </body>
</html>';
        
        
        
        
        
        $msg_sbuject= "Newsletter Subscription Notification!";
        $to ="tirupatipackers96@gmail.com";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:Tirupati<notification@tirupatipackersmovers.com>" . "\r\n";
        $headers .= "Reply-To:noreply@tirupatipackersmovers.com" . "\r\n";
        $headers .= "X-Mailer:PHP/" . phpversion();
        mail($to,$msg_sbuject,$htmlContent,$headers,'-fnotification@tirupatipackersmovers.com');
        
        
    }
    
    
}