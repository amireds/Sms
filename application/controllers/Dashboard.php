<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct(){
        parent::__construct();
    }
	
	public function index()
	{
		if($this->session->userdata('sc_logged_in') == TRUE){
			$log_role = $this->session->userdata('sc_user_role');
		} else {
			//register redirect page
			$o_data = array ('sc_redirect' => uri_string());
			$this->session->set_userdata($o_data);
			//redirect(base_url('auth'), 'refresh');
		}
		
		$log_user_id = $this->session->userdata('sc_id');
		$log_user_current = $this->session->userdata('sc_user_current');
	
		
		$data['title'] = 'Dashboard | '.app_name;
		$data['page_active'] = 'dashboard';

	  	$this->load->view('designs/header', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('designs/footer', $data);
	}
	
	function weeks_in_month($month, $year) {
		 // Start of month
		 $start = mktime(0, 0, 0, $month, 1, $year);
		 // End of month
		 $end = mktime(0, 0, 0, $month, date('t', $start), $year);
		 // Start week
		 $start_week = date('W', $start);
		 // End week
		 $end_week = date('W', $end);
		 
		 if ($end_week < $start_week) { // Month wraps
		   return ((52 + $end_week) - $start_week) + 1;
		 }
		 
		 return ($end_week - $start_week) + 1;
	}
}
