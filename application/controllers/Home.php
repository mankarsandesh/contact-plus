<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function  __construct() {
		parent::__construct();
		 /* Load form helper */ 
		 $this->load->helper(array('form', 'url','security'));
		 $this->load->library(array('session','upload'));		
		 $this->load->model('Data');

    }
	
	
	public function index()
	{	
		$this->load->helper('url');
		$this->load->view('include/topheader');
		$this->load->view('login');
	}

	public function register()
	{	
		$this->load->helper('url');
		$this->load->view('include/topheader');
		$this->load->view('register');
	}

	public function dashboard()
	{	
		//$this->header();
		//$data['first_name'] = $this->session->userdata('firstName');
		//print_r($data);

		$data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->session->userdata('logged_in');
          	//redirect('home/dashboard');
        }else{
            redirect('home');
		}
		//print_r($data['user']);
		$data['fullname'] = $data['user']['fullname'];
		$data['userId'] = $data['user']['userId'];

		$data['allContact'] = $this->Data->AllContact();
		//print_r($data['allContact']);
		$data['userName'] = $this->Data->userDataName();
		$data['userNumber'] = $this->Data->userDataNumber();
		
		$this->load->view('header');
		$this->load->view('Menu',$data);
		$this->load->view('index',$data);
		$this->load->view('footer');
	}
	public function addcontact()
	{	
		$data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->session->userdata('logged_in');
        }else{
            redirect('home');
		}
		
		$data['fullname'] = $data['user']['fullname'];
		$data['userId'] = $data['user']['userId'];

		$data['userName'] = $this->Data->userDataName();
		$data['userNumber'] = $this->Data->userDataNumber();

		$this->load->view('header');
		$this->load->view('Menu',$data);
		$this->load->view('addcontact',$data);
		$this->load->view('footer');
	}

	public function profile()
	{	
		$contactId =  $this->uri->segment(3);
		$data['contactInfo'] = $this->Data->ContactInfo($contactId);
		$data['userName'] = $this->Data->userDataName();
		$data['userNumber'] = $this->Data->userDataNumber();
		$data['view'] = $this->Data->userView($contactId);

        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->session->userdata('logged_in');
        }else{
            redirect('home');
		}
		$data['fullname'] = $data['user']['fullname'];
		$data['userId'] = $data['user']['userId'];


		$this->load->view('header');
		$this->load->view('Menu',$data);
		$this->load->view('profile',$data);
		$this->load->view('footer');
	}

	public function mycontact()
	{	
		
		if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->session->userdata('logged_in');
        }else{
            redirect('home');
		}
		$data['fullname'] = $data['user']['fullname'];
		$userId = $data['user']['userId'];


		$data['viewContact'] = $this->Data->ViewContact($userId);
		//print_r($data['viewContact']);
		$data['userName'] = $this->Data->userDataName();
		$data['userNumber'] = $this->Data->userDataNumber();

		


		$this->load->view('header');
		$this->load->view('Menu',$data);
		$this->load->view('mycontact',$data);
		$this->load->view('footer');
	}

	public function	submitcontact(){		 
			
		/* Load form validation library */ 
		$this->load->library('form_validation');			 
		/* Set validation rule for name field in the form */ 
		$this->form_validation->set_rules('firstName', 'First Name', 'required'); 
		$this->form_validation->set_rules('lastName', 'Last Name', 'required'); 
		$this->form_validation->set_rules('mobile', 'Mobile', 'required'); 
		

			if($this->form_validation->run() == FALSE) { 	  
				$data['userName'] = $this->Data->userDataName();
				$data['userNumber'] = $this->Data->userDataNumber();

				if($this->session->userdata('isUserLoggedIn')){
					$data['user'] = $this->session->userdata('logged_in');
				}else{
					redirect('home');
				}
				$data['fullname'] = $data['user']['fullname'];
				$data['userId'] = $data['user']['userId'];


				$this->load->view('header');
				$this->load->view('Menu',$data);
				$this->load->view('addcontact');
				$this->load->view('footer');

		  }else{	

			$config['upload_path']          = 'upload';
			$config['allowed_types']        = 'gif|jpg|png|pdf|doc';
			$config['max_size']             = 10000;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

				if (!$this->upload->do_upload('photo')){
					
					$fileLocation = "img/user.png";
				}else{
					$data = array($this->upload->data());
					$fileLocation = 'upload/'.$data[0]['file_name'];
				}
				
					$data = array(
					'firstName' => $this->input->post('firstName'),
					'middleName' => $this->input->post('middleName'),
					'lastName' => $this->input->post('lastName'),
					'mobile' => $this->input->post('mobile'),
					'landline' => $this->input->post('landline'),
					'email' => $this->input->post('email'),
					'notes' => $this->input->post('notes'),
					'status' => $this->input->post('status'),
					'addedby' => $this->input->post('addedby'),
					'photo' => $fileLocation
				);	
				   
				$insertContact = $this->Data->contact($data);
				$this->session->set_flashdata('message', 'Contact Successfully Added.');
				redirect('home/mycontact');
			//}
			  	
	  
	  } 
  }



	public function	submitregister(){		 
			
		  /* Load form validation library */ 
		  $this->load->library('form_validation');			 
		  /* Set validation rule for name field in the form */ 
		  $this->form_validation->set_rules('fullname', 'Full Name', 'required'); 
		  $this->form_validation->set_rules('email', 'Email', 'required'); 
		  $this->form_validation->set_rules('password', 'Password', 'required');

		  	if($this->form_validation->run() == FALSE) { 
			
				$this->load->view('include/topheader');
				$this->load->view('register');

			}else{				
				$data = array(
					'fullname' => $this->input->post('fullname'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password')
				);			
				$insertUserData = $this->Data->register($data);
				$this->session->set_flashdata('message', 'Account Successfully Created.');
     			redirect('home/register');	
		
		} 
	}

	public function user_login_process() {

		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		
		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->view('admin_page');
			}else{
				$this->load->view('header');
				$this->load->view('login');
			}
		}else{
			$data = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
			);
		$result = $this->Data->login($data);
		
		if ($result == TRUE) {		
		$email = $this->input->post('email');
		$result = $this->Data->read_user_information($email);
			
			if ($result != false) {
				$session_data = array(
				'userId' => $result[0]->userId,
				'fullname' => $result[0]->fullname,
				'email' => $result[0]->email,
				);
			// Add user data in session
				$this->session->set_userdata('isUserLoggedIn',TRUE);
				$this->session->set_userdata('logged_in', $session_data);
				$this->session->set_flashdata('message', 'Login Successfully.');
     			redirect('home/dashboard');			
			}

		}else{
			$data = array(
			'error_message' => 'Invalid Username or Password'
			);
			$this->load->view('include/topheader');
			$this->load->view('login',$data);
		}

		}
		}

		// Logout 
		public function logout() {
			// Removing session data
			$sess_array = array('email' => '');
			$this->session->unset_userdata('logged_in', $sess_array);
			$data['message_display'] = 'Successfully Logout';
			$this->load->view('include/topheader');
			$this->load->view('login',$data);
		}

		
		public function deletedata(){
			$id = $this->input->get('id');
			$this->Data->deleteData($id);
			redirect("Home/mycontact");
		}

}
