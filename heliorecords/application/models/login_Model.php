<?php
Class Login_model extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('userName, password');
   $this -> db -> from('users');
   $this -> db -> where('userName', $username);
   $this -> db -> where('password', $password);
   
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return true;
   }
   else
   {
     return false;
   }
 }

function delete_data($id, $table)
{
    $this->db->where('id', $id);
    $this->db->delete($table);

}

 
 function insert_data($table, $data)
{
    $this->db->insert($table,$data);
    
}

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