<?php
    class Shop_controller  extends CI_Controller{
        function __construct(){
		parent::__construct();
		$this->load->model('model');
	}


		function shop_details(){

			$contents=$this->model->get_albums();
			$data['freeMusic']=$contents;
			
			$this->load->view('shop_view',$data);
		}
	  }
	?>