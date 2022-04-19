<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Send_email_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->helper('url');  
    }
  
    public function forget_psw_user($otp,$email)
    {
        $query = $this->db->query("SELECT * FROM `website_information` WHERE web_id='1'");
        foreach ($query->result() as $row)
        {
            
            $query2 = $this->db->query("SELECT * FROM `maling_list` WHERE m_id='4'");
            foreach ($query2->result() as $row2)
            
            
            {
                $website_short_name  = $row->website_short_name;
                $header_logo  = $row->header_logo;
                
                //  $to_  = $row2->admin_email_to;
                $subject_user = $row2->subject_user;
                $headers_name = $row2->headers_name;
                $headers_email = $row2->headers_email;
                $header_no_reply= $row2->header_no_reply;
                
                $date=date('d-m-Y H:i:s');
                $weekday=date('l', strtotime( $date));
                $month = date('F', strtotime($date));
                $year = date('d, Y');
                $time = date('h:i:s A', strtotime($date));
                
                $newotp = $otp;
                
                $to =$email;
                
                $newemail =$email;
                
                
                $newotp =$this->Admin_model->encrypt_decrypt('encrypt', $newotp);
                $enc_path =$this->Admin_model->encrypt_decrypt('encrypt', $newemail);
                $date =$this->Admin_model->encrypt_decrypt('encrypt', $date);
                $path= base_url()."Admin/reset_password/".$newotp."/".$enc_path."/".$date;
                
                
                  $htmlContent = '<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tirupati Packers and Movers</title>
                    
    <!-- Favicon -->
  </head>
<body class="bg-white">
                    
<div class="w-50 m-auto">
    <!-- email template -->
    <table class="body-wrap" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #eaf0f7; margin: 0;" bgcolor="#eaf0f7">
        <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
            <td style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
            <td class="container" width="100%" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;"
                valign="top">
                <div class="content" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 50px; 0">
                    <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px dashed #4d79f6;"
                           bgcolor="#fff">
                        <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                            <td class="content-wrap" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
                                <meta itemprop="name" content="Confirm Email" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                <table width="100%" cellpadding="0" cellspacing="0" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <tr>
                                        <td><a href="#"><img src="'.base_url().'public/img/'.$header_logo.'" alt="image" style="margin-left: auto; margin-right: auto; display:block; margin-bottom: 20px; height: 30px;"></a></td>
                                    </tr>
                                    <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; color: #5066e1; font-size: 24px; font-weight: 700; text-align: center; vertical-align: top; margin: 0; padding: 0 0 10px;"
                                            valign="top">Forgot your password?</td>
                                    </tr>
                                    <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; color: #353d9f; font-size: 14px; vertical-align: top; margin: 0; padding: 10px 10px;" valign="top">
                                        To reset your password please follow the link below:</td>
                                    </tr>
                                    <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 10px 10px;" valign="top">
                                        '.$website_short_name.' received a request to reset the password for your  '.$email.' account. To reset your password, click on the button below:
                                            
                                      <br> <br>   Request Received On : '.$weekday.',&nbsp;'.$month.'&nbsp;'.$year.'&nbsp;'.$time.'&nbsp;GMT+5:30.
                                          
                                        </td>
                                    </tr>
                                    <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <td class="content-block" itemprop="handler" itemscope itemtype="http://schema.org/HttpActionHandler" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 10px 10px;"
                                            valign="top"><a href="'.$path.'" itemprop="url" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: block; border-radius: 5px; text-transform: capitalize; background-color: #5066e1; margin: 0; border-color: #5066e1; border-style: solid; border-width: 10px 20px;">
                                          Reset password</a></td>
                                    </tr>
                                    <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                
                                         <td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; padding-top: 5px; vertical-align: top; margin: 0; text-align: right;" valign="top">&mdash;
                                                
                                     <b>'.$website_short_name.'</b> - </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <!-- ./ email template -->
</div>
                                         
                                         
</body>
 </html>';
                
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
    
    
    
    
}