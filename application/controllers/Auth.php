<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		
		$this->load->library('form_validation'); //load form validate rules
		$this->load->helper('cookie');
		$this->load->helper('url');
		
		//mail config settings
		$this->load->library('email'); //load email library
		//$config['protocol'] = 'sendmail';
		//$config['mailpath'] = '/usr/sbin/sendmail';
		//$config['charset'] = 'iso-8859-1';
		//$config['wordwrap'] = TRUE;
		
		//$this->email->initialize($config);
    }
	
	public function index()
	{
		$redir = $this->session->userdata('sc_redirect'); //get redirect
		$logged_in = $this->session->userdata('sc_logged_in');
		if($logged_in == TRUE){
			redirect(base_url('dashboard'), 'refresh');	
		}
		
		//check for activation by email
		$get_email = $this->input->get('email');
		$get_stamp = $this->input->get('stamp');
		
		if($get_email && $get_stamp){
			$ch = $this->M_user->check_activation($get_stamp, $get_email);
			if(empty($ch)){
				$data['err_msg'] = '<div class="alert alert-danger">Invalid link or account already activated</div>';
			} else {
				//activate email
				$areg_data = array(
					'active' => 1
				);
				
				if(!$this->M_user->activate($get_email, $areg_data)){
					$data['err_msg'] = '<div class="alert alert-danger">There is problem this time. Please try later</div>';
				} else {
					$data['err_msg'] = '<div class="alert alert-success">Email activated, you can now sign in.</div>';
				}
			}	
		}
		
		//check if ready for post
		if($_POST) {
			$phone = $_POST['login-phone'];
			$password = $_POST['login-password'];
			
			$query = $this->M_user->query_user_auth($phone, md5($password));
			
			if($query <= 0){
				$data['err_msg'] = '<div class="alert alert-danger">Authentication Failed!</div>';
			} else {
				$now = date('Y-m-d H:i:s');
				
				foreach($query as $row){
					$user_id = $row->id;
					
					//check if phone is activate
					if($row->phone_active != 1){
						$data['err_msg'] = '<div class="alert alert-info">Your Phone Number is not activated</div>';
					} else {
						//populate session
						$s_data = array(
							'sc_id' => $user_id,
							'sc_user_surname' => $row->surname,
							'sc_user_othername' => $row->othername,
							'sc_user_phone' => $row->phone,
							'sc_user_sex' => $row->sex,
							'sc_user_email' => $row->email,
							'sc_user_phone_active' => $row->phone_active,
							'sc_user_activate' => $row->activate,
							'sc_user_created_at' => $row->created_at,
							'sc_user_updated_at' => $row->updated_at,
							'sc_user_role' => $row->role,
							'sc_logged_in' => TRUE
						);
						
						//save records in session
						$save_session = $this->session->set_userdata($s_data);
						
						//redirect login
						if($redir != ''){
							redirect(base_url($redir), 'refresh');
						} else {
							redirect(base_url('dashboard'), 'refresh');
						}
					}
				}
			}
		}
		
		$data['title'] = 'Login | '.app_name;
		$data['page_active'] = 'login';

	  	$this->load->view('login', $data);
	}
	
	public function logout(){
		$newdata = array(
			'sc_id' => '',
			'sc_user_surname' => '',
			'sc_user_othername' => '',
			'sc_user_phone' => '',
			'sc_user_sex' => '',
			'sc_user_email' => '',
			'sc_user_phone_active' => '',
			'sc_user_active' => '',
			'sc_user_created_at' => '',
			'sc_user_updated_at' => '',
			'sc_user_role' => '',
			'sc_logged_in' => FALSE
		);
		$this->session->unset_userdata($newdata);
		//unset($this->session->userdata); 
		$this->session->sess_destroy();
		delete_cookie( config_item('sess_cookie_name') );
		
		$data['err_msg'] = '<div class="alert alert-success">Successfully LogOut.</div>';
		
		$data['title'] = 'Logout | '.app_name;
		$data['page_active'] = 'login';
		redirect(base_url('auth/'), 'refresh');
		$this->load->view('login', $data);
	}
	
	public function register(){
		$redir = $this->session->userdata('sc_redirect'); //get redirect
		$logged_in = $this->session->userdata('sc_logged_in');
		if($logged_in == TRUE){
			redirect(base_url('dashboard'), 'refresh');	
		}
		
		//check if ready for post
		if($_POST) {
			$id = $_POST['register-id'];
			$surname = $_POST['register-surname'];
			$othername = $_POST['register-othername'];
			$phone = $_POST['register-phone'];
			$password = $_POST['register-password'];
			$password = md5($password);
			
			if($id != ''){
				$upd_data = array(
					'surname' => $surname,
					'othername' => $othername,
					'phone' => $phone,
					'password' => $password,
					'updated_at' => strtotime(time())
				);
				
				if($this->M_user->update_user($id, $upd_data) > 0) {
					$data['err_msg'] = '<div class="alert alert-success">Registration completed</div>';
				} else {
					$data['err_msg'] = '<div class="alert alert-danger">There is problem this time. Please try later</div>';
				}
			} else {
				$reg_data = array(
					'surname' => $surname,
					'othername' => $othername,
					'phone' => $phone,
					'password' => $password,
					'created_at' => time(),
					'updated_at' => time(),
					'role' => 'User'
				);
				
				if($this->M_user->reg_insert($reg_data) > 0) {
					$data['err_msg'] = '<div class="alert alert-success">Registration completed</div>';
				} else {
					$data['err_msg'] = '<div class="alert alert-danger">There is problem this time. Please try later</div>';
				}
			}
		}
		
		$data['title'] = 'Register | '.app_name;
		$data['page_active'] = 'login';
		redirect(base_url('auth/'), 'refresh');
		$this->load->view('login', $data);
	}
	
	public function forgot(){
		$stamp = $this->input->get('stamp');
		$email = $this->input->get('email');
		
		$data['stamp'] = $stamp;
		$data['email'] = $email;
		
		if($stamp=='' || $email==''){
			//set form input rules 
			$this->form_validation->set_rules('reminder-email','Email Address','trim|required|valid_email|xss_clean');
			
			$this->form_validation->set_error_delimiters('<div id="pass-info" class="alert alert-danger">', '</div>'); //error delimeter
			
			if ($this->form_validation->run() == FALSE)
			{
				$data['err_msg'] = '';
			}
			else
			{
				//check if ready for post
				if($_POST) {
					$email = $_POST['reminder-email'];
					
					if($this->M_user->check_by_email($email) < 0) {
						$data['err_msg'] = '<h5 class="alert alert-danger">Email address not exist</h5>';
					} else {
						$time = time();
						
						$reg_data = array(
							'reset' => 1,
							'reset_stamp' => $time
						);
						
						$this->M_user->activate($email, $reg_data); 
						
						//email notification processing
						$this->email->clear(); //clear initial email variables
						$this->email->to($email);
						$this->email->from(app_email,app_name);
						$this->email->subject('Password Reset');
						
						//compose html body of mail
						$mail_stamp = $time;
						$mail_subhead = 'Password Reset';
						$body_msg = '
							You requested for password reset on '.app_name.'.<br /><br />
							<a class="email_btn" href="'.base_url().'auth/forgot?stamp='.$mail_stamp.'&amp;email='.$email.'">Reset Password</a><br /><br />Thanks
						';
						
						$mail_data = array('message'=>$body_msg, 'subhead'=>$mail_subhead);
						$this->email->set_mailtype("html"); //use HTML format
						$mail_design = $this->load->view('designs/email_template', $mail_data, TRUE);
	 
						$this->email->message($mail_design);
						
						if($this->email->send()) {
							$data['err_msg'] = '<h5 class="alert alert-success">Please check your Email Address for LINK to reset your password. (NB: Check SPAM if not in INBOX)</h5>';
													
							$this->users->activate($email, $reg_data); //update records
							
						} else {
							$data['err_msg'] = '<h5 class="alert alert-danger">Problem sending email this time. You will need to try again.</h5>';
						}
					}
				}
			}
			
			$data['title'] = 'Reset Password | '.app_name;
			$data['page_active'] = 'login';
			
			$this->load->view('login', $data);
		} else {
			//check reset link
			$ch = $this->M_user->check_reset($stamp, $email);
			if(empty($ch)){
				$data['err_msg'] = '<h5 class="alert alert-danger">Reset link already expired!</h5>';
			} else {
				//check if post else prepare reset
				//set form input rules 
				$this->form_validation->set_rules('new','New password','trim|required|xss_clean|md5');
				$this->form_validation->set_rules('confirm','Confirm password','trim|required|matches[new]|xss_clean');
				
				//error delimeter
				$this->form_validation->set_error_delimiters('<div id="pass-info" class="alert alert-danger">', '</div>');
				
				if ($this->form_validation->run() == FALSE){
					$data['err_msg'] = '';
				} else {
					//check if ready for post
					if(isset($_POST)) {
						$new = $_POST['new'];
						$confirm = $_POST['confirm'];
						
						$update_data = array(
							'password' => $new,
							'reset' => 0,
							'reset_stamp' => ''
						);
						
						if($this->M_user->activate($email, $update_data) > 0){
							$data['err_msg'] = '<h5 class="alert alert-success">Password reset. <a href="'.base_url().'auth/">Sign In</a></h5>';
						} else {
							$data['err_msg'] = '<h5 class="alert alert-danger">There is problem this time. Try later</h5>';
						}
					}
				}
			}
			
			$data['title'] = 'Reset Password | '.app_name;
			$data['page_active'] = 'login';
			
			$this->load->view('forgot', $data);
		}
		
	}
	
	public function phone_lookup(){
		if($_POST){
			$phone = $_POST['phone'];
			$result = array();
			
			$query = $this->M_user->query_user_phone($phone);
			if(!empty($query)){
				foreach($query as $item){
					$result[0] = $item->id;
					$result[1] = $item->surname;
					$result[2] = $item->othername;
				}
			}
			
			echo json_encode($result);
		}
	}
}
