<?php
class Mpocet extends CI_Model {
    public function __construct() {
        parent::__construct();
        
    }
    public function fetch_by_id($limit = 20, $start=0)
    {
        $this->db->from('pocet_prijatych');
        $this->db->limit($limit, $start);
       
        
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        //return $query;
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
        $this->db->from('pocet_prijatych');
        return $this->db->count_all_results();
        
    }
    
    public function  view_by_obor($obor, $limit=20, $start=0)
    {
        $this->db->from("pocet_prijatych");
        $this->db->join('obor', 'pocet_prijatych.obor = obor.id');//Select * from `pocet_prijatych` join `obor` on `obor`.`id`
        $this->db->limit($limit, $start);
        $this->db->where('pocet',$obor);
        $query = $this->db->get();
        
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
    }
    
}
