<?php
class Series_model extends CI_Model{
  
  public function __construct()
  {
    $this->load->database();
  }
  
  public function get_series($slug = FALSE)
  {
    if ($slug === FALSE)
    {
      $this->db->order_by('start_date', 'desc');
      $query = $this->db->get('series');
      return $query->result_array();
    }
  
    $query = $this->db->get_where('series', array('slug' => $slug));
    return $query->row_array();
  }
  
}