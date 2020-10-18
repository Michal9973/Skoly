<?php
class skoly extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    public function fetch_by_id($limit = 20, $start = 0)
    {
        $this->db->from('skola');
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
    public function count_all_results()
    {
        $this->db->from("skola");
        return $this->db->count_all_results();
    }
    
    public function locations()
    {
        //$this->db->from("skola");
        $this->db->select('geolat', 'geolong', 'nazev');
        $this->db->get("skola");
    }
    
    public function view_by_mesto($limit=20, $start=0, $mesto="")//Select * from `skola` join `mesto` on `mesto`.`id`
    {
        $this->db->from('skola');//skola
        $this->db->join('mesto', 'skola.mesto = mesto.nazev');//mesto.id
        $this->db->limit($limit, $start);
        $this->db->where('mesto',$mesto);
       
        $query = $this->db->get();
        
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }
        public function record_count($mesto="")
    {
        $this->db->from('mesto');
        if(isset($mesto)&& $mesto != "" )
        {
            $this->db->where('id_mesto', $mesto);
            
        }
        return $this->db->count_all_results();

    }
    
    public function record_count_by_mesto($mesto)
  {
    $this->db->where('mesto', $mesto);
    $this->db->from('skola');
    return $this->db->count_all_results();
  }
  
  public function fetch_by_mesto($limit, $start, $mesto)
  {
    $this->db->limit($limit, $start);
    $this->db->order_by('id', 'ASC');
    $this->db->where('mesto', $mesto);
    $query = $this->db->get("skola");

    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }
  
  public function fetch_skola($skola)
  {
       $this->db->where('skola' == $skola);
       $query = $this->db->get("skola");
      if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }
    
    
}
