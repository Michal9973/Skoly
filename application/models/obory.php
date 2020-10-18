<?php
class obory extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    public function fetch_by_id()
    {
     $this->db->from('obor');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        return $query;   
    }
    
    public function record_count()
    {
        $this->db->from("obor");
        return $this->db->count_all_results();
    }
    
    public function rcount($obor="")
    {
        $this->db->from('obor');
        if(isset($obor)&& $obor != "" )
        {
            $this->db->where('id', $obor);
            
        }
        return $this->db->count_all_results();

    }
    
     public function fetch_obory($limit, $start, $obor = "")
    {
        $this->db->limit($limit, $start);
    $this->db->order_by('id', 'ASC');
    if (isset($obor) && $obor != "") {
      $this->db->where('id', $obor);
    }
    $query = $this->db->get("obor");

    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;

    }
    
    public function view_by_obor($limit, $start, $obor="")
    {
    $this->db->limit($limit, $start);
    //$this->db->order_by('nazev', 'ASC');
    if (isset($obor) && $obor != "") {
      $this->db->where('obor', $obor);
      $this->db->group_by("skola");
    }
    $query = $this->db->get("pocet_prijatych");//obor

    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
    }
}
