<?php
class Book_appointment_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
    function insert_data($data)
    {
        $this->db->insert('inquiry', $data);
    }
     
    function insert_appointment($data)
    {
        $this->db->insert('book_appointment', $data);
    }
    function contact_us($data)
    {
        $this->db->insert('contact', $data);
    }
    
    function contact_email($name,$email, $mobile, $subject, $message)
    {
        
        $to =$email;
        date_default_timezone_set('Asia/Kolkata');
        $date=date('d-m-Y H:i:s');
        $weekday=date('l', strtotime( $date));
        $month = date('F', strtotime($date));
        $year = date('d, Y');
        $time = date('h:i:s a', strtotime($date));
        
       echo $htmlContent='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	   <html>
	   
	   <head>
		   <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		   <META NAME="referrer" CONTENT="no-referrer">
		   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
		   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		   <meta name="color-scheme" content="light only">
		   <meta name="supported-color-schemes" content="light only">
		   <style type="text/css">
			   ReadMsgBody {
				   width: 100%
			   }
			   
			   .ExternalClass {
				   width: 100%
			   }
			   
			   .ExternalClass,
			   .ExternalClass p,
			   .ExternalClass span,
			   .ExternalClass font,
			   .ExternalClass td,
			   .ExternalClass div {
				   line-height: 100%
			   }
			   
			   body {
				   -webkit-text-size-adjust: 100%;
				   -ms-text-size-adjust: 100%;
				   margin: 0 !important
			   }
			   
			   p {
				   margin: 1em 0
			   }
			   
			   table td {
				   border-collapse: collapse
			   }
			   
			   img {
				   outline: 0
			   }
			   
			   a img {
				   border: none
			   }
			   
			   .container {
				   max-width: 600px !important
			   }
			   
			   @-ms-viewport {
				   width: device-width
			   }
		   </style>
		   <style type="text/css">
			   @media only screen and (max-width: 480px) {
				   .container {
					   width: 100% !important
				   }
				   .footer {
					   width: auto !important;
					   margin-left: 0
				   }
				   .mobile-hidden {
					   display: none !important
				   }
				   .logo {
					   display: block !important;
					   padding: 0 !important
				   }
				   img {
					   max-width: 100% !important;
					   height: auto !important;
					   max-height: auto !important
				   }
				   .header img {
					   max-width: 100% !important;
					   height: auto !important;
					   max-height: auto !important
				   }
				   .photo img {
					   width: 100% !important;
					   max-width: 100% !important;
					   height: auto !important
				   }
				   .drop {
					   display: block !important;
					   width: 100% !important;
					   float: left;
					   clear: both
				   }
				   .footerlogo {
					   display: block !important;
					   width: 100% !important;
					   padding-top: 15px;
					   float: left;
					   clear: both
				   }
				   .nav4,
				   .nav5,
				   .nav6 {
					   display: none !important
				   }
				   .tableBlock {
					   width: 100% !important
				   }
				   .responsive-td {
					   width: 100% !important;
					   display: block !important;
					   padding: 0 !important
				   }
				   .fluid,
				   .fluid-centered {
					   width: 100% !important;
					   max-width: 100% !important;
					   height: auto !important;
					   margin-left: auto !important;
					   margin-right: auto !important
				   }
				   .fluid-centered {
					   margin-left: auto !important;
					   margin-right: auto !important
				   }
				   body,
				   .tb_properties {
					   font-family: Arial !important;
					   font-size: 16px !important;
					   color: #808080 !important;
					   line-height: 1.5 !important;
					   padding: 0px !important
				   }
				   h1 {
					   font-family: Arial !important;
					   font-size: 22px !important;
					   color: #374957 !important;
					   line-height: 1.15 !important
				   }
				   h2 {
					   font-family: Arial !important;
					   font-size: 22px !important;
					   color: #374957 !important;
					   line-height: 1.15 !important
				   }
				   h3 {
					   font-family: Arial !important;
					   font-size: 18px !important;
					   color: #374957 !important;
					   line-height: 1.15 !important
				   }
				   a:not(.buttonstyles) {
					   line-height: 1 !important
				   }
				   .mobile-hidden {
					   display: none !important
				   }
				   .responsive-td {
					   width: 100% !important;
					   display: block !important;
					   padding: 0 !important
				   }
			   }
			   
			   @media only screen and (max-width: 640px) {
				   .container {
					   width: 100% !important
				   }
				   .mobile-hidden {
					   display: none !important
				   }
				   .logo {
					   display: block !important;
					   padding: 0 !important
				   }
				   .photo img {
					   width: 100% !important;
					   height: auto !important
				   }
				   .nav5,
				   .nav6 {
					   display: none !important
				   }
				   .fluid,
				   .fluid-centered {
					   width: 100% !important;
					   max-width: 100% !important;
					   height: auto !important;
					   margin-left: auto !important;
					   margin-right: auto !important
				   }
				   .fluid-centered {
					   margin-left: auto !important;
					   margin-right: auto !important
				   }
			   }
		   </style>
	   </head>
	   
	   <body bgcolor="#EFF3F6" text="#000000" style="-webkit-text-size-adjust:none;background-color : #EFF3F6; font-family : Arial, helvetica, sans-serif; line-height : 150%; font-size : 16px; color : #4A6375; padding : 0px; ">
	   
		   <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">/
			   <tr>
				   <td align="center">
					   <table cellspacing="0" cellpadding="0" border="0" width="600" class="container" align="center" style="max-width: 600px;">
						   <tr>
							   <td>
								   <table class="tb_properties border_style" style="background-color : transparent; border : 0px;font-size : 16px; font-family : Arial, helvetica, sans-serif; line-height : 150%; color : #4A6375; " cellspacing="0" cellpadding="0" bgcolor="transparent" width="100%">
									   <tr>
										   <td align="center" valign="top">
											   <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
												   <tr>
													   <td class="content_padding" style="padding : 0px; ">
														   <table border="0" cellpadding="0" cellspacing="0" width="100%">
															   <tr>
																   <td align="center" class="header" valign="top">
																	   <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
																		   <tbody>
																			   <tr>
																				   <td align="left" valign="top">
																					   <table cellspacing="0" cellpadding="0" style="width:100%">
																						   <tbody>
																							   <tr>
																								   <td class="responsive-td" valign="top" style="width: 100%;">
	   
																									   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																										   <tr>
																											   <td class="stylingblock-content-wrapper camarker-inner">
																												   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="text-align: center; background-color: #EFF3F6; border: 1px solid #EFF3F6; min-width: 100%; " class="stylingblock-content-wrapper">
																													   <tr>
																														   <td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner" align="center">
																															   <table width="100%" cellspacing="0" cellpadding="0" role="presentation">
																																   <tr>
																																	   <td align="center">
																																		   <a href="javascript:void(0)" title="Jajuclinic" data-linkto="https://"> <img data-assetid="6685" 
																																		   src="'.base_url().'public/email/logo.png" alt="logoimage" height="90" width="150" style="display: block; height: 50px; width: 150px; text-align: center; padding: 30px 20px;">                                                                                                                                        </a>
																																	   </td>
																																   </tr>
																															   </table>
																														   </td>
																													   </tr>
																												   </table>
																											   </td>
																										   </tr>
																									   </table>
																									   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																										   <tr>
																											   <td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																												   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #FFFFFF; border: 0px; min-width: 100%; " class="stylingblock-content-wrapper">
																													   <tr>
																														   <td style="padding: 0px 0px 15px; " class="stylingblock-content-wrapper camarker-inner">
																															   <table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;">
																																   <tr>
																																	   <td>
																																		   <table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;">
																																			   <tr>
																																				   <td valign="top" class="responsive-td" style="width: 100%;">
																																					   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																																						   <tr>
																																							   <td style="padding-bottom: 10px; " class="stylingblock-content-wrapper camarker-inner">
																																								   <table width="100%" cellspacing="0" cellpadding="0" role="presentation">
																																									   <tr>
																																										   <td align="center">
																																											   <a href="javascript:void(0)" title="Autumn" data-linkto="https://"> 
																																											   <img data-assetid="33853" src="mail2.png" alt="" width="600" style="display: block; padding: 0px; text-align: center; height: auto; width: 100%; border: 0px;">                                                                                                                                                                            </a>
																																										   </td>
																																									   </tr>
																																								   </table>
																																							   </td>
																																						   </tr>
																																					   </table>
																																					   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																						   <tr>
																																							   <td style="padding: 0px 40px 20px; " class="stylingblock-content-wrapper camarker-inner">
																																								   <h1 style="text-align: center;"> <span style="font-weight: bold; font-size: 34px; line-height: 39px; color: #374957; font-family:Arial,Helvetica,sans-serif;">You Have A Mail ! </span></h1>
																																								   <div style="text-align: left;"> <span style="font-family:Arial,Helvetica,sans-serif;font-size: 18px; line-height: 26px; text-align: left; color: #4A6375;">Subject: Mail From a Patient to Contact with us.</span>
																																									   <p>
																																										   <ol>
																																											   <li>Name : '.$name.'</li>
																																											   <li>Mobile No : '.$mobile.'</li>
																																											   <li>Email : '.$email.'</li>
																																											   <li>Subject : '.$subject.'</li>
																																											   <li>Message : '.$message.'</li>
																																										   </ol> Respected Doctor,<br> <br>You have a mail from (patient name). requested to contact with
																																										   our clinic for an appointment. please give a feedback about that.<br><br> Thank You.</p>
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
																														   </td>
																													   </tr>
																												   </table>
																											   </td>
																										   </tr>
																									   </table>
																									   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																										   <tr>
																											   <td class="stylingblock-content-wrapper camarker-inner">
																												   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																													   <tr>
																														   <td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																															   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #FFFFFF; min-width: 100%; " class="stylingblock-content-wrapper">
																																   <tr>
																																	   <td style="padding: 40px 10px; " class="stylingblock-content-wrapper camarker-inner">
																																		   <table cellspacing="0" cellpadding="0" style="width: 100%;">
																																			   <tr>
																																				   <td>
																																					   <table cellspacing="0" cellpadding="0" style="width: 100%;">
																																						   <tr>
																																							   <td valign="top" class="responsive-td" style="width: 100%; padding-bottom: 5px;">
																																								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																									   <tr>
																																										   <td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																																											   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																												   <tr>
																																													   <td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																														   <div style="text-align: center;"> <span style="font-size: 22px; line-height: 25px; color: #374957; font-family:Arial,Helvetica,sans-serif;"><b>Jaju Clinic Speciality Services</b></span>                                                                                                                                                                                        <span style="color:#fca120; font-size:22px; font-weight: bold; line-height: 25px; font-family:Arial,Helvetica,sans-serif;"></span><br><br></div>
																																													   </td>
																																												   </tr>
																																											   </table>
																																										   </td>
																																									   </tr>
																																								   </table>
																																							   </td>
																																						   </tr>
																																					   </table>
																																				   </td>
																																			   </tr>
																																			   <tr>
																																				   <td>
																																					   <table cellspacing="0" cellpadding="0" style="width: 100%;">
																																						   <tr>
																																							   <td valign="top" class="responsive-td" style="width: 50%; padding-top: 5px; padding-bottom: 5px; padding-right: 5px;">
																																								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																									   <tr>
																																										   <td class="stylingblock-content-margin-cell" style="padding: 0px 0px 10px; ">
																																											   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																												   <tr>
																																													   <td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																														   <table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%; margin-left: 25px;">
																																															   <tr>
																																																   <td style="text-align: center; width: 50%; vertical-align: top;">
																																																	   <div style="line-height: 115%;"> <img alt="icon" data-assetid="2073" height="60" src="'.base_url().'public/email/skin.png"
																																																			   style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;"
																																																			   width="60"></div>
																																																	   <div style="line-height: 115%;"> <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>					 <b style="color: #e83e8c;">Skin</b></span></div>
																																																   </td>
																																																   <td style="text-align: left; width: 50%; vertical-align: top;">
																																																	   <div style="line-height: 100%; margin-left: 45px;"> <img alt="icon" data-assetid="2057" height="60" src="'.base_url().'public/email/endo.png"
																																																			   style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;"
																																																			   width="60"></div>
																																																	   <div style="line-height: 115%; margin-left: 35px;">
																																																		   <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>					 <b style="color: #28a745;">Endovascular </b></span></div>
																																																   </td>
																																																   <td style="text-align: left; width: 50%; vertical-align: top;">
																																																	   <div style="line-height: 100%; margin-right: 126px;"> <img alt="icon" data-assetid="2057" height="60" src="'.base_url().'public/email/vericose.png"
																																																			   style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;"
																																																			   width="60"></div>
																																																	   <div style="line-height: 115%; margin-left: -15px;">
																																																		   <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>					 <b style="color: #007bff;">Vericose Veins</b></span></div>
																																																   </td>
																																															   </tr>
																																														   </table>
																																													   </td>
																																												   </tr>
																																											   </table>
																																										   </td>
																																									   </tr>
																																								   </table>
																																							   </td>
	   
																																						   </tr>
																																					   </table>
																																				   </td>
																																			   </tr>
																																			   <tr>
																																				   <td>
																																					   <table cellspacing="0" cellpadding="0" style="width: 100%;">
																																						   <tr>
																																							   <td valign="top" class="responsive-td" style="width: 100%; padding-top: 5px;">
																																								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																									   <tr>
																																										   <td class="stylingblock-content-margin-cell" style="padding: 20px 0px 0px; ">
																																											   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																												   <tr>
																																													   <td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																														   <table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
																																															   <tr>
																																																   <td align="center">
																																																	   <table border="0" cellspacing="0" cellpadding="0" role="presentation">
																																																		   <tr>
																																																			   <td class="innertd buttonblock" bgcolor="#FCA120" style=" border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; background-color: #FCA120;">
																																																				   <a target="_blank" class="buttonstyles open-modal" style=" font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: #FFFFFF; text-align: center; text-decoration: none; display: block; font-weight: 600; line-height: 20px; background-color: rgb(83, 80, 80); border: 1px solid rgb(83, 80, 80)y; padding: 12px 30px; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px;"
																																																					   href="'.base_url().'">Book Appoinment</a></td>
																																																		   </tr>
																																																	   </table>
																																																   </td>
																																															   </tr>
																																														   </table>
																																													   </td>
																																												   </tr>
																																											   </table>
																																										   </td>
																																									   </tr>
																																								   </table>
																																							   </td>
																																						   </tr>
																																					   </table>
																																				   </td>
																																			   </tr>
																																		   </table>
																																	   </td>
																																   </tr>
																															   </table>
																														   </td>
																													   </tr>
																												   </table>
																											   </td>
																										   </tr>
																									   </table>
																									   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																										   <tr>
																											   <td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner">
																												   <table cellspacing="0" cellpadding="0" style="width: 100%;">
																													   <tr>
																														   <td>
																															   <table cellspacing="0" cellpadding="0" style="width: 100%;">
																																   <tr>
																																	   <td valign="top" class="responsive-td" style="width: 100%; padding-bottom: 3px;">
																																		   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																																			   <tr>
																																				   <td class="stylingblock-content-wrapper camarker-inner"></td>
																																			   </tr>
																																		   </table>
																																	   </td>
																																   </tr>
																															   </table>
																														   </td>
																													   </tr>
																													   <tr>
																														   <td>
																															   <table cellspacing="0" cellpadding="0" style="width: 100%;">
																																   <tr>
																																	   <td valign="top" class="responsive-td" style="width: 100%; padding-top: 3px;">
																																		   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="text-align: left; min-width: 100%; " class="stylingblock-content-wrapper">
																																			   <tr>
																																				   <td class="stylingblock-content-wrapper camarker-inner" align="left">
																																					   <table cellpadding="0" cellspacing="0" class="socialshare-wrapper" width="100%">
																																						   <tr>
																																							   <td align="center">
																																								   <table cellpadding="0" cellspacing="0" align="center">
																																									   <tr>
																																										   <td align="center">
																																											   <!--[if mso]><table border="0" cellspacing="0" cellpadding="0"><tr><td style="padding-right:10px;"><![endif]-->
																																											   <table class="socialshare-innertable" style="display: inline-block">
																																												   <tr>
																																													   <td style="padding:5px 10px">
																																														   <a href="https://www.facebook.com/jajuendovascularclinic"><img src="https://image.s4.exct.net/lib/fe911573736c007d7d/m/2/1a560d12-c8d7-40cb-9e90-9df36933fdfa.png"
																																																   alt="Facebook" width="24" height="24" style="display: block;; width: 24px !important; height: 24px !important">                                                                                                                                                                                        </a>
																																													   </td>
																																												   </tr>
																																											   </table>
																																											   <!--[if mso]></td><td><![endif]-->
																																											   <table class="socialshare-innertable" style="display: inline-block">
																																												   <tr>
																																													   <td style="padding:5px 10px">
																																														   <a href="https://www.instagram.com/jajuendovascularclinic/"><img src="https://image.s4.exct.net/lib/fe911573736c007d7d/m/2/0e6fddf1-c205-4752-ad42-e9dc03c83dea.png"
																																																   alt="Instagram" width="24" height="24" style="display: block;; width: 24px !important; height: 24px !important">                                                                                                                                                                                        </a>
																																													   </td>
																																												   </tr>
																																											   </table>
																																										   </td>
																																									   </tr>
																																								   </table>
																																							   </td>
																																						   </tr>
																																					   </table>
																																				   </td>
																																			   </tr>
																																		   </table>
																																	   </td>
																																   </tr>
																															   </table>
																														   </td>
																													   </tr>
																												   </table>
																											   </td>
																										   </tr>
																									   </table>
																									   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																										   <tr>
																											   <td class="stylingblock-content-margin-cell" align="center" style="padding: 0px 0px 50px; ">
																												   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="text-align: center; background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																													   <tr>
																														   <td style="padding: 0px 30px; " class="stylingblock-content-wrapper camarker-inner" align="center">
	   
																															   <p style="font-size: 13px; line-height: 200%; text-align: center; max-width: 400px; margin: 0 auto;"> <span style="font-size:13px;line-height:19px;font-family:Arial,Helvetica,sans-serif;color: #869fb2;">Copyright 2021 JajuClinic, all rights reserved.</span></p>
																															   <p style="font-size: 13px; line-height: 200%; text-align: center; max-width: 400px; margin: 5px auto 20px;"> <span style="font-size:13px;line-height:19px;font-family:Arial,Helvetica,sans-serif;color: #869fb2;">JAJU Clinic, Opp. HDFC Bank, Shivaji Nagar Road Sutgirni Chowk, Aurangabad 431009</span></p>
	   
																														   </td>
																													   </tr>
																												   </table>
																											   </td>
																										   </tr>
																									   </table>
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
														   </table>
													   </td>
												   </tr>
											   </table>
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
                    
        $subject = "Your Response is recorded | Jaju Clinic";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:Jaju Clinic<contact@jajuclinic.com>" . "\r\n";
        $headers .= "Reply-To:noreply@jajuclinic.com" . "\r\n";
        $headers .= "X-Mailer:PHP/" . phpversion();
        // mail($to,$subject,$htmlContent,$headers,'-fcontact@jajuclinic.com');
        
        
    }
 
    function enquiry_email($name, $mobile, $speciality, $city, $email)
    {
        
        $to =$email;
        date_default_timezone_set('Asia/Kolkata');
        $date=date('d-m-Y H:i:s');
        $weekday=date('l', strtotime( $date));
        $month = date('F', strtotime($date));
        $year = date('d, Y');
        $time = date('h:i:s a', strtotime($date));
        
       echo  $htmlContent='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		
		<head>
			<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
			<META NAME="referrer" CONTENT="no-referrer">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="color-scheme" content="light only">
			<meta name="supported-color-schemes" content="light only">
			<style type="text/css">
				ReadMsgBody {
					width: 100%;
				}
				
				.ExternalClass {
					width: 100%;
				}
				
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				
				body {
					-webkit-text-size-adjust: 100%;
					-ms-text-size-adjust: 100%;
					margin: 0 !important;
				}
				
				p {
					margin: 1em 0;
				}
				
				table td {
					border-collapse: collapse;
				}
				
				img {
					outline: 0;
				}
				
				a img {
					border: none;
				}
				
				.container {
					max-width: 600px !important;
				}
				
				@-ms-viewport {
					width: device-width;
				}
			</style>
			<style type="text/css">
				@media only screen and (max-width: 480px) {
					.container {
						width: 100% !important;
					}
					.footer {
						width: auto !important;
						margin-left: 0;
					}
					.mobile-hidden {
						display: none !important;
					}
					.logo {
						display: block !important;
						padding: 0 !important;
					}
					img {
						max-width: 100% !important;
						height: auto !important;
						max-height: auto !important;
					}
					.header img {
						max-width: 100% !important;
						height: auto !important;
						max-height: auto !important;
					}
					.photo img {
						width: 100% !important;
						max-width: 100% !important;
						height: auto !important;
					}
					.drop {
						display: block !important;
						width: 100% !important;
						float: left;
						clear: both;
					}
					.footerlogo {
						display: block !important;
						width: 100% !important;
						padding-top: 15px;
						float: left;
						clear: both;
					}
					.nav4,
					.nav5,
					.nav6 {
						display: none !important;
					}
					.tableBlock {
						width: 100% !important;
					}
					.responsive-td {
						width: 100% !important;
						display: block !important;
						padding: 0 !important;
					}
					.fluid,
					.fluid-centered {
						width: 100% !important;
						max-width: 100% !important;
						height: auto !important;
						margin-left: auto !important;
						margin-right: auto !important;
					}
					.fluid-centered {
						margin-left: auto !important;
						margin-right: auto !important;
					}
					body,
					.tb_properties {
						font-family: Arial !important;
						font-size: 16px !important;
						color: #808080 !important;
						line-height: 1.5 !important;
						padding: 0px !important;
					}
					h1 {
						font-family: Arial !important;
						font-size: 22px !important;
						color: #374957 !important;
						line-height: 1.15 !important;
					}
					h2 {
						font-family: Arial !important;
						font-size: 22px !important;
						color: #374957 !important;
						line-height: 1.15 !important;
					}
					h3 {
						font-family: Arial !important;
						font-size: 18px !important;
						color: #374957 !important;
						line-height: 1.15 !important;
					}
					a:not(.buttonstyles) {
						line-height: 1 !important;
					}
					.mobile-hidden {
						display: none !important;
					}
					.responsive-td {
						width: 100% !important;
						display: block !important;
						padding: 0 !important;
					}
				}
				
				@media only screen and (max-width: 640px) {
					.container {
						width: 100% !important;
					}
					.mobile-hidden {
						display: none !important;
					}
					.logo {
						display: block !important;
						padding: 0 !important;
					}
					.photo img {
						width: 100% !important;
						height: auto !important;
					}
					.nav5,
					.nav6 {
						display: none !important;
					}
					.fluid,
					.fluid-centered {
						width: 100% !important;
						max-width: 100% !important;
						height: auto !important;
						margin-left: auto !important;
						margin-right: auto !important;
					}
					.fluid-centered {
						margin-left: auto !important;
						margin-right: auto !important;
					}
				}
			</style>
		</head>
		
		<body bgcolor="#EFF3F6" text="#000000" style="-webkit-text-size-adjust:none;background-color : #EFF3F6; font-family : Arial, helvetica, sans-serif; line-height : 150%; font-size : 16px; color : #4A6375; padding : 0px; ">
		
		
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td align="center" valign="top"></td>
				</tr>
				<tr>
					<td align="center">
						<table cellspacing="0" cellpadding="0" border="0" width="600" class="container" align="center" style="max-width: 600px;">
							<tr>
								<td>
									<table class="tb_properties border_style" style="background-color : transparent; border : 0px;font-size : 16px; font-family : Arial, helvetica, sans-serif; line-height : 150%; color : #4A6375; " cellspacing="0" cellpadding="0" bgcolor="transparent" width="100%">
										<tr>
											<td align="center" valign="top">
												<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
														<td class="content_padding" style="padding : 0px; ">
															<table border="0" cellpadding="0" cellspacing="0" width="100%">
																<tr>
																	<td align="center" class="header" valign="top">
																		<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
																			<tbody>
																				<tr>
																					<td align="left" valign="top">
																						<table cellspacing="0" cellpadding="0" style="width:100%">
																							<tbody>
																								<tr>
																									<td class="responsive-td" valign="top" style="width: 100%;">
																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #EFF3F6; min-width: 100%; " class="stylingblock-content-wrapper">
																											<tr>
																												<td style="padding: 20px 0px 0px; " class="stylingblock-content-wrapper camarker-inner">
																													<table width="100%" cellspacing="0" cellpadding="0" border="0">
																														<!-- HEADER CONTENT -->
																														<tr>
																															<td align="center" valign="top" width="100%">
																																<table class="container" cellpadding="0" cellspacing="0" width="600">
																																	<tr>
																																		<td align="right" style="font-family: Arial, Verdana, Helvetica, Arial, sans-serif; font-size: 11px; color: #959595;" padding:10px="" 25px="" 0px;="">
																																			<a href="https://view.email-flaticon.com/?qs=10343dc396fc501b002cd96febcde4f19f346e3d12e407d6e314225eb8a8c21d2e7beba854f4d704b1f728371ff045ebcc38a31f03a7df2b5d95b746e0df9feb5a98c3eacc4045ff1c698877e1607df5" style="font-size:11px; color: #959595; text-decoration: none;"
																																				target="_blank"></a>
																																		</td>
																																	</tr>
																																</table>
																															</td>
																														</tr>
																													</table>
																												</td>
																											</tr>
																										</table>
																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																											<tr>
																												<td class="stylingblock-content-wrapper camarker-inner">
																													<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="text-align: center; background-color: #EFF3F6; border: 1px solid #EFF3F6; min-width: 100%; " class="stylingblock-content-wrapper">
																														<tr>
																															<td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner" align="center">
																																<table width="100%" cellspacing="0" cellpadding="0" role="presentation">
																																	<tr>
																																		<td align="center">
																																			<a href="javascript:void(0)" title="Jajuclinic" data-linkto="https://">
																																				<img data-assetid="6685" src="'.base_url().'public/email/logo.png" alt="logoimage" height="50" width="150" style="display: block; height: 50px; width: 150px; text-align: center; padding: 30px 20px;">
																																			</a>
																																		</td>
																																	</tr>
																																</table>
																															</td>
																														</tr>
																													</table>
																												</td>
																											</tr>
																										</table>
																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																											<tr>
																												<td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																													<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #FFFFFF; border: 0px; min-width: 100%; " class="stylingblock-content-wrapper">
																														<tr>
																															<td style="padding: 0px 0px 15px; " class="stylingblock-content-wrapper camarker-inner">
																																<table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;">
																																	<tr>
																																		<td>
																																			<table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;">
																																				<tr>
																																					<td valign="top" class="responsive-td" style="width: 100%;">
		
																																						<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																							<tr>
																																								<td style="padding: 0px 40px 20px; " class="stylingblock-content-wrapper camarker-inner">
																																									<h1 style="text-align: center;">
																																										<span style="font-weight: bold; font-size: 34px; line-height: 39px; color: #374957; font-family:Arial,Helvetica,sans-serif;">You Have A Mail ! </span></h1>
																																									<div style="text-align: left;"> <span style="font-family:Arial,Helvetica,sans-serif;font-size: 18px; line-height: 26px; text-align: left; color: #4A6375;">Subject: Enquiry E-mail </span>
																																										<p>
																																											<ol>
																																												<li>Name : '.$name.'</li>
																																												<li>Mobile no : '.$mobile.'</li>
																																												<li>City : '.$city.'</li>
																																												<li>Speciality: '.$speciality.'</li>
																																											</ol>
																																											Hello Dr. Jaju,<br> <br>You have a mail from '.$name.'. requested for an Enquiry about
																																											'.$speciality.' Treatment. please give a feedback about that.<br><br> Thank You.
																																										</p>
																																									</div>
																																								</td>
																																							</tr>
																																						</table>
																																						<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																																							<tr>
																																								<td class="stylingblock-content-wrapper camarker-inner">
																																									<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #FFFFFF; min-width: 100%; " class="stylingblock-content-wrapper">
																																										<tr>
																																											<td style="padding: 15px 0px 30px 40px; " class="stylingblock-content-wrapper camarker-inner">
																																												<table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
																																													<tr>
																																														<td align="left">
																																															<table border="0" cellspacing="0" cellpadding="0" role="presentation">
																																																<tr>
		
																																																</tr>
																																															</table>
																																														</td>
																																													</tr>
																																												</table>
																																											</td>
																																										</tr>
																																									</table>
																																								</td>
																																							</tr>
																																						</table>
																																					</td>
																																				</tr>
																																			</table>
																																		</td>
																																	</tr>
																																</table>
																															</td>
																														</tr>
																													</table>
																												</td>
																											</tr>
																										</table>
		
																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																											<tr>
																												<td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																													<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																														<tr>
																															<td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																<table width="100%" cellspacing="0" cellpadding="0" role="presentation">
																																	<tr>
																																		<td align="center">
																																			<img data-assetid="4588" src="#" alt="" height="1" width="1" style="display: block; padding: 0px; text-align: center; height: 1px; width: 1px; border: 0px;">
																																		</td>
																																	</tr>
																																</table>
																															</td>
																														</tr>
																													</table>
																												</td>
																											</tr>
																										</table>
																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																											<tr>
																												<td class="stylingblock-content-wrapper camarker-inner">
																													<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																														<tr>
																															<td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																																<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #FFFFFF; min-width: 100%; " class="stylingblock-content-wrapper">
																																	<tr>
																																		<td style="padding: 40px 10px; " class="stylingblock-content-wrapper camarker-inner">
																																			<table cellspacing="0" cellpadding="0" style="width: 100%;">
																																				<tr>
																																					<td>
																																						<table cellspacing="0" cellpadding="0" style="width: 100%;">
																																							<tr>
																																								<td valign="top" class="responsive-td" style="width: 100%; padding-bottom: 5px;">
																																									<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																										<tr>
																																											<td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																																												<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																													<tr>
																																														<td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																															<div style="text-align: center;"> <span style="font-size: 22px; line-height: 25px; color: #374957; font-family:Arial,Helvetica,sans-serif;"><b>Jaju Clinic Speciality Services</b></span>
																																																<span style="color:#fca120; font-size:22px; font-weight: bold; line-height: 25px; font-family:Arial,Helvetica,sans-serif;"></span><br><br>
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
																																					</td>
																																				</tr>
																																				<tr>
																																					<td>
																																						<table cellspacing="0" cellpadding="0" style="width: 100%;">
																																							<tr>
																																								<td valign="top" class="responsive-td" style="width: 50%; padding-top: 5px; padding-bottom: 5px; padding-right: 5px;">
																																									<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																										<tr>
																																											<td class="stylingblock-content-margin-cell" style="padding: 0px 0px 10px; ">
																																												<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																													<tr>
																																														<td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																															<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%; margin-left: 25px;">
																																																<tr>
																																																	<td style="text-align: center; width: 50%; vertical-align: top;">
																																																		<div style="line-height: 115%;">
																																																			<img alt="icon" data-assetid="2073" height="60" src="'.base_url().'public/email/skin.png" style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;" width="60">
																																																		</div>
																																																		<div style="line-height: 115%;"> <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>
																																																				<b style="color: #e83e8c;">Skin</b></span>
																																																		</div>
																																																	</td>
																																																	<td style="text-align: left; width: 50%; vertical-align: top;">
																																																		<div style="line-height: 100%; margin-left: 45px;">
																																																			<img alt="icon" data-assetid="2057" height="60" src="'.base_url().'public/email/endo.png" style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;" width="60">
																																																		</div>
																																																		<div style="line-height: 115%; margin-left: 35px;"> <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>
																																																				<b style="color: #28a745;">Endovascular </b></span>
																																																		</div>
																																																	</td>
																																																	<td style="text-align: left; width: 50%; vertical-align: top;">
																																																		<div style="line-height: 100%; margin-right: 126px;">
																																																			<img alt="icon" data-assetid="2057" height="60" src="'.base_url().'public/email/vericose.png" style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;" width="60">
																																																		</div>
																																																		<div style="line-height: 115%; margin-left: -15px;"> <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>
																																																				<b style="color: #007bff;">Vericose Veins</b></span>
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
																																								</td>
																																					</td>
																																					</tr>
																																					</table>
																																		</td>
																																		</tr>
																																		<tr>
																																			<td>
																																				<table cellspacing="0" cellpadding="0" style="width: 100%;">
																																					<tr>
																																						<td valign="top" class="responsive-td" style="width: 100%; padding-top: 5px;">
																																							<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																								<tr>
																																									<td class="stylingblock-content-margin-cell" style="padding: 20px 0px 0px; ">
																																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																											<tr>
																																												<td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																													<table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
																																														<tr>
																																															<td align="center">
																																																<table border="0" cellspacing="0" cellpadding="0" role="presentation">
																																																	<tr>
																																																		<td class="innertd buttonblock" bgcolor="#FCA120" style=" border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; background-color: #FCA120;"> <a target="_blank" class="buttonstyles" style=" font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: #FFFFFF; text-align: center; text-decoration: none; display: block; font-weight: 600; line-height: 20px; background-color: rgb(83, 80, 80); border: 1px solid rgb(83, 80, 80)y; padding: 12px 30px; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px;"
																																																				href="'.base_url().'">Book Appoinment</a>
																																																		</td>
																																																	</tr>
																																																</table>
																																															</td>
																																														</tr>
																																													</table>
																																												</td>
																																											</tr>
																																										</table>
																																									</td>
																																								</tr>
																																							</table>
																																						</td>
																																					</tr>
																																				</table>
																																			</td>
																																		</tr>
																																		</table>
																															</td>
																															</tr>
																															</table>
																												</td>
																												</tr>
																												</table>
																									</td>
																									</tr>
																									</table>
																									<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																										<tr>
																											<td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner">
																												<table cellspacing="0" cellpadding="0" style="width: 100%;">
																													<tr>
																														<td>
																															<table cellspacing="0" cellpadding="0" style="width: 100%;">
																																<tr>
																																	<td valign="top" class="responsive-td" style="width: 100%; padding-bottom: 3px;">
																																		<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																																			<tr>
																																				<td class="stylingblock-content-wrapper camarker-inner">
																																				</td>
																																			</tr>
																																		</table>
																																	</td>
																																</tr>
																															</table>
																														</td>
																													</tr>
																													<tr>
																														<td>
																															<table cellspacing="0" cellpadding="0" style="width: 100%;">
																																<tr>
																																	<td valign="top" class="responsive-td" style="width: 100%; padding-top: 3px;">
																																		<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="text-align: left; min-width: 100%; " class="stylingblock-content-wrapper">
																																			<tr>
																																				<td class="stylingblock-content-wrapper camarker-inner" align="left">
																																					<table cellpadding="0" cellspacing="0" class="socialshare-wrapper" width="100%">
																																						<tr>
																																							<td align="center">
																																								<table cellpadding="0" cellspacing="0" align="center">
																																									<tr>
																																										<td align="center">
																																											<table class="socialshare-innertable" style="display: inline-block">
																																												<tr>
																																													<td style="padding:5px 10px">
																																														<a href="https://www.facebook.com/jajuendovascularclinic"><img src="https://image.s4.exct.net/lib/fe911573736c007d7d/m/2/1a560d12-c8d7-40cb-9e90-9df36933fdfa.png"
																																																alt="Facebook" width="24" height="24" style="display: block;; width: 24px !important; height: 24px !important">
																																														</a>
																																													</td>
																																												</tr>
																																											</table>
																																											<table class="socialshare-innertable" style="display: inline-block">
																																												<tr>
																																													<td style="padding:5px 10px">
																																														<a href="https://www.instagram.com/jajuendovascularclinic/"><img src="https://image.s4.exct.net/lib/fe911573736c007d7d/m/2/0e6fddf1-c205-4752-ad42-e9dc03c83dea.png"
																																																alt="Instagram" width="24" height="24" style="display: block;; width: 24px !important; height: 24px !important">
																																														</a>
																																													</td>
																																												</tr>
																																											</table>
		
																																										</td>
																																									</tr>
																																								</table>
																																							</td>
																																						</tr>
																																					</table>
																																				</td>
																																			</tr>
																																		</table>
																																	</td>
																																</tr>
																															</table>
																														</td>
																													</tr>
																												</table>
																											</td>
																										</tr>
																									</table>
																									<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																										<tr>
																											<td class="stylingblock-content-margin-cell" align="center" style="padding: 0px 0px 50px; ">
																												<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="text-align: center; background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																													<tr>
																														<td style="padding: 0px 30px; " class="stylingblock-content-wrapper camarker-inner" align="center">
		
																															<p style="font-size: 13px; line-height: 200%; text-align: center; max-width: 400px; margin: 0 auto;"> <span style="font-size:13px;line-height:19px;font-family:Arial,Helvetica,sans-serif;color: #869fb2;">Copyright 2021 JajuClinic, all rights reserved.</span>
																															</p>
																															<p style="font-size: 13px; line-height: 200%; text-align: center; max-width: 400px; margin: 5px auto 20px;"> <span style="font-size:13px;line-height:19px;font-family:Arial,Helvetica,sans-serif;color: #869fb2;">JAJU Clinic, Opp. HDFC
																																Bank, Shivaji Nagar Road
																																Sutgirni Chowk,
																																Aurangabad 431009</span>
																															</p>
																														</td>
																													</tr>
																												</table>
																											</td>
																										</tr>
																									</table>
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
														</table>
											</td>
											</tr>
											</table>
								</td>
								</tr>
								</table>
					</td>
					</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td valign="top"></td>
				</tr>
			</table>
		</body>
		
		</html>';
                    
        $subject = "Your Response is recorded | Jaju Clinic";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:Jaju Clinic<contact@jajuclinic.com>" . "\r\n";
        $headers .= "Reply-To:noreply@jajuclinic.com" . "\r\n";
        $headers .= "X-Mailer:PHP/" . phpversion();
        // mail($to,$subject,$htmlContent,$headers,'-fcontact@jajuclinic.com');
        
        
    }
 
    function skin_endo_email($name, $email, $mobile, $city, $speciality, $message, $address)
    {
        
        $to =$email;
        date_default_timezone_set('Asia/Kolkata');
        $date=date('d-m-Y H:i:s');
        $weekday=date('l', strtotime( $date));
        $month = date('F', strtotime($date));
        $year = date('d, Y');
        $time = date('h:i:s a', strtotime($date));
        
       echo $htmlContent='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	   <html>
	   
	   <head>
		   <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		   <META NAME="referrer" CONTENT="no-referrer">
		   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
		   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		   <meta name="color-scheme" content="light only">
		   <meta name="supported-color-schemes" content="light only">
		   <style type="text/css">
			   ReadMsgBody {
				   width: 100%;
			   }
			   
			   .ExternalClass {
				   width: 100%;
			   }
			   
			   .ExternalClass,
			   .ExternalClass p,
			   .ExternalClass span,
			   .ExternalClass font,
			   .ExternalClass td,
			   .ExternalClass div {
				   line-height: 100%;
			   }
			   
			   body {
				   -webkit-text-size-adjust: 100%;
				   -ms-text-size-adjust: 100%;
				   margin: 0 !important;
			   }
			   
			   p {
				   margin: 1em 0;
			   }
			   
			   table td {
				   border-collapse: collapse;
			   }
			   
			   img {
				   outline: 0;
			   }
			   
			   a img {
				   border: none;
			   }
			   
			   .container {
				   max-width: 600px !important;
			   }
			   
			   @-ms-viewport {
				   width: device-width;
			   }
		   </style>
		   <style type="text/css">
			   @media only screen and (max-width: 480px) {
				   .container {
					   width: 100% !important;
				   }
				   .footer {
					   width: auto !important;
					   margin-left: 0;
				   }
				   .mobile-hidden {
					   display: none !important;
				   }
				   .logo {
					   display: block !important;
					   padding: 0 !important;
				   }
				   img {
					   max-width: 100% !important;
					   height: auto !important;
					   max-height: auto !important;
				   }
				   .header img {
					   max-width: 100% !important;
					   height: auto !important;
					   max-height: auto !important;
				   }
				   .photo img {
					   width: 100% !important;
					   max-width: 100% !important;
					   height: auto !important;
				   }
				   .drop {
					   display: block !important;
					   width: 100% !important;
					   float: left;
					   clear: both;
				   }
				   .footerlogo {
					   display: block !important;
					   width: 100% !important;
					   padding-top: 15px;
					   float: left;
					   clear: both;
				   }
				   .nav4,
				   .nav5,
				   .nav6 {
					   display: none !important;
				   }
				   .tableBlock {
					   width: 100% !important;
				   }
				   .responsive-td {
					   width: 100% !important;
					   display: block !important;
					   padding: 0 !important;
				   }
				   .fluid,
				   .fluid-centered {
					   width: 100% !important;
					   max-width: 100% !important;
					   height: auto !important;
					   margin-left: auto !important;
					   margin-right: auto !important;
				   }
				   .fluid-centered {
					   margin-left: auto !important;
					   margin-right: auto !important;
				   }
				   /* MOBILE GLOBAL STYLES - DO NOT CHANGE */
				   body,
				   .tb_properties {
					   font-family: Arial !important;
					   font-size: 16px !important;
					   color: #808080 !important;
					   line-height: 1.5 !important;
					   padding: 0px !important;
				   }
				   h1 {
					   font-family: Arial !important;
					   font-size: 22px !important;
					   color: #374957 !important;
					   line-height: 1.15 !important;
				   }
				   h2 {
					   font-family: Arial !important;
					   font-size: 22px !important;
					   color: #374957 !important;
					   line-height: 1.15 !important;
				   }
				   h3 {
					   font-family: Arial !important;
					   font-size: 18px !important;
					   color: #374957 !important;
					   line-height: 1.15 !important;
				   }
				   a:not(.buttonstyles) {
					   line-height: 1 !important;
				   }
				   .mobile-hidden {
					   display: none !important;
				   }
				   .responsive-td {
					   width: 100% !important;
					   display: block !important;
					   padding: 0 !important;
				   }
				   /* END OF MOBILE GLOBAL STYLES - DO NOT CHANGE */
			   }
			   
			   @media only screen and (max-width: 640px) {
				   .container {
					   width: 100% !important;
				   }
				   .mobile-hidden {
					   display: none !important;
				   }
				   .logo {
					   display: block !important;
					   padding: 0 !important;
				   }
				   .photo img {
					   width: 100% !important;
					   height: auto !important;
				   }
				   .nav5,
				   .nav6 {
					   display: none !important;
				   }
				   .fluid,
				   .fluid-centered {
					   width: 100% !important;
					   max-width: 100% !important;
					   height: auto !important;
					   margin-left: auto !important;
					   margin-right: auto !important;
				   }
				   .fluid-centered {
					   margin-left: auto !important;
					   margin-right: auto !important;
				   }
			   }
		   </style>
		   <!--[if mso]> <style type="text/css"> /* Begin Outlook Font Fix */ body, table, td { font-family : Arial, helvetica, sans-serif; line-height : 150%; font-size : 16px; color : #4A6375; } /* End Outlook Font Fix */ </style> <![endif]-->
	   </head>
	   
	   <body bgcolor="#EFF3F6" text="#000000" style="-webkit-text-size-adjust:none;background-color : #EFF3F6; font-family : Arial, helvetica, sans-serif; line-height : 150%; font-size : 16px; color : #4A6375; padding : 0px; ">
		   <style type="text/css">
			   div.preheader {
				   display: none !important;
			   }
		   </style>
		   <div class="preheader" style="font-size: 1px; display: none !important;">It’s that time of the year when everything looks beautiful, just like these icons.</div>
		   <div style="font-size:0; line-height:0;">
			   <img src="https://click.email-flaticon.com/open.aspx?ffcb10-fecc157071660d7e-fe591672726604757d1d-fe3c11717564047e761370-ff6317717d-fe5712727c670d7b7616-ff941d72&d=500006&bmt=0" width="1" height="1" alt="">
		   </div>
		   <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
			   <tr>
				   <td align="center" valign="top"></td>
			   </tr>
			   <tr>
				   <td align="center">
					   <table cellspacing="0" cellpadding="0" border="0" width="600" class="container" align="center" style="max-width: 600px;">
						   <tr>
							   <td>
								   <table class="tb_properties border_style" style="background-color : transparent; border : 0px;font-size : 16px; font-family : Arial, helvetica, sans-serif; line-height : 150%; color : #4A6375; " cellspacing="0" cellpadding="0" bgcolor="transparent" width="100%">
									   <tr>
										   <td align="center" valign="top">
											   <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
												   <tr>
													   <!-- added padding here -->
													   <td class="content_padding" style="padding : 0px; ">
														   <!-- end of comment -->
														   <table border="0" cellpadding="0" cellspacing="0" width="100%">
															   <tr>
																   <!-- top slot -->
																   <td align="center" class="header" valign="top">
																	   <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
																		   <tbody>
																			   <tr>
																				   <td align="left" valign="top">
																					   <table cellspacing="0" cellpadding="0" style="width:100%">
																						   <tbody>
																							   <tr>
																								   <td class="responsive-td" valign="top" style="width: 100%;">
																									   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #EFF3F6; min-width: 100%; " class="stylingblock-content-wrapper">
																										   <tr>
																											   <td style="padding: 20px 0px 0px; " class="stylingblock-content-wrapper camarker-inner">
																												   <table width="100%" cellspacing="0" cellpadding="0" border="0">
																													   <!-- HEADER CONTENT -->
																													   <tr>
																														   <td align="center" valign="top" width="100%">
																															   <table class="container" cellpadding="0" cellspacing="0" width="600">
																																   <tr>
																																	   <td align="right" style="font-family: Arial, Verdana, Helvetica, Arial, sans-serif; font-size: 11px; color: #959595;" padding:10px="" 25px="" 0px;="">
																																		   <a href="https://view.email-flaticon.com/?qs=10343dc396fc501b002cd96febcde4f19f346e3d12e407d6e314225eb8a8c21d2e7beba854f4d704b1f728371ff045ebcc38a31f03a7df2b5d95b746e0df9feb5a98c3eacc4045ff1c698877e1607df5" style="font-size:11px; color: #959595; text-decoration: none;"
																																			   target="_blank"></a>
																																	   </td>
																																   </tr>
																															   </table>
																														   </td>
																													   </tr>
																												   </table>
																											   </td>
																										   </tr>
																									   </table>
																									   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																										   <tr>
																											   <td class="stylingblock-content-wrapper camarker-inner">
																												   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="text-align: center; background-color: #EFF3F6; border: 1px solid #EFF3F6; min-width: 100%; " class="stylingblock-content-wrapper">
																													   <tr>
																														   <td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner" align="center">
																															   <table width="100%" cellspacing="0" cellpadding="0" role="presentation">
																																   <tr>
																																	   <td align="center">
																																		   <a href="javascript:void(0)" title="Jajuclinic" data-linkto="https://">
																																			   <img data-assetid="6685" src="'.base_url().'public/email/logo.png" alt="logoimage" height="50" width="150" style="display: block; height: 50px; width: 150px; text-align: center; padding: 30px 20px;">
																																		   </a>
																																	   </td>
																																   </tr>
																															   </table>
																														   </td>
																													   </tr>
																												   </table>
																											   </td>
																										   </tr>
																									   </table>
																									   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																										   <tr>
																											   <td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																												   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #FFFFFF; border: 0px; min-width: 100%; " class="stylingblock-content-wrapper">
																													   <tr>
																														   <td style="padding: 0px 0px 15px; " class="stylingblock-content-wrapper camarker-inner">
																															   <table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;">
																																   <tr>
																																	   <td>
																																		   <table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;">
																																			   <tr>
																																				   <td valign="top" class="responsive-td" style="width: 100%;">
																																					   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																																						   <tr>
																																							   <td style="padding-bottom: 10px; " class="stylingblock-content-wrapper camarker-inner">
																																								   <table width="100%" cellspacing="0" cellpadding="0" role="presentation">
																																									   <tr>
																																										   <td align="center">
																																											   <a href="javascript:void(0)" title="Autumn" data-linkto="https://">
																																												   <img data-assetid="33853" src="mail.png" alt="" width="600" style="display: block; padding: 0px; text-align: center; height: auto; width: 100%; border: 0px;">
																																											   </a>
																																										   </td>
																																									   </tr>
																																								   </table>
																																							   </td>
																																						   </tr>
																																					   </table>
																																					   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																						   <tr>
																																							   <td style="padding: 0px 40px 20px; " class="stylingblock-content-wrapper camarker-inner">
																																								   <h1 style="text-align: center;">
																																									   <span style="font-weight: bold; font-size: 34px; line-height: 39px; color: #374957; font-family:Arial,Helvetica,sans-serif;">You Have A Mail ! </span></h1>
																																								   <div style="text-align: left;"> <span style="font-family:Arial,Helvetica,sans-serif;font-size: 18px; line-height: 26px; text-align: left; color: #4A6375;">Subject: Appoinment E-mail </span>
																																									   <p>
																																										   <ol>
																																											   <li>Name : '.$name.'</li>
																																											   <li>Mobile no : '.$mobile.'</li>
																																											   <li>City: '.$city.'</li>
																																											   <li>Message: '.$message.'</li>
																																											   <li>Speciality: '.$speciality.'</li>
																																											   <li>Address: '.$address.'</li>
																																										   </ol>
																																										   Hello Dr. Jaju,<br> <br>You have an Appoinment mail from '.$name.'. Request an Appoinment
																																										   for <b> '.$speciality.' Treatment on  '.$date.' at '.$time.' .</b><br><br> Thank You.
	   
	   
																																									   </p>
																																								   </div>
																																							   </td>
																																						   </tr>
																																					   </table>
																																					   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																																						   <tr>
																																							   <td class="stylingblock-content-wrapper camarker-inner">
																																								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #FFFFFF; min-width: 100%; " class="stylingblock-content-wrapper">
																																									   <tr>
																																										   <td style="padding: 15px 0px 30px 40px; " class="stylingblock-content-wrapper camarker-inner">
																																											   <table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
																																												   <tr>
																																													   <td align="left">
																																														   <table border="0" cellspacing="0" cellpadding="0" role="presentation">
																																															   <tr>
																																																   <!-- <td class="innertd buttonblock" bgcolor="#4AD295" style=" border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; background-color: #4AD295;"> <a target="_blank" class="buttonstyles" style=" font-weight: 600; font-size: 16px; line-height: 20px; font-family: Arial, Helvetica, sans-serif; color: #FFFFFF; text-align: left; text-decoration: none; display: block; background-color: #4AD295; border: 1px solid #4AD295; padding: 12px 30px; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px;"
																																																		   F"https://click.email-flaticon.com/?qs=644bec38176e231bcbde66d6b704c9bfaf7fbcf425caf3b08abb2fe2c8e4a76755dd4c24fbc265829442e9c99732efd8e12c7333b696c5ec6938648b064f6f26"
																																																		   title="Download them" data-linkto="https://">Download them</a>
																																																   </td> -->
																																															   </tr>
																																														   </table>
																																													   </td>
																																												   </tr>
																																											   </table>
																																										   </td>
																																									   </tr>
																																								   </table>
																																							   </td>
																																						   </tr>
																																					   </table>
																																				   </td>
																																			   </tr>
																																		   </table>
																																	   </td>
																																   </tr>
																															   </table>
																														   </td>
																													   </tr>
																												   </table>
																											   </td>
																										   </tr>
																									   </table>
	   
																									   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																										   <tr>
																											   <td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																												   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																													   <tr>
																														   <td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																															   <table width="100%" cellspacing="0" cellpadding="0" role="presentation">
																																   <tr>
																																	   <td align="center">
																																		   <img data-assetid="4588" src="#" alt="" height="1" width="1" style="display: block; padding: 0px; text-align: center; height: 1px; width: 1px; border: 0px;">
																																	   </td>
																																   </tr>
																															   </table>
																														   </td>
																													   </tr>
																												   </table>
																											   </td>
																										   </tr>
																									   </table>
																									   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																										   <tr>
																											   <td class="stylingblock-content-wrapper camarker-inner">
																												   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																													   <tr>
																														   <td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																															   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #FFFFFF; min-width: 100%; " class="stylingblock-content-wrapper">
																																   <tr>
																																	   <td style="padding: 40px 10px; " class="stylingblock-content-wrapper camarker-inner">
																																		   <table cellspacing="0" cellpadding="0" style="width: 100%;">
																																			   <tr>
																																				   <td>
																																					   <table cellspacing="0" cellpadding="0" style="width: 100%;">
																																						   <tr>
																																							   <td valign="top" class="responsive-td" style="width: 100%; padding-bottom: 5px;">
																																								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																									   <tr>
																																										   <td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																																											   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																												   <tr>
																																													   <td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																														   <div style="text-align: center;"> <span style="font-size: 22px; line-height: 25px; color: #374957; font-family:Arial,Helvetica,sans-serif;"><b>Jaju Clinic Speciality Services</b></span>
																																															   <span style="color:#fca120; font-size:22px; font-weight: bold; line-height: 25px; font-family:Arial,Helvetica,sans-serif;"></span><br><br>
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
																																				   </td>
																																			   </tr>
																																			   <tr>
																																				   <td>
																																					   <table cellspacing="0" cellpadding="0" style="width: 100%;">
																																						   <tr>
																																							   <td valign="top" class="responsive-td" style="width: 50%; padding-top: 5px; padding-bottom: 5px; padding-right: 5px;">
																																								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																									   <tr>
																																										   <td class="stylingblock-content-margin-cell" style="padding: 0px 0px 10px; ">
																																											   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																												   <tr>
																																													   <td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																														   <table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%; margin-left: 25px;">
																																															   <tr>
																																																   <td style="text-align: center; width: 50%; vertical-align: top;">
																																																	   <div style="line-height: 115%;">
																																																		   <img alt="icon" data-assetid="2073" height="60" src="'.base_url().'public/email/skin.png" style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;" width="60">
																																																	   </div>
																																																	   <div style="line-height: 115%;"> <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>
																																																			   <b style="color: #e83e8c;">Skin</b></span>
																																																	   </div>
																																																   </td>
																																																   <td style="text-align: left; width: 50%; vertical-align: top;">
																																																	   <div style="line-height: 100%; margin-left: 45px;">
																																																		   <img alt="icon" data-assetid="2057" height="60" src="'.base_url().'public/email/endo.png" style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;" width="60">
																																																	   </div>
																																																	   <div style="line-height: 115%; margin-left: 35px;"> <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>
																																																			   <b style="color: #28a745;">Endovascular </b></span>
																																																	   </div>
																																																   </td>
																																																   <td style="text-align: left; width: 50%; vertical-align: top;">
																																																	   <div style="line-height: 100%; margin-right: 126px;">
																																																		   <img alt="icon" data-assetid="2057" height="60" src="'.base_url().'public/email/vericose.png" style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;" width="60">
																																																	   </div>
																																																	   <div style="line-height: 115%; margin-left: -15px;"> <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>
																																																			   <b style="color: #007bff;">Vericose Veins</b></span>
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
																																							   </td>
																																				   </td>
																																				   </tr>
																																				   </table>
																																	   </td>
																																	   </tr>
																																	   <tr>
																																		   <td>
																																			   <table cellspacing="0" cellpadding="0" style="width: 100%;">
																																				   <tr>
																																					   <td valign="top" class="responsive-td" style="width: 100%; padding-top: 5px;">
																																						   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																							   <tr>
																																								   <td class="stylingblock-content-margin-cell" style="padding: 20px 0px 0px; ">
																																									   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																										   <tr>
																																											   <td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																												   <table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
																																													   <tr>
																																														   <td align="center">
																																															   <table border="0" cellspacing="0" cellpadding="0" role="presentation">
																																																   <tr>
																																																	   <td class="innertd buttonblock" bgcolor="#FCA120" style=" border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; background-color: #FCA120;"> <a target="_blank" class="buttonstyles" style=" font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: #FFFFFF; text-align: center; text-decoration: none; display: block; font-weight: 600; line-height: 20px; background-color: rgb(83, 80, 80); border: 1px solid rgb(83, 80, 80)y; padding: 12px 30px; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px;"
																																																			   href="'.base_url().'">Book Appoinment</a>
																																																	   </td>
																																																   </tr>
																																															   </table>
																																														   </td>
																																													   </tr>
																																												   </table>
																																											   </td>
																																										   </tr>
																																									   </table>
																																								   </td>
																																							   </tr>
																																						   </table>
																																					   </td>
																																				   </tr>
																																			   </table>
																																		   </td>
																																	   </tr>
																																	   </table>
																														   </td>
																														   </tr>
																														   </table>
																											   </td>
																											   </tr>
																											   </table>
																								   </td>
																								   </tr>
																								   </table>
																								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																									   <tr>
																										   <td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner">
																											   <table cellspacing="0" cellpadding="0" style="width: 100%;">
																												   <tr>
																													   <td>
																														   <table cellspacing="0" cellpadding="0" style="width: 100%;">
																															   <tr>
																																   <td valign="top" class="responsive-td" style="width: 100%; padding-bottom: 3px;">
																																	   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																																		   <tr>
																																			   <td class="stylingblock-content-wrapper camarker-inner">
																																			   </td>
																																		   </tr>
																																	   </table>
																																   </td>
																															   </tr>
																														   </table>
																													   </td>
																												   </tr>
																												   <tr>
																													   <td>
																														   <table cellspacing="0" cellpadding="0" style="width: 100%;">
																															   <tr>
																																   <td valign="top" class="responsive-td" style="width: 100%; padding-top: 3px;">
																																	   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="text-align: left; min-width: 100%; " class="stylingblock-content-wrapper">
																																		   <tr>
																																			   <td class="stylingblock-content-wrapper camarker-inner" align="left">
																																				   <table cellpadding="0" cellspacing="0" class="socialshare-wrapper" width="100%">
																																					   <tr>
																																						   <td align="center">
																																							   <table cellpadding="0" cellspacing="0" align="center">
																																								   <tr>
																																									   <td align="center">
																																										   <table class="socialshare-innertable" style="display: inline-block">
																																											   <tr>
																																												   <td style="padding:5px 10px">
																																													   <a href="https://www.facebook.com/jajuendovascularclinic"><img src="https://image.s4.exct.net/lib/fe911573736c007d7d/m/2/1a560d12-c8d7-40cb-9e90-9df36933fdfa.png"
																																															   alt="Facebook" width="24" height="24" style="display: block;; width: 24px !important; height: 24px !important">
																																													   </a>
																																												   </td>
																																											   </tr>
																																										   </table>
																																										   <!--[if mso]></td><td><![endif]-->
																																										   <table class="socialshare-innertable" style="display: inline-block">
																																											   <tr>
																																												   <td style="padding:5px 10px">
																																													   <a href="https://www.instagram.com/jajuendovascularclinic/"><img src="https://image.s4.exct.net/lib/fe911573736c007d7d/m/2/0e6fddf1-c205-4752-ad42-e9dc03c83dea.png"
																																															   alt="Instagram" width="24" height="24" style="display: block;; width: 24px !important; height: 24px !important">
																																													   </a>
																																												   </td>
																																											   </tr>
																																										   </table>
	   
																																									   </td>
																																								   </tr>
																																							   </table>
																																						   </td>
																																					   </tr>
																																				   </table>
																																			   </td>
																																		   </tr>
																																	   </table>
																																   </td>
																															   </tr>
																														   </table>
																													   </td>
																												   </tr>
																											   </table>
																										   </td>
																									   </tr>
																								   </table>
																								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																									   <tr>
																										   <td class="stylingblock-content-margin-cell" align="center" style="padding: 0px 0px 50px; ">
																											   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="text-align: center; background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																												   <tr>
																													   <td style="padding: 0px 30px; " class="stylingblock-content-wrapper camarker-inner" align="center">
																														   <p style="font-size: 13px; line-height: 200%; text-align: center; max-width: 400px; margin: 0 auto;"> <span style="font-size:13px;line-height:19px;font-family:Arial,Helvetica,sans-serif;color: #869fb2;">Copyright 2021 JajuClinic, all rights reserved.</span>
																														   </p>
																														   <p style="font-size: 13px; line-height: 200%; text-align: center; max-width: 400px; margin: 5px auto 20px;"> <span style="font-size:13px;line-height:19px;font-family:Arial,Helvetica,sans-serif;color: #869fb2;">JAJU Clinic, Opp. HDFC
																															   Bank, Shivaji Nagar Road
																															   Sutgirni Chowk,
																															   Aurangabad 431009</span>
																														   </p>
	   
																													   </td>
																												   </tr>
																											   </table>
																										   </td>
																									   </tr>
																								   </table>
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
													   </table>
										   </td>
										   </tr>
										   </table>
							   </td>
							   </tr>
							   </table>
				   </td>
				   </tr>
				   </table>
				   </td>
			   </tr>
			   <tr>
				   <td valign="top"></td>
			   </tr>
		   </table>
	   </body>
	   
	   </html>';
                    
        $subject = "Your Response is recorded | Jaju Clinic";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:Jaju Clinic<contact@jajuclinic.com>" . "\r\n";
        $headers .= "Reply-To:noreply@jajuclinic.com" . "\r\n";
        $headers .= "X-Mailer:PHP/" . phpversion();
        //mail($to,$subject,$htmlContent,$headers,'-fcontact@jajuclinic.com');
        
			   
    }
    function endo_book_appointment_email($name, $email, $mobile, $city, $speciality, $message, $address)
    {
        
        $to =$email;
        date_default_timezone_set('Asia/Kolkata');
        $date=date('d-m-Y H:i:s');
        $weekday=date('l', strtotime( $date));
        $month = date('F', strtotime($date));
        $year = date('d, Y');
        $time = date('h:i:s a', strtotime($date));
        
        echo $htmlContent='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		
		<head>
			<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
			<META NAME="referrer" CONTENT="no-referrer">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="color-scheme" content="light only">
			<meta name="supported-color-schemes" content="light only">
			<style type="text/css">
				ReadMsgBody {
					width: 100%;
				}
				
				.ExternalClass {
					width: 100%;
				}
				
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				
				body {
					-webkit-text-size-adjust: 100%;
					-ms-text-size-adjust: 100%;
					margin: 0 !important;
				}
				
				p {
					margin: 1em 0;
				}
				
				table td {
					border-collapse: collapse;
				}
				
				img {
					outline: 0;
				}
				
				a img {
					border: none;
				}
				
				.container {
					max-width: 600px !important;
				}
				
				@-ms-viewport {
					width: device-width;
				}
			</style>
			<style type="text/css">
				@media only screen and (max-width: 480px) {
					.container {
						width: 100% !important;
					}
					.footer {
						width: auto !important;
						margin-left: 0;
					}
					.mobile-hidden {
						display: none !important;
					}
					.logo {
						display: block !important;
						padding: 0 !important;
					}
					img {
						max-width: 100% !important;
						height: auto !important;
						max-height: auto !important;
					}
					.header img {
						max-width: 100% !important;
						height: auto !important;
						max-height: auto !important;
					}
					.photo img {
						width: 100% !important;
						max-width: 100% !important;
						height: auto !important;
					}
					.drop {
						display: block !important;
						width: 100% !important;
						float: left;
						clear: both;
					}
					.footerlogo {
						display: block !important;
						width: 100% !important;
						padding-top: 15px;
						float: left;
						clear: both;
					}
					.nav4,
					.nav5,
					.nav6 {
						display: none !important;
					}
					.tableBlock {
						width: 100% !important;
					}
					.responsive-td {
						width: 100% !important;
						display: block !important;
						padding: 0 !important;
					}
					.fluid,
					.fluid-centered {
						width: 100% !important;
						max-width: 100% !important;
						height: auto !important;
						margin-left: auto !important;
						margin-right: auto !important;
					}
					.fluid-centered {
						margin-left: auto !important;
						margin-right: auto !important;
					}
					body,
					.tb_properties {
						font-family: Arial !important;
						font-size: 16px !important;
						color: #808080 !important;
						line-height: 1.5 !important;
						padding: 0px !important;
					}
					h1 {
						font-family: Arial !important;
						font-size: 22px !important;
						color: #374957 !important;
						line-height: 1.15 !important;
					}
					h2 {
						font-family: Arial !important;
						font-size: 22px !important;
						color: #374957 !important;
						line-height: 1.15 !important;
					}
					h3 {
						font-family: Arial !important;
						font-size: 18px !important;
						color: #374957 !important;
						line-height: 1.15 !important;
					}
					a:not(.buttonstyles) {
						line-height: 1 !important;
					}
					.mobile-hidden {
						display: none !important;
					}
					.responsive-td {
						width: 100% !important;
						display: block !important;
						padding: 0 !important;
					}
					/* END OF MOBILE GLOBAL STYLES - DO NOT CHANGE */
				}
				
				@media only screen and (max-width: 640px) {
					.container {
						width: 100% !important;
					}
					.mobile-hidden {
						display: none !important;
					}
					.logo {
						display: block !important;
						padding: 0 !important;
					}
					.photo img {
						width: 100% !important;
						height: auto !important;
					}
					.nav5,
					.nav6 {
						display: none !important;
					}
					.fluid,
					.fluid-centered {
						width: 100% !important;
						max-width: 100% !important;
						height: auto !important;
						margin-left: auto !important;
						margin-right: auto !important;
					}
					.fluid-centered {
						margin-left: auto !important;
						margin-right: auto !important;
					}
				}
			</style>
			<!--[if mso]> <style type="text/css"> /* Begin Outlook Font Fix */ body, table, td { font-family : Arial, helvetica, sans-serif; line-height : 150%; font-size : 16px; color : #4A6375; } /* End Outlook Font Fix */ </style> <![endif]-->
		</head>
		
		<body bgcolor="#EFF3F6" text="#000000" style="-webkit-text-size-adjust:none;background-color : #EFF3F6; font-family : Arial, helvetica, sans-serif; line-height : 150%; font-size : 16px; color : #4A6375; padding : 0px; ">
		
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td align="center" valign="top"></td>
				</tr>
				<tr>
					<td align="center">
						<table cellspacing="0" cellpadding="0" border="0" width="600" class="container" align="center" style="max-width: 600px;">
							<tr>
								<td>
									<table class="tb_properties border_style" style="background-color : transparent; border : 0px;font-size : 16px; font-family : Arial, helvetica, sans-serif; line-height : 150%; color : #4A6375; " cellspacing="0" cellpadding="0" bgcolor="transparent" width="100%">
										<tr>
											<td align="center" valign="top">
												<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
														<td class="content_padding" style="padding : 0px; ">
															<table border="0" cellpadding="0" cellspacing="0" width="100%">
																<tr>
																	<td align="center" class="header" valign="top">
																		<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
																			<tbody>
																				<tr>
																					<td align="left" valign="top">
																						<table cellspacing="0" cellpadding="0" style="width:100%">
																							<tbody>
																								<tr>
																									<td class="responsive-td" valign="top" style="width: 100%;">
																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #EFF3F6; min-width: 100%; " class="stylingblock-content-wrapper">
																											<tr>
																												<td style="padding: 20px 0px 0px; " class="stylingblock-content-wrapper camarker-inner">
																													<table width="100%" cellspacing="0" cellpadding="0" border="0">
		
																													</table>
																												</td>
																											</tr>
																										</table>
																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																											<tr>
																												<td class="stylingblock-content-wrapper camarker-inner">
																													<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="text-align: center; background-color: #EFF3F6; border: 1px solid #EFF3F6; min-width: 100%; " class="stylingblock-content-wrapper">
																														<tr>
																															<td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner" align="center">
																																<table width="100%" cellspacing="0" cellpadding="0" role="presentation">
																																	<tr>
																																		<td align="center">
																																			<a href="javascript:void(0)" title="Jajuclinic" data-linkto="https://">
																																				<img data-assetid="6685" src="'.base_url().'public/email/logo.png" alt="logoimage" height="50" width="150" style="display: block; height: 50px; width: 150px; text-align: center; padding: 30px 20px;">
																																			</a>
																																		</td>
																																	</tr>
																																</table>
																															</td>
																														</tr>
																													</table>
																												</td>
																											</tr>
																										</table>
																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																											<tr>
																												<td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																													<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #FFFFFF; border: 0px; min-width: 100%; " class="stylingblock-content-wrapper">
																														<tr>
																															<td style="padding: 0px 0px 15px; " class="stylingblock-content-wrapper camarker-inner">
																																<table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;">
																																	<tr>
																																		<td>
																																			<table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;">
																																				<tr>
																																					<td valign="top" class="responsive-td" style="width: 100%;">
		
																																						<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																							<tr>
																																								<td style="padding: 0px 40px 20px; " class="stylingblock-content-wrapper camarker-inner">
																																									<h1 style="text-align: center;">
																																										<span style="font-weight: bold; font-size: 34px; line-height: 39px; color: #374957; font-family:Arial,Helvetica,sans-serif;">You Have A Mail ! </span></h1>
																																									<div style="text-align: left;"> <span style="font-family:Arial,Helvetica,sans-serif;font-size: 18px; line-height: 26px; text-align: left; color: #4A6375;">Subject: Appoinment E-mail for Endovascular Treatment</span>
																																										<p>
																																											<ol>
																																												<ol>
																																													<li>Name : '.$name.'</li>
																																													<li>Mobile no : '.$mobile.'</li>
																																													<li>City: '.$city.'</li>
																																													<li>Message: '.$message.'</li>
																																													<li>Speciality: '.$speciality.'</li>
																																													<li>Address: '.$address.'</li>
																																												</ol>
																																											</ol>
																																											Hello Dr. Jaju,<br> <br>You have an Appoinment mail from '.$name.'. Request an Appoinment
																																											for <b>Endovascular Treatment on '.$date.' at '.$time.' .</b>
		
		
																																										</p>
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
																															</td>
																														</tr>
																													</table>
																												</td>
																											</tr>
																										</table>
		
		
																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																											<tr>
																												<td class="stylingblock-content-wrapper camarker-inner">
																													<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																														<tr>
																															<td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																																<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #FFFFFF; min-width: 100%; " class="stylingblock-content-wrapper">
																																	<tr>
																																		<td style="padding: 40px 10px; " class="stylingblock-content-wrapper camarker-inner">
																																			<table cellspacing="0" cellpadding="0" style="width: 100%;">
																																				<tr>
																																					<td>
																																						<table cellspacing="0" cellpadding="0" style="width: 100%;">
																																							<tr>
																																								<td valign="top" class="responsive-td" style="width: 100%; padding-bottom: 5px;">
																																									<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																										<tr>
																																											<td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																																												<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																													<tr>
																																														<td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																															<div style="text-align: center;"> <span style="font-size: 22px; line-height: 25px; color: #374957; font-family:Arial,Helvetica,sans-serif;"><b>Jaju Clinic Speciality Services</b></span>
																																																<span style="color:#fca120; font-size:22px; font-weight: bold; line-height: 25px; font-family:Arial,Helvetica,sans-serif;"></span><br><br>
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
																																					</td>
																																				</tr>
																																				<tr>
																																					<td>
																																						<table cellspacing="0" cellpadding="0" style="width: 100%;">
																																							<tr>
																																								<td valign="top" class="responsive-td" style="width: 50%; padding-top: 5px; padding-bottom: 5px; padding-right: 5px;">
																																									<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																										<tr>
																																											<td class="stylingblock-content-margin-cell" style="padding: 0px 0px 10px; ">
																																												<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																													<tr>
																																														<td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																															<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%; margin-left: 25px;">
																																																<tr>
																																																	<td style="text-align: center; width: 50%; vertical-align: top;">
																																																		<div style="line-height: 115%;">
																																																			<img alt="icon" data-assetid="2073" height="60" src="'.base_url().'public/email/skin.png" style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;" width="60">
																																																		</div>
																																																		<div style="line-height: 115%;"> <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>
																																																				<b style="color: #e83e8c;">Skin</b></span>
																																																		</div>
																																																	</td>
																																																	<td style="text-align: left; width: 50%; vertical-align: top;">
																																																		<div style="line-height: 100%; margin-left: 45px;">
																																																			<img alt="icon" data-assetid="2057" height="60" src="'.base_url().'public/email/endo.png" style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;" width="60">
																																																		</div>
																																																		<div style="line-height: 115%; margin-left: 35px;"> <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>
																																																				<b style="color: #28a745;">Endovascular </b></span>
																																																		</div>
																																																	</td>
																																																	<td style="text-align: left; width: 50%; vertical-align: top;">
																																																		<div style="line-height: 100%; margin-right: 126px;">
																																																			<img alt="icon" data-assetid="2057" height="60" src="'.base_url().'public/email/vericose.png" style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;" width="60">
																																																		</div>
																																																		<div style="line-height: 115%; margin-left: -15px;"> <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>
																																																				<b style="color: #007bff;">Vericose Veins</b></span>
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
																																								</td>
																																					</td>
																																					</tr>
																																					</table>
																																		</td>
																																		</tr>
																																		<tr>
																																			<td>
																																				<table cellspacing="0" cellpadding="0" style="width: 100%;">
																																					<tr>
																																						<td valign="top" class="responsive-td" style="width: 100%; padding-top: 5px;">
																																							<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																								<tr>
																																									<td class="stylingblock-content-margin-cell" style="padding: 20px 0px 0px; ">
																																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																											<tr>
																																												<td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																													<table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
																																														<tr>
																																															<td align="center">
																																																<table border="0" cellspacing="0" cellpadding="0" role="presentation">
																																																	<tr>
																																																		<td class="innertd buttonblock" bgcolor="#FCA120" style=" border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; background-color: #FCA120;"> <a target="_target" class="buttonstyles" style=" font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: #FFFFFF; text-align: center; text-decoration: none; display: block; font-weight: 600; line-height: 20px; background-color: rgb(83, 80, 80); border: 1px solid rgb(83, 80, 80)y; padding: 12px 30px; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px;"
																																																				href="'.base_url().'">Book Appoinment</a>
																																																		</td>
																																																	</tr>
																																																</table>
																																															</td>
																																														</tr>
																																													</table>
																																												</td>
																																											</tr>
																																										</table>
																																									</td>
																																								</tr>
																																							</table>
																																						</td>
																																					</tr>
																																				</table>
																																			</td>
																																		</tr>
																																		</table>
																															</td>
																															</tr>
																															</table>
																												</td>
																												</tr>
																												</table>
																									</td>
																									</tr>
																									</table>
		
																									<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																										<tr>
																											<td class="stylingblock-content-margin-cell" align="center" style="padding: 0px 0px 50px; ">
																												<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="text-align: center; background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																													<tr>
																														<td style="padding: 0px 30px; " class="stylingblock-content-wrapper camarker-inner" align="center">
		
																															<p style="font-size: 13px; line-height: 200%; text-align: center; max-width: 400px; margin: 0 auto;"> <span style="font-size:13px;line-height:19px;font-family:Arial,Helvetica,sans-serif;color: #869fb2;">Copyright 2021 JajuClinic, all rights reserved.</span>
																															</p>
																															<p style="font-size: 13px; line-height: 200%; text-align: center; max-width: 400px; margin: 5px auto 20px;"> <span style="font-size:13px;line-height:19px;font-family:Arial,Helvetica,sans-serif;color: #869fb2;">JAJU Clinic, Opp. HDFC
																																Bank, Shivaji Nagar Road
																																Sutgirni Chowk,
																																Aurangabad 431009</span>
																															</p>
																														</td>
																													</tr>
																												</table>
																											</td>
																										</tr>
																									</table>
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
														</table>
											</td>
											</tr>
											</table>
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
                    
        $subject = "Your Response is recorded | Jaju Clinic";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:Jaju Clinic<contact@jajuclinic.com>" . "\r\n";
        $headers .= "Reply-To:noreply@jajuclinic.com" . "\r\n";
        $headers .= "X-Mailer:PHP/" . phpversion();
        //mail($to,$subject,$htmlContent,$headers,'-fcontact@jajuclinic.com');
        
        
    }
    function skin_book_appointment_email($name, $email, $mobile, $city, $speciality, $message, $address)
    {
        
        $to =$email;
        date_default_timezone_set('Asia/Kolkata');
        $date=date('d-m-Y H:i:s');
        $weekday=date('l', strtotime( $date));
        $month = date('F', strtotime($date));
        $year = date('d, Y');
        $time = date('h:i:s a', strtotime($date));
        
        echo $htmlContent='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		
		<head>
			<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
			<META NAME="referrer" CONTENT="no-referrer">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="color-scheme" content="light only">
			<meta name="supported-color-schemes" content="light only">
			<style type="text/css">
				ReadMsgBody {
					width: 100%;
				}
				
				.ExternalClass {
					width: 100%;
				}
				
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				
				body {
					-webkit-text-size-adjust: 100%;
					-ms-text-size-adjust: 100%;
					margin: 0 !important;
				}
				
				p {
					margin: 1em 0;
				}
				
				table td {
					border-collapse: collapse;
				}
				
				img {
					outline: 0;
				}
				
				a img {
					border: none;
				}
				
				.container {
					max-width: 600px !important;
				}
				
				@-ms-viewport {
					width: device-width;
				}
			</style>
			<style type="text/css">
				@media only screen and (max-width: 480px) {
					.container {
						width: 100% !important;
					}
					.footer {
						width: auto !important;
						margin-left: 0;
					}
					.mobile-hidden {
						display: none !important;
					}
					.logo {
						display: block !important;
						padding: 0 !important;
					}
					img {
						max-width: 100% !important;
						height: auto !important;
						max-height: auto !important;
					}
					.header img {
						max-width: 100% !important;
						height: auto !important;
						max-height: auto !important;
					}
					.photo img {
						width: 100% !important;
						max-width: 100% !important;
						height: auto !important;
					}
					.drop {
						display: block !important;
						width: 100% !important;
						float: left;
						clear: both;
					}
					.footerlogo {
						display: block !important;
						width: 100% !important;
						padding-top: 15px;
						float: left;
						clear: both;
					}
					.nav4,
					.nav5,
					.nav6 {
						display: none !important;
					}
					.tableBlock {
						width: 100% !important;
					}
					.responsive-td {
						width: 100% !important;
						display: block !important;
						padding: 0 !important;
					}
					.fluid,
					.fluid-centered {
						width: 100% !important;
						max-width: 100% !important;
						height: auto !important;
						margin-left: auto !important;
						margin-right: auto !important;
					}
					.fluid-centered {
						margin-left: auto !important;
						margin-right: auto !important;
					}
					body,
					.tb_properties {
						font-family: Arial !important;
						font-size: 16px !important;
						color: #808080 !important;
						line-height: 1.5 !important;
						padding: 0px !important;
					}
					h1 {
						font-family: Arial !important;
						font-size: 22px !important;
						color: #374957 !important;
						line-height: 1.15 !important;
					}
					h2 {
						font-family: Arial !important;
						font-size: 22px !important;
						color: #374957 !important;
						line-height: 1.15 !important;
					}
					h3 {
						font-family: Arial !important;
						font-size: 18px !important;
						color: #374957 !important;
						line-height: 1.15 !important;
					}
					a:not(.buttonstyles) {
						line-height: 1 !important;
					}
					.mobile-hidden {
						display: none !important;
					}
					.responsive-td {
						width: 100% !important;
						display: block !important;
						padding: 0 !important;
					}
					/* END OF MOBILE GLOBAL STYLES - DO NOT CHANGE */
				}
				
				@media only screen and (max-width: 640px) {
					.container {
						width: 100% !important;
					}
					.mobile-hidden {
						display: none !important;
					}
					.logo {
						display: block !important;
						padding: 0 !important;
					}
					.photo img {
						width: 100% !important;
						height: auto !important;
					}
					.nav5,
					.nav6 {
						display: none !important;
					}
					.fluid,
					.fluid-centered {
						width: 100% !important;
						max-width: 100% !important;
						height: auto !important;
						margin-left: auto !important;
						margin-right: auto !important;
					}
					.fluid-centered {
						margin-left: auto !important;
						margin-right: auto !important;
					}
				}
			</style>
			<!--[if mso]> <style type="text/css"> /* Begin Outlook Font Fix */ body, table, td { font-family : Arial, helvetica, sans-serif; line-height : 150%; font-size : 16px; color : #4A6375; } /* End Outlook Font Fix */ </style> <![endif]-->
		</head>
		
		<body bgcolor="#EFF3F6" text="#000000" style="-webkit-text-size-adjust:none;background-color : #EFF3F6; font-family : Arial, helvetica, sans-serif; line-height : 150%; font-size : 16px; color : #4A6375; padding : 0px; ">
		
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td align="center" valign="top"></td>
				</tr>
				<tr>
					<td align="center">
						<table cellspacing="0" cellpadding="0" border="0" width="600" class="container" align="center" style="max-width: 600px;">
							<tr>
								<td>
									<table class="tb_properties border_style" style="background-color : transparent; border : 0px;font-size : 16px; font-family : Arial, helvetica, sans-serif; line-height : 150%; color : #4A6375; " cellspacing="0" cellpadding="0" bgcolor="transparent" width="100%">
										<tr>
											<td align="center" valign="top">
												<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
														<td class="content_padding" style="padding : 0px; ">
															<table border="0" cellpadding="0" cellspacing="0" width="100%">
																<tr>
																	<td align="center" class="header" valign="top">
																		<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
																			<tbody>
																				<tr>
																					<td align="left" valign="top">
																						<table cellspacing="0" cellpadding="0" style="width:100%">
																							<tbody>
																								<tr>
																									<td class="responsive-td" valign="top" style="width: 100%;">
																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #EFF3F6; min-width: 100%; " class="stylingblock-content-wrapper">
																											<tr>
																												<td style="padding: 20px 0px 0px; " class="stylingblock-content-wrapper camarker-inner">
																													<table width="100%" cellspacing="0" cellpadding="0" border="0">
		
																													</table>
																												</td>
																											</tr>
																										</table>
																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																											<tr>
																												<td class="stylingblock-content-wrapper camarker-inner">
																													<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="text-align: center; background-color: #EFF3F6; border: 1px solid #EFF3F6; min-width: 100%; " class="stylingblock-content-wrapper">
																														<tr>
																															<td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner" align="center">
																																<table width="100%" cellspacing="0" cellpadding="0" role="presentation">
																																	<tr>
																																		<td align="center">
																																			<a href="javascript:void(0)" title="Jajuclinic" data-linkto="https://">
																																				<img data-assetid="6685" src="'.base_url().'public/email/logo.png" alt="logoimage" height="50" width="150" style="display: block; height: 50px; width: 150px; text-align: center; padding: 30px 20px;">
																																			</a>
																																		</td>
																																	</tr>
																																</table>
																															</td>
																														</tr>
																													</table>
																												</td>
																											</tr>
																										</table>
																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																											<tr>
																												<td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																													<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #FFFFFF; border: 0px; min-width: 100%; " class="stylingblock-content-wrapper">
																														<tr>
																															<td style="padding: 0px 0px 15px; " class="stylingblock-content-wrapper camarker-inner">
																																<table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;">
																																	<tr>
																																		<td>
																																			<table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;">
																																				<tr>
																																					<td valign="top" class="responsive-td" style="width: 100%;">
		
																																						<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																							<tr>
																																								<td style="padding: 0px 40px 20px; " class="stylingblock-content-wrapper camarker-inner">
																																									<h1 style="text-align: center;">
																																										<span style="font-weight: bold; font-size: 34px; line-height: 39px; color: #374957; font-family:Arial,Helvetica,sans-serif;">You Have A Mail ! </span></h1>
																																									<div style="text-align: left;"> <span style="font-family:Arial,Helvetica,sans-serif;font-size: 18px; line-height: 26px; text-align: left; color: #4A6375;">Subject: Appoinment E-mail for Skin Treatment</span>
																																										<p>
																																											<ol>
																																												<ol>
																																													<li>Name : '.$name.'</li>
																																													<li>Mobile no : '.$mobile.'</li>
																																													<li>City: '.$city.'</li>
																																													<li>Message: '.$message.'</li>
																																													<li>Speciality: '.$speciality.'</li>
																																													<li>Address: '.$address.'</li>
																																												</ol>
																																											</ol>
																																											Hello Dr. Jaju,<br> <br>You have an Appoinment mail from '.$name.'. Request an Appoinment
																																											for <b>Skin Treatment on '.$date.' at '.$time.' .</b>
		
		
																																										</p>
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
																															</td>
																														</tr>
																													</table>
																												</td>
																											</tr>
																										</table>
		
		
																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
																											<tr>
																												<td class="stylingblock-content-wrapper camarker-inner">
																													<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																														<tr>
																															<td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																																<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #FFFFFF; min-width: 100%; " class="stylingblock-content-wrapper">
																																	<tr>
																																		<td style="padding: 40px 10px; " class="stylingblock-content-wrapper camarker-inner">
																																			<table cellspacing="0" cellpadding="0" style="width: 100%;">
																																				<tr>
																																					<td>
																																						<table cellspacing="0" cellpadding="0" style="width: 100%;">
																																							<tr>
																																								<td valign="top" class="responsive-td" style="width: 100%; padding-bottom: 5px;">
																																									<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																										<tr>
																																											<td class="stylingblock-content-margin-cell" style="padding: 0px 0px 20px; ">
																																												<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																													<tr>
																																														<td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																															<div style="text-align: center;"> <span style="font-size: 22px; line-height: 25px; color: #374957; font-family:Arial,Helvetica,sans-serif;"><b>Jaju Clinic Speciality Services</b></span>
																																																<span style="color:#fca120; font-size:22px; font-weight: bold; line-height: 25px; font-family:Arial,Helvetica,sans-serif;"></span><br><br>
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
																																					</td>
																																				</tr>
																																				<tr>
																																					<td>
																																						<table cellspacing="0" cellpadding="0" style="width: 100%;">
																																							<tr>
																																								<td valign="top" class="responsive-td" style="width: 50%; padding-top: 5px; padding-bottom: 5px; padding-right: 5px;">
																																									<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																										<tr>
																																											<td class="stylingblock-content-margin-cell" style="padding: 0px 0px 10px; ">
																																												<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																													<tr>
																																														<td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																															<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%; margin-left: 25px;">
																																																<tr>
																																																	<td style="text-align: center; width: 50%; vertical-align: top;">
																																																		<div style="line-height: 115%;">
																																																			<img alt="icon" data-assetid="2073" height="60" src="'.base_url().'public/email/skin.png" style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;" width="60">
																																																		</div>
																																																		<div style="line-height: 115%;"> <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>
																																																				<b style="color: #e83e8c;">Skin</b></span>
																																																		</div>
																																																	</td>
																																																	<td style="text-align: left; width: 50%; vertical-align: top;">
																																																		<div style="line-height: 100%; margin-left: 45px;">
																																																			<img alt="icon" data-assetid="2057" height="60" src="'.base_url().'public/email/endo.png" style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;" width="60">
																																																		</div>
																																																		<div style="line-height: 115%; margin-left: 35px;"> <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>
																																																				<b style="color: #28a745;">Endovascular </b></span>
																																																		</div>
																																																	</td>
																																																	<td style="text-align: left; width: 50%; vertical-align: top;">
																																																		<div style="line-height: 100%; margin-right: 126px;">
																																																			<img alt="icon" data-assetid="2057" height="60" src="'.base_url().'public/email/vericose.png" style="padding: 0px 0px 10px; text-align: center; height: 60px; width: 60px; border: 0px;" width="60">
																																																		</div>
																																																		<div style="line-height: 115%; margin-left: -15px;"> <span style="font-size:14px; line-height: 20px; color:#374957; font-family:Arial,Helvetica,sans-serif;"><br>
																																																				<b style="color: #007bff;">Vericose Veins</b></span>
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
																																								</td>
																																					</td>
																																					</tr>
																																					</table>
																																		</td>
																																		</tr>
																																		<tr>
																																			<td>
																																				<table cellspacing="0" cellpadding="0" style="width: 100%;">
																																					<tr>
																																						<td valign="top" class="responsive-td" style="width: 100%; padding-top: 5px;">
																																							<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																																								<tr>
																																									<td class="stylingblock-content-margin-cell" style="padding: 20px 0px 0px; ">
																																										<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																																											<tr>
																																												<td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
																																													<table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
																																														<tr>
																																															<td align="center">
																																																<table border="0" cellspacing="0" cellpadding="0" role="presentation">
																																																	<tr>
																																																		<td class="innertd buttonblock" bgcolor="#FCA120" style=" border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; background-color: #FCA120;"> <a target="_blank" class="buttonstyles" style=" font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: #FFFFFF; text-align: center; text-decoration: none; display: block; font-weight: 600; line-height: 20px; background-color: rgb(83, 80, 80); border: 1px solid rgb(83, 80, 80)y; padding: 12px 30px; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px;" href="'.base_url().'">Book Appoinment</a>
																																																		</td>
																																																	</tr>
																																																</table>
																																															</td>
																																														</tr>
																																													</table>
																																												</td>
																																											</tr>
																																										</table>
																																									</td>
																																								</tr>
																																							</table>
																																						</td>
																																					</tr>
																																				</table>
																																			</td>
																																		</tr>
																																		</table>
																															</td>
																															</tr>
																															</table>
																												</td>
																												</tr>
																												</table>
																									</td>
																									</tr>
																									</table>
		
																									<table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; ">
																										<tr>
																											<td class="stylingblock-content-margin-cell" align="center" style="padding: 0px 0px 50px; ">
																												<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="text-align: center; background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
																													<tr>
																														<td style="padding: 0px 30px; " class="stylingblock-content-wrapper camarker-inner" align="center">
		
																															<p style="font-size: 13px; line-height: 200%; text-align: center; max-width: 400px; margin: 0 auto;"> <span style="font-size:13px;line-height:19px;font-family:Arial,Helvetica,sans-serif;color: #869fb2;">Copyright 2021 JajuClinic, all rights reserved.</span>
																															</p>
																															<p style="font-size: 13px; line-height: 200%; text-align: center; max-width: 400px; margin: 5px auto 20px;"> <span style="font-size:13px;line-height:19px;font-family:Arial,Helvetica,sans-serif;color: #869fb2;">JAJU Clinic, Opp. HDFC
																																Bank, Shivaji Nagar Road
																																Sutgirni Chowk,
																																Aurangabad 431009</span>
																															</p>
																														</td>
																													</tr>
																												</table>
																											</td>
																										</tr>
																									</table>
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
														</table>
											</td>
											</tr>
											</table>
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
                    
        $subject = "Your Response is recorded | Jaju Clinic";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:Jaju Clinic<contact@jajuclinic.com>" . "\r\n";
        $headers .= "Reply-To:noreply@jajuclinic.com" . "\r\n";
        $headers .= "X-Mailer:PHP/" . phpversion();
        //mail($to,$subject,$htmlContent,$headers,'-fcontact@jajuclinic.com');
        
        
    }

}
