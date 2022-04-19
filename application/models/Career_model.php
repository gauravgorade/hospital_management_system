<?php
class Career_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
    
    function getall_resume()
    {
        $this->db->select('*');
        $this->db->from("apply_job");
        $this->db->order_by("appy_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
   
    function insert_data($data)
    {
        $this->db->insert('apply_job', $data);
    }
    function delete_id($cid)
    {
        $this->db->where('appy_id', $cid);
        $this->db->delete('apply_job');
    }
    function  get_single_data($cid)
    {
        $this->db->select('*');
        $this->db->from('apply_job');
        $this->db->where('appy_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    
    function update_data($data,$userid)
    {
        $this->db->where('appy_id', $userid);
        $this->db->update('apply_job', $data);
    }
     
    function get_clients()
    {
        
        $this->db->select('*');
        $this->db->from("apply_job");
        $this->db->order_by("appy_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
    }
    
    
    function email_career_admin($name, $mobile, $email,$bio,$resumelink )
    {
       date_default_timezone_set('Asia/Kolkata');
        $date=date('d-m-Y H:i:s');
        $weekday=date('l', strtotime( $date));
        $month = date('F', strtotime($date));
        $year = date('d, Y');
        $time = date('h:i:s a', strtotime($date));
        

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
							<a href="'.base_url().'"><img class="top-image" src="'.base_url().'public/email/logo.png" style="line-height: 1;" alt="R K Security Services"></a>
						</td>
					</tr>
					<tr>
						<td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td class="head-title" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 28px;line-height: 34px;font-weight: bold; text-align: center;">
									<div class="mktEditable" id="main_title">
									     Candidate applied for the Job
							    	</div>
									</td>
								</tr>
									          
								<tr>
									<td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"></td>
								</tr>
								<tr>
									<td class="grey-block" style="border-collapse: collapse;border: 0;margin: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff; text-align:center;">
									<div class="mktEditable" id="cta">
										  <strong>Date &nbsp;</strong>'.$weekday.',&nbsp;'.$month.'&nbsp;'.$year.'&nbsp;at&nbsp;'.$time.' <br>
										    
										    
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
											Job Applied by
                                          <br> Name :<b> '.$name.'</b>,
                                         <br> Mobile No: <b>'.$mobile.'</b>
                                        <br> Email : <b> '.$email.'</b>
                                         <br> Resume  : <b> <a href="'.$resumelink.'">Dounload  Resume</a></b>
                                             
                                        <br> His Bio : <b> '.$bio.'</b>.
                                        <br> <br> R K Securitie Services
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
												    <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="#"><img src="'.base_url().'public/email/facebook2x.png"style="width:20px;"></a></td>
												        
                                                     <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="#"><img src="'.base_url().'public/email/instagram2x.png" style="width:20px;"></a></td>
                									 <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="#"><img src="'.base_url().'public/email/twitter2x.png"  style="width:20px;"></a></td>
                									     
                                                   <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="#"><img src="'.base_url().'public/email/youtube2x1.png" style="width:20px;"></a></td>
                								    <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="#"><img src="'.base_url().'public/email/linkedin2x.png" style="width:20px;"></a></td>
                								        
                                                     <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="#" style="width:20px;"><img src="'.base_url().'public/email/whatsapp2x.png" style="width:20px;"></a></td>
                                                         
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
												<b>R K Security Services</b><br>
                          		            	1st Floor, k.k Patel & Sons Market<br>Near Dhanlaxmi Showroom, Beed By Pass,<br>Aurangabad.INDIA(MH)<br>
                         	          <a style="color: #FC5050;" href="'.base_url().'contact-us">Contact Us</a>
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
        
        
        
        
        
        $msg_sbuject= "Candidates applied for the Job.";
        $to ="wd.crelite@gmail.com";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:R K Securitie Services<notification@rksecuritiesservices.com>" . "\r\n";
        $headers .= "Reply-To:noreply@rksecuritiesservices.com" . "\r\n";
        $headers .= "X-Mailer:PHP/" . phpversion();
        mail($to,$msg_sbuject,$htmlContent,$headers,'-fnotification@rksecuritiesservices.com');
        
    }
    
    
    
    
    function email_career_user($name,$email)
    {
        
        $to =$email;
        date_default_timezone_set('Asia/Kolkata');
        $date=date('d-m-Y H:i:s');
        $weekday=date('l', strtotime( $date));
        $month = date('F', strtotime($date));
        $year = date('d, Y');
        $time = date('h:i:s a', strtotime($date));
        
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
						<a href="'.base_url().'"><img class="top-image" src="'.base_url().'public/email/logo.png" style="line-height: 1;" alt="R K Security Services"></a>
						</td>
					</tr>
					<tr>
						<td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td class="head-title" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 28px;line-height: 34px;font-weight: bold; text-align: center;">
										<div  class="mktEditable" id="main_title"  text-align: center;>
									              Thank you for applying for the job!

                                        </div>
									</td>
								</tr>
							    
								<tr>
									<td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"></td>
								</tr>
								<tr>
									<td class="grey-block" style="border-collapse: collapse;border: 0;margin: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff; text-align:center;">
									<div class="mktEditable" id="cta">
									  <strong>Date &nbsp;</strong>'.$weekday.',&nbsp;'.$month.'&nbsp;'.$year.'&nbsp;at&nbsp;'.$time.' <br>
										    
										    
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
										Dear  '.$name.' <br> <br>
                                         We appreciate you to applying for job.<br>
                                               We contact you as soon as possible    <br>
                                        Thank you.<br>
                                        Have a great day!
										   <br> <br> R K Securitie Services   
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
												    <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="#"><img src="'.base_url().'public/email/facebook2x.png"style="width:20px;"></a></td>
												        
                                                     <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="#"><img src="'.base_url().'public/email/instagram2x.png" style="width:20px;"></a></td>
                									 <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="#"><img src="'.base_url().'public/email/twitter2x.png"  style="width:20px;"></a></td>
                									     
                                                   <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="#"><img src="'.base_url().'public/email/youtube2x1.png" style="width:20px;"></a></td>
                								    <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="#"><img src="'.base_url().'public/email/linkedin2x.png" style="width:20px;"></a></td>
                								        
                                                     <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="#" style="width:20px;"><img src="'.base_url().'public/email/whatsapp2x.png" style="width:20px;"></a></td>
                                                         
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
												<b>R K Security Services</b><br>
                          		            	1st Floor,k.k Patel & Sons Market<br>Near Dhanlaxmi Showroom,Beed By Pass,<br>Aurangabad.INDIA(MH)<br>
                         	          <a style="color: #FC5050;" href="'.base_url().'contact-us">Contact Us</a>
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
        
        $subject = "Your Response is recorded | R K Security Services";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:R K Securitie Services<contact@rksecuritiesservices.com>" . "\r\n";
        $headers .= "Reply-To:noreply@rksecuritiesservices.com" . "\r\n";
        $headers .= "X-Mailer:PHP/" . phpversion();
        mail($to,$subject,$htmlContent,$headers,'-fcontact@rksecuritiesservices.com');
        
        
    }
    
    
    
    
    
}