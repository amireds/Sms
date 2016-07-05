<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_user extends CI_Model {
	 
		//////////////////// === CREATE === ///////////////////////////////
		public function reg_insert($data) {
			$this->db->insert('datas', $data);
			return $this->db->insert_id();
		}
		
		//////// Generic
		public function reg_create($table, $data) {
			$this->db->insert($table, $data);
			return $this->db->insert_id();
		}
		
		//////////////////// === READ === ///////////////////////////////
		public function query_all_user() {
			$query = $this->db->get('datas');
			if($query->num_rows() > 0) {
				return $query->result();
			}
		}
		
		public function query_user_id($data) {
			$query = $this->db->where('id', $data);
			$query = $this->db->get('datas');
			if($query->num_rows() > 0) {
				return $query->result();
			}
		}
		
		public function query_user_phone($data) {
			$query = $this->db->where('phone', $data);
			$query = $this->db->get('datas');
			if($query->num_rows() > 0) {
				return $query->result();
			}
		}
		
		public function query_user_auth($phone, $pass) {
			$query = $this->db->where('phone', $phone);
			$query = $this->db->where('password', $pass);
			$query = $this->db->get('datas');
			if($query->num_rows() > 0) {
				return $query->result();
			}
		}
		
		////////// Generic 
		public function query_users($table) {
			$query = $this->db->get($table);
			if($query->num_rows() > 0) {
				return $query->result();
			}
		}
		
		public function query_users_id($field, $value, $table) {
			$query = $this->db->where($field, $value);
			$query = $this->db->get($table);
			if($query->num_rows() > 0) {
				return $query->result();
			}
		}
		
		public function query_users_phone($field, $value, $table) {
			$query = $this->db->where($field, $value);
			$query = $this->db->get($table);
			if($query->num_rows() > 0) {
				return $query->result();
			}
		}
		
		//email activation
		public function check_activation($stamp, $email) {
			$query = $this->db->get_where('datas', array('created_at' => $stamp, 'email' => $email, 'active' => 0));
			return $query->num_rows();	
		}
		
		public function activate($email, $data) {
			$this->db->where('email', $email);
			$this->db->update('datas', $data);
			return $this->db->affected_rows();	
		}
		
		//////////////////// === UPDATE === ///////////////////////////////
		public function update_user($id, $data) {
			$this->db->where('id', $id);
			$this->db->update('datas', $data);
			return $this->db->affected_rows();	
		}
		
		//////// Generic
		public function update_users($field, $value, $table, $data) {
			$this->db->where($field, $id);
			$this->db->update($table, $data);
			return $this->db->affected_rows();	
		}
		
		
		//////////////////// === DELETE === ///////////////////////////////
		public function delete_user($id) {
			$this->db->where('id', $id);
			$this->db->delete('datas');
			return $this->db->affected_rows();
		}
		
		//////// Generic
		public function delete_users($field, $value, $table) {
			$this->db->where($field, $id);
			$this->db->delete($table);
			return $this->db->affected_rows();	
		}
	}