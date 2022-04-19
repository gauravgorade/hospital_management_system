<?php  defined('BASEPATH') OR exit('No direct script access allowed');
class Contact_us_email extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->helper('url');
    }
    public function admin_contactus_email($name,$email,$mobile,$message)
    {
        
        $date=date('d-m-Y H:i:s');
        $weekday=date('l', strtotime( $date));
        $month = date('M', strtotime($date));
        $year = date('d, Y');   $time = date('h:i:s a', strtotime($date));
  
        $query = $this->db->query("SELECT * FROM `website_information` WHERE web_id='1'");
        foreach ($query->result() as $row)
        {
            
            $query2 = $this->db->query("SELECT * FROM `maling_list` WHERE m_id='1'");
            foreach ($query2->result() as $row2)
            
            
            {
                $website_name  = $row->website_name;
                
                
                $website_mobile_no  = $row->mobile;
                
                $fb_id  = $row->fb_id;
                $twit_id = $row->twit_id;
                $insta_id  = $row->insta_id;
                $youtub_id = $row->youtub_id;
                $linkedin_id = $row->linkedin_id;
                
                $full_addrss=  $row->address_line1. ", <br>".$row->address_line2. ", ".$row->city.", <br> ".$row->state.",".$row->country." - ".$row->pincode;
                $user_heading  = $row2->admin_heading;
                
          $htmlContent= '<!doctype html>
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
                    
  <body link="#08B0C2" vlink="#08B0C2" alink="#08B0C2" style="background-color: #efefef;">
                    
<table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">
		<tr>
			<td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
				<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
					<tr>
						<td colspan="4" valign="top" class="image-section" style="text-align: center; border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff;border-bottom: 4px solid #08B0C2">
							<a href="'.base_url().'"><img class="top-image" src="'.base_url().'public/email/logo.png" style="line-height: 1;" alt="'.$website_name.'"></a>
						</td>
					</tr>
					<tr>
						<td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
							<table style="width: 100%;  font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td class="head-title" style=" width: 100%; border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 28px;line-height: 34px;font-weight: bold; text-align: center;">
										<div class="mktEditable" id="main_title" style=" width: 100%;">
										  '.$user_heading.'
	                                   </div>
									</td>
								</tr>
                                <tr>
									<td class="head-title" style="width: 100%; border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;font-weight: bold; text-align: center;">
										<div class="mktEditable" id="main_title" style="width: 100%;">
										 <br>
	                                    <strong> Date: &nbsp;</strong>'.$weekday.',&nbsp;'.$month.'&nbsp;'.$year.'&nbsp;at&nbsp;'.$time.' <br>
									 </div>
									</td>
								</tr>
	                                        
								<tr>
									<td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"></td>
								</tr>
								<tr>
									<td class="grey-block" style="border-collapse: collapse;border: 0;margin: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff; text-align:center;">
	                                        
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
										Dear Admin,<br><br>
                                         New contact requested by,
                                            <br> Name : '.$name.'
                                            <br> Email  : <a href="mailto:'.$email.'">'.$email.'</a>
                                            <br> Mobile Number :  <a href="tel:91 '.$mobile.'"> '.$mobile.'</a>
                                             <br> Message  : '.$message.'
                                             <br> 
                                            
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
											<tr><td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="'.$fb_id.'"><img src="'.base_url().'public/email/facebook2x.png"style="width:30px;"></a></td> 
                                              <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="'.$insta_id.'"><img src="'.base_url().'public/email/instagram2x.png" style="width:30px;"></a></td> 
                                                </tr>
                                		</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr bgcolor="#fff" style="border-top: 4px solid #08B0C2;">
						<td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td class="inside-footer" align="center" valign="middle" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: middle;text-align: center;width: 580px;">
						          <div id="address" class="mktEditable">
								    <b style="color: #08B0C2;    font-size: 30px;">'.$website_name.'</b><br>
                          			'.$full_addrss.'<br>
                          			    
                                 <a style="color: #08B0C2;" href="tel:91'.$website_mobile_no.'contact-us">Call us '.$website_mobile_no.'</a>
                                     <br> <a style="color: #08B0C2;" href="'.base_url().'contact-us"  target="_blank">Contact Us</a>
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
                
                
                $to  = $row2->admin_email_to;
                $subject_user = $row2->subject_admin; 
                $headers_name = $row2->headers_name;
                $headers_email = $row2->headers_email; 
                $header_no_reply= $row2->header_no_reply;
                // Set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // Additional headers
                $headers .= "From:".$headers_name."<".$headers_email.">" . "\r\n";
                $headers .= "Reply-To:".$header_no_reply."" . "\r\n";
                $headers .= "X-Mailer:PHP/" . phpversion();
               mail($to,$subject_user,$htmlContent,$headers,'-f'.$headers_email.'');
                
              }
            
        }
    }
    
    
    
    public function user_contact_email($name,$email)
    {
       
        $date=date('d-m-Y H:i:s');
        $weekday=date('l', strtotime( $date));
        $month = date('M', strtotime($date));
        $year = date('d, Y');  $time = date('h:i:s a', strtotime($date));
       
         $to=$email;
        $query = $this->db->query("SELECT * FROM `website_information` WHERE web_id='1'");
        foreach ($query->result() as $row)
        {
            
            $query2 = $this->db->query("SELECT * FROM `maling_list` WHERE m_id='1'");
            foreach ($query2->result() as $row2)
            
            
            {
                $website_name  = $row->website_name;
                 $website_mobile_no  = $row->mobile;
                 $fb_id  = $row->fb_id;
                $twit_id = $row->twit_id;
                $insta_id  = $row->insta_id;
                $youtub_id = $row->youtub_id;
                $linkedin_id = $row->linkedin_id;
                
                $full_addrss=  $row->address_line1. ", <br>".$row->address_line2. ", ".$row->city.", <br> ".$row->state.",".$row->country." - ".$row->pincode;
                
                $user_heading  = $row2->user_heading;
                
                      $htmlContent= '<!doctype html>
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
                    
  <body link="#08B0C2" vlink="#08B0C2" alink="#08B0C2" style="background-color: #efefef;">
                    
<table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">
		<tr>
			<td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
				<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
					<tr>
						<td colspan="4" valign="top" class="image-section" style="text-align: center; border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff;border-bottom: 4px solid #08B0C2">
							<a href="'.base_url().'"><img class="top-image" src="'.base_url().'public/email/logo.png" style="line-height: 1;" alt="'.$website_name.'"></a>
						</td>
					</tr>
					<tr>
						<td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
							<table style="width: 100%;  font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td class="head-title" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 28px;line-height: 34px;font-weight: bold; text-align: center;">
										<div class="mktEditable" id="main_title">
										  '.$user_heading.'
	                                   </div>
									</td>
								</tr>
                                <tr>
									<td class="head-title" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;font-weight: bold; text-align: center;">
										<div class="mktEditable" id="main_title">
										 <br>
	                                    <strong> Date: &nbsp;</strong>'.$weekday.',&nbsp;'.$month.'&nbsp;'.$year.'&nbsp;at&nbsp;'.$time.' <br>
									 </div>
									</td>
								</tr>
	                                        
								<tr>
									<td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"></td>
								</tr>
								<tr>
									<td class="grey-block" style="border-collapse: collapse;border: 0;margin: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff; text-align:center;">
	                                        
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
										Dear '.$name.',<br><br>
                                              We appreciate your contact request.<br>
                                                One of our customer happiness members will be getting back to you shortly.
										    
                                          <br> <br> <br>Thank you for contact
                                           <br> '.$website_name.'
                                               
                                               
                                               
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
											<tr><td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="'.$fb_id.'"><img src="'.base_url().'public/email/facebook2x.png"style="width:30px;"></a></td> 
                                              <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="'.$insta_id.'"><img src="'.base_url().'public/email/instagram2x.png" style="width:30px;"></a></td> 
                                                </tr>
                                		</table>
									</td>
								</tr>


							</table>
						</td>
					</tr>
					<tr bgcolor="#fff" style="border-top: 4px solid #08B0C2;">
						<td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td class="inside-footer" align="center" valign="middle" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: middle;text-align: center;width: 580px;">
						          <div id="address" class="mktEditable">
								    <b style="color: #08B0C2;    font-size: 30px;">'.$website_name.'</b><br>
                          			'.$full_addrss.'<br>
                          			    
                                 <a style="color: #08B0C2;" href="tel:91'.$website_mobile_no.'contact-us">Call us '.$website_mobile_no.'</a>
                                     <br> <a style="color: #08B0C2;" href="'.base_url().'contact-us"  target="_blank">Contact Us</a>
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
                
                
                  
                 $subject_user = $row2->subject_user; 
                 $headers_name = $row2->headers_name;
                $headers_email = $row2->headers_email;
                $header_no_reply= $row2->header_no_reply;
                // Set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // Additional headers
                $headers .= "From:".$headers_name."<".$headers_email.">" . "\r\n";
                $headers .= "Reply-To:".$header_no_reply."" . "\r\n";
                $headers .= "X-Mailer:PHP/" . phpversion();
             	mail($email,$subject_user,$htmlContent,$headers,'-f'.$headers_email.'');
            
                
            }
            
        }
    }
    
    
}
?>