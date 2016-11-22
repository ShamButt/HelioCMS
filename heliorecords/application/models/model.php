<?php
   class Model extends CI_Model{    
	

 function get_news_and_events()
  {
 
//    $this->db->where($where_arr);
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

function get_artist()
  {
 
//    $this->db->where($where_arr);
    $this->db->select('*');
    $q = $this->db->get('Artist');
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
  
 function get_past_events()
 {
 
 	$this->db->select('*');
	$q = $this->db->get('past_events');
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
 
 
  function get_albums()
  {
 
    $this->db->select('*');
    $q = $this->db->get('albums');
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
  
   function get_youtube()
  {
 
    $this->db->select('*');
    $q = $this->db->get('youtube_video');
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



 }
 
 
?>