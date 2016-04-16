<?php

class news_model extends CI_Model {

function get_news_records()
	{
		$query = $this->db->get('news_art_table');
		return $query->result();
	}

	function add_news_record($data)
	{
		$this->db->insert('news_art_table', $data);
		return;
	}

}

?>