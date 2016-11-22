<?php
    class ArtistRoster_controller  extends CI_Controller{
        function __construct(){
		parent::__construct();
		$this->load->model('model');
		
	}
function artistRoster()
{
	$contents=$this->model->get_artist();
			$data['artists']=$contents;
	$this->load->view('artistroster_view',$data);
}
}
?>

