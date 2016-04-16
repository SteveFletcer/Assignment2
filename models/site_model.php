<?php

class site_model extends CI_Model {
	
	function get_car_records()
	{
		$query = $this->db->get('car_details_table');
		return $query->result();
	}


			function getPosts()
			{
				$this->db->select("post_id, car_make");
				$this->db->from('car_details_table');
				$query = $this->db->get();
				return $query->result;
			}



	function get_news_records()
	{
		$query = $this->db->get('news_art_table');
		return $query->result();
	}

	function add_record($data)
	{
		$this->db->insert('car_details_table', $data);
		return;
	}

	function add_news_record($data)
	{
		$this->db->insert('news_art_table', $data);
		return;
	}

	function delete_row()
	{
		$this->db->where('car_id', $this->uri->segment(3));
		$this->db->delete('car_details_table');
	}

	function edit_record()
	{
		$this->db->where('car_id', $this->uri->segment(3));
		$query = $this->db->get('car_details_table');
		return $query->result();

	}

	function update_record($data){
		$this->db->where('car_id', $data['car_id']);
		//$this->db->where('car_id', $this->uri->segment(3));
		$this->db->update('car_details_table', $data);
	}

	function add_user($userdata)
	{
		$this->db->insert('user_accounts_table', $userdata);
		return;
	}

	function get_user($username, $password)
	{

		$query = $this->db->get_where('user_accounts_table', array('user_username'=>$username));
		if ($query->num_rows() > 0){
			$query = $query->row_array();
			$user_name = $query['user_username'];
			$password = $query['user_password'];

				if ($username === $user_name){
					$userdata = array ('user_name' => $user_name);
					$this->session->set_userdata($userdata);
					return TRUE;
				}else{
					return FALSE;
				}
			}
	}
	/*function check_login($uname, $pword)
	{
		$var_password = ($pword);

		$query_str = "SELECT user_id FROM user_accounts_table WHERE user_username = ? and user_password = ?";
		$result = $this->db->query($query_str, array($uname, $var_password));

		if ($result->num_rows() == 1)
		{
			return $result->row(0)->user_id;
		}
		else
		{
			return false;
		}
	}*/



}