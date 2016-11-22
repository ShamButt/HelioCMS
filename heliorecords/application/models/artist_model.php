<?php
   class Artist_model extends CI_Model{    
	 
    function __construct(){
    parent::__construct();
   }
	
  
   function artist_page()
  {
    $this->db->select('*');
    $q = $this->db->get('latest_news_and_events');
 	$data=array();
    if($q->num_rows() > 0)
    {
      foreach ($q->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }
	return $data;
  }

function process($userid){
$this->db->where('id', $userid);
$query = $this->db->get('latest_news_and_events');
if($query->num_rows() > 0)
		{
			$row = $query->row();
			$data = array(
					'id' => $row->id,
					'title' => $row->title,
					'image' => $row->image,
					'date' => $row->date,
					'seen' => $row->seen,
					'detail'=> $row->detail,
					'interview' => $row->interview,
					
					);
			$this->session->set_userdata($data);
			return $data;
		}}
}
?>	