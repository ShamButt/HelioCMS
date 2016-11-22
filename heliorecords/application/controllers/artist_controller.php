<?php
    class Artist_controller  extends CI_Controller{
        function __construct(){
		parent::__construct();
		$this->load->model('artist_model');
	}


		function artist_details(){
		$artist_id=$this->input->get('id');
		if($artist_id > 0){
		
		$contents=$this->artist_model->process($artist_id);
		$data=array();
		$data['artistPageDetails']=$contents;
			
			
		$this->load->view('artist_view',$data);
		}
	  }

	}
	?>