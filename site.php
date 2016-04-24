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

	function checkcustomerloginfunction()
	{
		$this->form_validation->set_rules('uname', 'Username', 'required');
		$this->form_validation->set_rules('pword', 'Password', 'required|callback_verifyUser');

		if ($this->form_validation->run() == false){
			$this->load->view("login");
		}else
		{
			redirect('site/showroom');
		}
	}

	function verifyUser()
	{
		$username = $this->input->post('uname');
		$password = $this->input->post('pword');

		$this->load->model('site_model');

		if($this->site_model->customerlogin($username, $password)){
				return true;
		}else{
			$this->form_validation->set_message('verifyUser','Incorrect Username or Password; please re-enter user credentials');
			return false;
		}

	}

	function adminloginfunction()
	{
		$username = $this->input->post('uname');
		$password = $this->input->post('pword');

		if($username == 'Admin' && $password == 'Admin')
		{
			$data['username'] = $username;
			$this->load->view('adminhome', $data);
		}else{
			$data['error'] = 'Invalid Password - Please Re-Enter Admin Credentials';
			$this->load->view('adminlogin', $data);
		}
	}

	function staffloginfunction()
	{
		$username = $this->input->post('uname');
		$password = $this->input->post('pword');

		if($username == 'Staff' && $password == 'Staff')
		{
			$data['username'] = $username;
			$this->load->view('carlanding', $data);
		}else{
			$data['error'] = 'Invalid Password - Please Re-Enter Staff Credentials';
			$this->load->view('stafflogin', $data);
		}
	}

	function carindex()
	{
		$data = array();

		if ($query = $this->site_model->get_car_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('caractions',$data);
	}

	function carindexdelete()
	{
		$data = array();

		if ($query = $this->site_model->get_car_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('caractionsdelete',$data);
	}

	function carindexamend()
	{
		$data = array();

		if ($query = $this->site_model->get_car_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('caractionsamend',$data);
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

	function homeview()
	{
		$data = array();
		if ($query = $this->site_model->get_news_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('home', $data);
	}

	function contactus()
	{
		$data = array();
		if ($query = $this->site_model->get_staff_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('contactus', $data);
	}
	function deletestaff()
	{
		$data = array();

		if ($query = $this->site_model->get_staff_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('staffactionsdelete', $data);	
	}

	function amendstaff()
	{
		$data = array();

		if ($query = $this->site_model->get_staff_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('staffactionsamend', $data);	
	}

	function viewstaff()
	{
		$data = array();

		if ($query = $this->site_model->get_staff_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('staffactionsadd', $data);	
	}

	function viewnews()
	{
		$data = array();

		if ($query = $this->site_model->get_news_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('newsactionsadd', $data);	
	}

	function amendnews()
	{
		$data = array();

		if ($query = $this->site_model->get_news_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('newsactionsamend', $data);	
	}

	function deletenews()
	{
		$data = array();

		if ($query = $this->site_model->get_news_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('newsactionsdelete', $data);	
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

	function car_information()
	{
		$data = array();
		if ($query = $this->site_model->view_car()){
			$data['record'] = $query;
		}
		$this->load->view('car_information', $data);
	}

	function carlanding()
	{
		$this->load->view('carlanding');
	}

	function aboutus()
	{
		$this->load->view('aboutus');
	}

	function newslanding()
	{
		$this->load->view('newslanding');	
	}

	function stafflanding()
	{
		$this->load->view('stafflanding');	
	}

	function staffactionsadd()
	{
		$this->load->view('staffactionsadd');
	}

	function staffactionsamend()
	{
		$this->load->view('staffactionsamend');
	}

	function staffactionsdelete()
	{
		$this->load->view('staffactionsdelete');
	}



	function caractions()
	{
		$this->load->view('caractions');
	}

	function caractionsadd()
	{
		$this->load->view('caractionsadd');
	}

	function caractionsdelete()
	{
		$this->load->view('caractionsdelete');
	}

	function newsactionsamend()
	{
		$this->load->view('newsactionsamend');
	}

	function newsactionsadd()
	{
		$this->load->view('newsactionsadd');
	}

	function newsactionsdelete()
	{
		$this->load->view('newsactionsdelete');
	}

	/*function login()
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

	function addusers()
	{
		$data =  array(
			
			'customer_forename' => $this->input->post('fname'),
			'customer_surname' => $this->input->post('sname'),
			'customer_username' => $this->input->post('uname'),
			'customer_password' => $this->input->post('pword'),
			'customer_password_conf' => $this->input->post('pwordconf'),
			'customer_emailaddress' => $this->input->post('email'),
			'customer_emailaddress_conf' => $this->input->post('emailconf'),
			'customer_mobile' => $this ->input ->post('mobile'),
			'customer_home' => $this->input->post('home'),
			);

			$this->site_model->add_user($data);
			$this->log_in();
	}

	function addstaff()
	{
		$data = array(
			'staff_forename' => $this->input->post('fname'),
			'staff_surname' => $this->input->post('sname'),
			'staff_addressline1' => $this->input->post('addl1'),
			'staff_addressline2' => $this->input->post('addl2'),
			'staff_addressline3' => $this->input->post('addl3'),
			'staff_postcode' => $this->input->post('pcode'),
			'staff_DOB' => $this->input->post('dob'),
			'staff_NI' => $this->input->post('nino'),
		);

		$this->site_model->add_staff($data);
		$this->stafflanding();
	}


	function addnewsart()
	{
		$data = array(
			
			'news_title' =>$this->input->post('title'),
			'news_story' =>$this->input->post('story'),
		);

		$this->site_model->add_news_art($data);
		$this->newslanding();
	}

	function delete()
	{
		$this->site_model->delete_row();
		$this->carlanding();
	}

	function deletenewsart()
	{
		$this->site_model->delete_news_row();
		$this->newslanding();
	}

	function deletestaffdetails()
	{
		$this->site_model->delete_staff_row();
		$this->stafflanding();
	}

	function edit()
	{
		$data = array();
		if ($query = $this->site_model->edit_record()){
			$data['record'] = $query;
		}

		$this->load->view('edit', $data);
	}

	function editnewsart()
	{
		$data = array();
		if ($query = $this->site_model->edit_news_record()){
			$data['record'] = $query;
		}

		$this->load->view('editnews', $data);
	}

	function editstaff()
	{
		$data = array();
		if ($query = $this->site_model->edit_staff_record()){
			$data['record'] = $query;
		}

		$this->load->view('editstaff', $data);
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
			'special_id' => $this->input->post('special'),
			);
		
			$this->site_model->update_record($data);
			$this->carlanding();	
	}

	function newsupdate() 
	{
		$data =  array(
			'news_id' => $this->input->post('id'),
			'news_title' => $this->input->post('title'),
			'news_story' => $this->input->post('story'),
			);
		
			$this->site_model->update_news_record($data);
			$this->newslanding();		
	}

	function staffupdate() 
	{
		$data =  array(
			'staff_id' => $this->input->post('id'),
			'staff_forename' => $this->input->post('fname'),
			'staff_surname' => $this->input->post('sname'),
			'staff_addressline1' => $this->input->post('addl1'),
			'staff_addressline2' => $this->input->post('addl2'),
			'staff_addressline3' => $this->input->post('addl3'),
			'staff_postcode' => $this->input->post('pcode'),
			'staff_DOB' => $this->input->post('dob'),
			'staff_NI' => $this->input->post('nino'),
			);
		
			$this->site_model->update_staff_record($data);
			$this->stafflanding();		
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













