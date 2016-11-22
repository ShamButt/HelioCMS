<?php
    class Affiliate_controller  extends CI_Controller{
        function __construct(){
		parent::__construct();
		//$this->load->model('artist_model');
	}


		function affiliate_details(){
		
		$this->load->view('Affiliates_view');
		}
	  }
	?>