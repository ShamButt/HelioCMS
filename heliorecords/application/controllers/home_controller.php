<?php
    class Home_controller  extends CI_Controller{
        function __construct(){
		parent::__construct();
		$this->load->model('model');
	}
	
        function index(){
			$contents=$this->model->get_news_and_events();
			$data=array();
			$data['latestNewsAndEvents']=$contents;
						
			$contents=$this->model->get_past_events();
			$data['pastEvents']=$contents;
			
			$contents=$this->model->get_albums();
			$data['freeMusic']=$contents;
			
			$contents=$this->model->get_youtube();
			$data['youtubeVideo']=$contents;
			
						
            $this->load->view('home_view',$data);
			
			
            }

        }
?>