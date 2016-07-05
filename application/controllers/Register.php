<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	function __construct(){
        parent::__construct();
    }
	
	public function index()
	{
		$redir = $this->session->userdata('sc_redirect'); //get redirect
		$logged_in = $this->session->userdata('sc_logged_in');
		if($logged_in == TRUE){
			redirect(base_url('dashboard'), 'refresh');	
		}
		
		//check if ready for post
		if($_POST) {
			$country = $_POST['pick_country'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$company = $_POST['company'];
			$industry = $_POST['industry'];
			if(isset($_POST['module'])){$module = $_POST['module'];} else {$module = '';}
			
			if($module != ''){
				$module = implode(',', $module);
			}
			
			if($this->m_request->query_request_email($email) > 0){
				$data['err_msg'] = '<div class="alert alert-info">Request with Email Address already submitted. We will communicate with you further</div>';
			} else {
				$now = date('Y-m-d H:i:s');
				
				if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
					$ip = $_SERVER['HTTP_CLIENT_IP'];
				} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
					$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
				} else {
					$ip = $_SERVER['REMOTE_ADDR'];
				}
				
				$reg_data = array(
					'country_id' => $country,
					'industry_id' => $industry,
					'firstname' => $firstname,
					'lastname' => $lastname,
					'phone' => $phone,
					'email' => $email,
					'company' => $company,
					'module' => $module,
					'ip' => $ip,
					'reg_date' => $now
				);
				
				if($this->m_request->reg_insert($reg_data) > 0) {
					$data['err_msg'] = '<div class="alert alert-success">Request sent successfully. We will get to you within 24 Hours</div>';
				} else {
					$data['err_msg'] = '<div class="alert alert-danger">There is problem this time. Please try later</div>';
				}
			}
		}
		
		$data['allcountry'] = $this->m_country->query_all_country();
		$data['allindustry'] = $this->m_industry->query_all_industry();
		
		$data['title'] = 'Register | '.app_name;
		$data['page_active'] = 'register';

	  	$this->load->view('register', $data);
	}
}
