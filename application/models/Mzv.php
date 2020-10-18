<?php
class Mzv extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function fetch_by_id()
    {
        $this->db->from('zpetna_vazba');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        return $query;
    }
    
    public function record_count()
    {
        $this->db->from('zpetna_vazba');
        return $this->db->count_all_results();
    }
    
}
