<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->view('v_contact');
	}
	function sendInformation(){
		$data['error'] = EXIT_ERROR;
		$data['msj']   = null;
		try {  
			$this->load->library("email");
			$name           = $this->input->post('Name');
			$company 		= $this->input->post('Company');
			$position 		= $this->input->post('Position');
			$website	    = $this->input->post('Website');
			$category 		= $this->input->post('Category');
			$address 		= $this->input->post('Address');
			$zipcode 		= $this->input->post('Zipcode');
			$telephone 		= $this->input->post('Telephone');
			$email 		    = $this->input->post('Email');
			$type 		    = $this->input->post('Type');
			$interest 	    = $this->input->post('Interest');
			$configGmail = array('protocol'  => 'smtp',
			                     'smtp_host' => 'mail.pjpeye.tokyo',
			                     'smtp_port' => 587,
			                     'smtp_user' => 'info@pjpeye.tokyo',
			                     'smtp_pass' => 'Hosting2018!',
			                     'mailtype'  => 'html',
			                     'charset'   => 'utf-8',
			                     'newline'   => "\r\n");    
			$this->email->initialize($configGmail);
			$this->email->from('info@pjpeye.tokyo');
			$this->email->to('jose.minayac15@gmail.com');
			// $this->email->to('general@pjpeye.tokyo,jt@pjpeye.tokyo');
			$this->email->subject('PJP - New message');
			$texto = '<!DOCTYPE html>
			                <html>
			                    <body>
			                        <table width="500px" cellpadding="0" cellspacing="0" align="center" style="border: solid 1px #ccc;">
			                            <tr>
			                                <td style="background-color: #000000;width: 100%;">
			                                    <table width="500" cellspacing="0" cellpadding="0" border="0" style="background-color: #000000;padding: 5px 20px;">
													<tr>
														<td>
															<a href="#"><img src="http://pjpeye.tokyo/public/img/logo/logo.png" width="80" alt="alternative text" border="0" style="display: block;"></a>
														</td>
													</tr>
			                                    </table>
			                                </td>
			                            </tr>
			                            <tr>
			                                <td>
			                                    <table width="500" cellspacing="0" cellpadding="0" border="0" align="center" style="padding: 30px 20px">
			                                        <tr>
			                                            <td colspan="2" style="text-align: center;padding: 0;margin: 0;padding-bottom: 10px"><font style="font-family: arial;color: #000000;font-size: 18px;font-weight: 600">A new message from '.$email.'</font></td>
			                                        </tr>
			                                        <tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Name:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.$name.'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Company:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.$company.'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Official Position:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.($position == null ? '-' : $position ).'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Website:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.($website == null ? '-' : $website ).'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Business Category:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.$category.'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Address:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.($address == null ? '-' : $address ).'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Zip Code:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.($zipcode == null ? '-' : $zipcode ).'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Telephone:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.($telephone == null ? '-' : $telephone ).'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Email address:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.$email.'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Your Interest:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.($type == null ? '-' : $type ).'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Description of Interest:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.($interest == null ? '-' : $interest ).'</font></td>
			                                        </tr>
			                                    </table>
			                                </td>
			                            </tr>
			                        </table>
			                    </body>
			                </html>';
			$this->email->message($texto);
			$this->email->send();
			$this->sendInformationClient($name,$company,$position,$website,$category,$address,$zipcode,$telephone,$email,$type,$interest);
			$data['error'] = EXIT_SUCCESS;
		}catch (Exception $e){
			$data['msj'] = $e->getMessage();
		}
		echo json_encode($data);
		// return json_encode(array_map('utf8_encode', $data));
	}
	function sendInformationClient($name,$company,$position,$website,$category,$address,$zipcode,$telephone,$email,$type,$interest){
		$data['error'] = EXIT_ERROR;
		$data['msj']   = null;
		try {  
			$this->load->library("email");
			$configGmail = array('protocol'  => 'smtp',
			                     'smtp_host' => 'mail.pjpeye.tokyo',
			                     'smtp_port' => 587,
			                     'smtp_user' => 'info@pjpeye.tokyo',
			                     'smtp_pass' => 'Hosting2018!',
			                     'mailtype'  => 'html',
			                     'charset'   => 'utf-8',
			                     'newline'   => "\r\n");   
			$this->email->initialize($configGmail);
			$this->email->from('general@pjpeye.tokyo');
			$this->email->to($email);
			// $this->email->to('jose.minayac15@gmail.com');
			$this->email->subject('PJP - Thanks for connecting with us');
			$texto = '<!DOCTYPE html>
			                <html>
			                    <body>
			                        <table width="500px" cellpadding="0" cellspacing="0" align="center" style="border: solid 1px #ccc;">
			                            <tr>
			                                <td style="background-color: #000000;width: 100%;">
			                                    <table width="500" cellspacing="0" cellpadding="0" border="0" style="background-color: #000000;padding: 5px 20px;">
													<tr>
														<td><a href="#"><img src="http://pjpeye.tokyo/public/img/logo/logo.png" width="80" alt="alternative text" border="0" style="display: block;"></a></td>
													</tr>
			                                    </table>
			                                </td>
			                            </tr>
			                            <tr>
			                                <td>
			                                    <table width="500" cellspacing="0" cellpadding="0" border="0" align="center" style="padding: 30px 20px">
			                                        <tr>
														<td colspan="2" style="text-align: center;padding: 0;margin: 0;padding-bottom: 10px"><font style="font-family: arial;color: #000000;font-size: 18px;font-weight: 600">Thanks! We have received your inquiry and will be in touch shortly.</font></td>
			                                        </tr>
			                                        <tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Name:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.$name.'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Company:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.$company.'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Official Position:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.($position == null ? '-' : $position ).'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Website:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.($website == null ? '-' : $website ).'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Business Category:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.$category.'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Address:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.($address == null ? '-' : $address ).'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Zip Code:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.($zipcode == null ? '-' : $zipcode ).'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Telephone:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.($telephone == null ? '-' : $telephone ).'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Email address:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.$email.'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Your Interest:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.($type == null ? '-' : $type ).'</font></td>
													</tr>
													<tr>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">Description of Interest:</font></td>
														<td style="text-align: left;"><font style="font-family: arial;color: #757575;font-size: 12px;">'.($interest == null ? '-' : $interest ).'</font></td>
			                                        </tr>
			                                    </table>
			                                </td>
			                            </tr>
			                        </table>
			                    </body>
			                </html>';
			$this->email->message($texto);
			$this->email->send();
			$data['error'] = EXIT_SUCCESS;
		}catch (Exception $e){
			$data['msj'] = $e->getMessage();
		}
		// echo json_encode($data);
		return json_encode(array_map('utf8_encode', $data));
	}
}