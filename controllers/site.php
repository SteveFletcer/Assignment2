<?php

class Site extends CI_Controller
{

	/*function index()
	{
		$data = array();

		if ($query = $this->site_model->get_car_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('option_views',$data);
	}*/

	function carindex()
	{
		$data = array();

		if ($query = $this->site_model->get_car_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('caractions',$data);
	}

					function displaydetails ()
					{
						$this->data['posts'] = $this->site_model->getPosts();
						$this->load->view('car_information', $this->data); 
					}

	function showroom()
	{
		$data = array();

		if ($query = $this->site_model->get_car_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('showroom', $data);
	}

	function signup()
	{

		$userdata =  array(

			'user_forename' => $this->input->post('fname'),
			'user_surname' => $this->input->post('sname'),
			'user_email' => $this->input->post('email'),
			'user_mobile' => $this->input->post('mobile'),
			'user_home_phone' => $this->input->post('home'),
			'user_username' => $this->input->post('uname'),
			'user_password' => $this->input->post('pword')
			);

			$this->site_model->add_user($userdata);
			$this->index();
	}

	function sign_up()
	{
		$this->load->view('sign_up');
	}

	function log_in()
	{
		$this->load->view('login');
	}

	function stafflogin()
	{
		$this->load->view('stafflogin');
	}

	function adminlogin()
	{
		$this->load->view('adminlogin');
	}

	function adminhome()
	{
		$this->load->view('adminhome');
	}

	function home()
	{
		$this->load->view('home');
	}

	function car_information()
	{
		$this->load->view('car_information');
	}

	function aboutus()
	{
		$this->load->view('aboutus');
	}

	function newsactions()
	{
		$this->load->view('newsactions');	
	}

	function staffactions()
	{
		$this->load->view('staffactions');	
	}

	function contactus()
	{
		$this->load->view('contactus');
	}

	function caractions()
	{
		$this->load->view('caractions');
	}

	function login()
	{
		$this->form_validation->set_rules('uname', 'Username','required|trim|max_length[50]|xss_clean');
		$this->form_validation->set_rules('pword', 'Password','required|trim|max_length[50]|xss_clean');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if ($this->form_validation->run()===FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			$username = $this->input->post('user_name');
			$password = $this->input->post('password');
			$result = $this->site_model->get_user($username, $password);

			if ($result === TRUE){
				redirect(base_url().'landing');
			}else{
				$data ['error_message'] = "Invalid Username and Password";
				redirect('site/login_fail'); 
			}
		}
	}
			/*extract($_POST);
			$user_info = $this->site_model->check_login($uname, $pword);

			if(! $user_info)
			{
				//login failed message
				$this->session->set_flashdata('login_error',TRUE);
				redirect('site/login_fail');

			}
			else
			{
				//login 
				$sessiondata = array (
				
					'logged in' => TRUE,
					'user_id' => $this->session->userdata('user_id'),
					'fname' => $this->session->userdata('user_forename')	
				);
					$this->session->set_userdata($sessiondata);
				
				
				redirect('site/login_success',$sessiondata);
			}
		}
	}
	*/


	function createcars()
	{
		$data =  array(

			'car_make' => $this->input->post('make'),
			'car_model' => $this->input->post('model'),
			'car_miles' => $this->input->post('miles'),
			'car_year' => $this->input->post('year'),
			'car_price' => $this->input->post('price'),
			'car_transmission' => $this->input->post('trans'),
			'special_id' => $this->input->post('special'),
			);

			$this->site_model->add_record($data);
			$this->carindex();
	}

	function delete()
	{
		$this->site_model->delete_row();
		$this->carindex();
	}

	function edit()
	{
		$data = array();
		if ($query = $this->site_model->edit_record()){
			$data['record'] = $query;
		}

		$this->load->view('edit', $data);
	}


	function update() 
	{
		$data =  array(
			'car_id' => $this->input->post('id'),
			'car_make' => $this->input->post('make'),
			'car_model' => $this->input->post('model'),
			'car_miles' => $this->input->post('miles'),
			'car_year' => $this->input->post('year'),
			'car_price' => $this->input->post('price'),
			'car_transmission' => $this->input->post('trans'),
			'special_id' => $this->input->post('special'));
		
			$this->site_model->update_record($data);
			$this->index();
			
	}

	/*function newsindex()
	{
		$data = array();

		if ($query = $this->site_model->get_news_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('newsactions',$data);
	}

	function createnews()
	{
		$data =  array(

			'news_title' => $this->input->post('title'),
			'news_story' => $this->input->post('story'),
			);

			$this->site_model->add_news_record($data);
			$this->newsactions();
	}*/

}

/*
function login_success()
	{
		
		$this->load->view('login_success');
	}

function login_fail()
	{
		
		$this->load->view('login_fail');
	}

*/













