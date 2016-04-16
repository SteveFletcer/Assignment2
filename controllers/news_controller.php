<?php

class news_controller extends CI_Controller {

function index()
	{
		$data = array();

		if ($query = $this->site_model->get_news_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('ov2',$data);
	}

function ov2()
	{

		$this->load->view('option_views_2');
	}

function createnews()
	{
		$data =  array(

			'news_title' => $this->input->post('title'),
			'news_story' => $this->input->post('story'),
			);

			$this->site_model->add_news_record($data);
			$this->index();
	}


}

?>
