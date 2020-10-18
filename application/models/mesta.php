<?php


class mesta extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function fetch_by_id($limit = 20, $start = 0)
    {
        $this->db->from('mesto');
       $this->db->limit($limit, $start);
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
       // return $query;
        if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
        
  }
  
   public function fetch_mesta($limit, $start, $mesto = "")
    {
        $this->db->limit($limit, $start);
    $this->db->order_by('nazev', 'ASC');
    if (isset($mesto) && $mesto != "") {
      $this->db->where('mesto', $mesto);
    }
    $query = $this->db->get("mesto");
    

    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;

    }
        
    public function record_count()
    {
        $this->db->from("mesto");
        return $this->db->count_all_results();
    }
}

