<?php
    class Login_controller  extends CI_Controller{
        function __construct(){
		parent::__construct();
		//$this->load->model('artist_model');
		$this->load->model('login_Model');
		$this->load->library('session');
	}
		function check_valid()
		{
			$session = $this->session->userdata('username');
			if(!$session)
		        {
		            redirect('Login_controller/login');
		        }
		}


		function logout(){
			
		//session_start();
		$this->session->unset_userdata(array("username"=>"","password"=>""));
		$this->session->sess_destroy();
		//redirect('Login_controller/login');
		$this->load->view('login_view');
		}
		function login(){
			
		
		$this->load->view('login_view');
		}

		function check_Login()
		{
			$username = $this->input->get('u');
			$password = $this->input->get('p');
			$userExist=$this->login_Model->login($username,$password);
			if($userExist){
				$dataa= array(
                   'username'  => $username,
                   'password'     => $password,
               );
				$this->session->set_userdata($dataa);
				
			$data=array();
			$contents=$this->login_Model->get_albums();
			$data['albums']=$contents;	
			$this->load->view('dashboard_view',$data);}
			else{
				
			$this->load->view('login_view');}
			
			
		}
		



		function view_dashboard()
		{
			
			//session_start();
			 //here you can take loginid, email whatever you store in session
		     $this->check_valid();   
		       
			$data=array();
			$contents=$this->login_Model->get_albums();
			$data['albums']=$contents;	
			$this->load->view('dashboard_view',$data);
			
			
			
			
			
		}
		function view_artist()
		{
			
		        
		     $this->check_valid(); 

			$data=array();
			$contents=$this->login_Model->get_artist();
			$data['artists']=$contents;	
			$this->load->view('dashboard_artistView',$data);
			
			
		}
		function view_latest()
		{
			
		    $this->check_valid(); 
			
			$data=array();
			$contents=$this->login_Model->get_news_and_events();
			$data['latest']=$contents;	
			$this->load->view('dashboard_latestView',$data);
		}
		function view_past()
		{
			
		    $this->check_valid(); 

			$data=array();
			$contents=$this->login_Model->get_past_events();
			$data['past']=$contents;	
			$this->load->view('dashboard_pastView',$data);
		}
		function view_youtube()
		{
			
		    $this->check_valid(); 

			$data=array();
			$contents=$this->login_Model->get_youtube();
			$data['videos']=$contents;	
			$this->load->view('dashboard_videoView',$data);
		}


		function view_add()
		{
			
		    $this->check_valid(); 

			$this->load->view('Add');
		}


		function getAlbumsDetails()
		{
			$this->load->model('login_Model','',TRUE);

		}

		function delete(){
		$table_id=$this->input->get('id');
		$table = $this->input->get('a');
		if($table_id > 0 ){
			if($table=="albums")
				{
				$message = $this->login_Model->delete_data($table_id,$table);
				redirect('Login_controller/view_dashboard');
				}
			else if($table=="artist")
				{
				$message = $this->login_Model->delete_data($table_id,$table);
				redirect('Login_controller/view_artist');
				}
			else if($table=="latest_news_and_events")
				{
				$message = $this->login_Model->delete_data($table_id,$table);
				redirect('Login_controller/view_latest');
				}
			else if($table=="past_events")
				{
				$message = $this->login_Model->delete_data($table_id,$table);
				redirect('Login_controller/view_past');
				}
			else if($table=="youtube_video")
				{
				$message = $this->login_Model->delete_data($table_id,$table);
				redirect('Login_controller/view_youtube');
				}	
		
		
		}
		else{
			redirect('Login_controller/logout');
		}
	  }
	  function insert(){
		
		$table = $this->input->get('id');
		
			if($table=="albums")
				{
					$data= array(
                   'image'  => $this->input->post('image'),
                   'title'     => $this->input->post('title'),
                   'category'     => $this->input->post('cat'),
                   'artist'     => $this->input->post('art'),
                   'produced'     => $this->input->post('pro'),
                   'detail'     => $this->input->post('det'),
                   'genre'     => $this->input->post('gen'),
                   'tag'     => $this->input->post('tag')
                   );
					$this->login_Model->insert_data($table,$data);

				//$message = $this->login_Model->delete_data($table_id,$table);
				redirect('Login_controller/view_dashboard');
				}
			else if($table=="artist")
				{
				$message = $this->login_Model->delete_data($table_id,$table);
				redirect('Login_controller/view_artist');
				}
			else if($table=="latest_news_and_events")
				{
				$message = $this->login_Model->delete_data($table_id,$table);
				redirect('Login_controller/view_latest');
				}
			else if($table=="past_events")
				{
				$message = $this->login_Model->delete_data($table_id,$table);
				redirect('Login_controller/view_past');
				}
			else if($table=="youtube_video")
				{
				$message = $this->login_Model->delete_data($table_id,$table);
				redirect('Login_controller/view_youtube');
				}
			else{
				redirect('Login_controller/logout');
			}
	  }

		
	}
	

?>