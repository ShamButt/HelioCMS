<?php
    class Contact_controller  extends CI_Controller{
        function __construct(){
		parent::__construct();
		//$this->load->model('model');
		
	}
function contact()
{
	//		$data['artists']=$contents;
	$this->load->view('Contact_Us');
}
}
?>

