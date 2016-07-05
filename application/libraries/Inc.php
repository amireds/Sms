<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	$m_obj =& get_instance();
	$m_obj->load->model('m_user');
	
	//////////////////////////// === VARIABLES === //////////////////////////////////
	$log_user = $this->session->userdata('sc_logged_in');
	$sc_view_id = $this->session->userdata('sc_view_id');