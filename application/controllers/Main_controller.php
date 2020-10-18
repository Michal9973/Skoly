<?php
class Main_controller extends CI_Controller {
    
    public function __construct() {
     parent::__construct();
    $this->load->helper('url');
    $this->load->library('table');
    $this->load->library('pagination');
    $this->load->model("mesta");
    $this->load->database();
    }
    private function create_base_pagination_config()
{
    $config = [];
    $config['per_page'] = 20;
    $config['full_tag_open'] = '<ul class = "pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_tag_open'] = "<li class='page-item'>";
    $config['first_tag_close'] = "</li>";
    $config['prev_tag_open'] = "<li class='page-item'>";
    $config['prev_tag_close'] = "</li>";
    $config['next_tag_open'] = "<li class='page-item'>";
    $config['next_tag_close'] = "</li>";
    $config['last_tag_open'] = "<li class='page-item'>";
    $config['last_tag_close'] = "</li>";     
    $config['cur_tag_open'] = "<li class='page-item active'><a class='page-link'>";
    $config['cur_tag_close'] = "</a></li>";
    $config['num_tag_open'] = "<li class='page-item'>";
    $config['num_tag_close'] = "</li>";
    $config['attributes'] = array('class' => 'page-link');
     return $config;
}

/*public function index()
{
    
    
    $this->load->view("templates/header");
    $this->load->view("templates/navbar");
    $data["results"] = $this->mesta->fetch_by_id();
    $this->load->view("view_mesta", $data);
    $this->mesta->fetch_by_id();
    $this->load->view("templates/footer");
    }*/
    
    public function view_mesta($offset = 0)
{
    $config = $this->create_base_pagination_config();
      $config['base_url'] = base_url() . "/mesta/";
      $this->load->model("mesta");
      $config['total_rows'] = $this->mesta->record_count();
      $this->load->library("pagination");
      $this->pagination->initialize($config);
      $this->load->model("mesta");
      $data["results"] = $this->mesta->fetch_by_id($config["per_page"], $offset);
      $data["links"] = $this->pagination->create_links();
      $this->load->view('templates/header');
      $this->load->view('templates/navbar');
      $this->load->view('view_mesta', $data);
      $this->load->view('templates/footer');
}

public function view_skoly($offset = 0)
{
    $config = $this->create_base_pagination_config();
      $config['base_url'] = base_url() . "/skoly/";
      $this->load->model("skoly");
      $config['total_rows'] = $this->skoly->record_count();
      $this->load->library("pagination");
      $this->pagination->initialize($config);
      $this->load->model("skoly");
      $data["results"] = $this->skoly->fetch_by_id($config["per_page"], $offset);
      $data["links"] = $this->pagination->create_links();
      $this->load->view('templates/header');
      $this->load->view('templates/navbar');
      $this->load->view('view_skoly', $data);
      $this->load->view('templates/footer');
}

public function view_obory($offset = 0)
{
    $config = $this->create_base_pagination_config();
      $config['base_url'] = base_url() . "/obory/";
      $this->load->model("obory");
      $config['total_rows'] = $this->obory->record_count();
      $this->load->library("pagination");
      $this->pagination->initialize($config);

      $data["results"] = $this->obory->fetch_by_id($config["per_page"], $offset);
      $data["links"] = $this->pagination->create_links();
      $this->load->view('templates/header');
      $this->load->view('templates/navbar');
      $this->load->view('view_obory', $data);
      $this->load->view('templates/footer');
}

public function view_pocet_prijatych($offset = 0)
{
  $config = $this->create_base_pagination_config();
      $config['base_url'] = base_url() . "/pocet-prijatych/";
      $this->load->model("Mpocet");
      $config['total_rows'] = $this->Mpocet->record_count();
      $this->load->library("pagination");
      $this->pagination->initialize($config);

      $data["results"] = $this->Mpocet->fetch_by_id($config["per_page"], $offset);
      $data["links"] = $this->pagination->create_links();
      $this->load->view('templates/header');
      $this->load->view('templates/navbar');
      $this->load->view('view_pocet', $data);
      $this->load->view('templates/footer');   
}

public function view_zpetne_vazby($offset = 0)
{
 $config = $this->create_base_pagination_config();
      $config['base_url'] = base_url() . "/zpetne-vazby/";
      $this->load->model("Mzv");
      $config['total_rows'] = $this->Mzv->record_count();
      $this->load->library("pagination");
      $this->pagination->initialize($config);

      $data["results"] = $this->Mzv->fetch_by_id($config["per_page"], $offset);
      $data["links"] = $this->pagination->create_links();
      $this->load->view('templates/header');
      $this->load->view('templates/navbar');
      $this->load->view('view_zv', $data);
      $this->load->view('templates/footer');    
}

public function create_map_config()
{
    $this->load->view("templates/header"); 
    $this->load->view('templates/navbar');
    $this->load->view("view_map");
    $this->load->view('templates/footer');    

    
    
    
}

public function view_by_mesto($mesto, $offset = null)
{
   if($offset == null){
        redirect("/mesto/$mesto/0", 'refresh');
    }
    $config = $this->create_base_pagination_config();
    $config['base_url'] = base_url()."/view/".$mesto."/";
    $this->load->model("skoly");
    $config['total_rows'] = $this->skoly->record_count_by_mesto($mesto);
    $this->load->library("pagination");
    $this->pagination->initialize($config);
    
    $data["results"] = $this->skoly->fetch_by_mesto($config["per_page"], $offset, $mesto);
    $data["links"] = $this->pagination->create_links();
   /* $this->load->model("mesta");
    $data["mesto"] = $this->mesta->fetch_by_id($mesto);*/
    $this->load->view('templates/header');
      $this->load->view('templates/navbar');
      $this->load->view('view_skoly', $data);
      $this->load->view('templates/footer');

}

public function view_by_obor($obor, $offset = null)
{
   if($offset == null){
        redirect("/obor/$obor/0", 'refresh');
    }
    $config = $this->create_base_pagination_config();
    $config['base_url'] = base_url()."/view/".$obor."/";
    $this->load->model("obory");
    $config['total_rows'] = $this->obory->rcount($obor);
    $this->load->library("pagination");
    $this->pagination->initialize($config);
    
    $data["results"] = $this->obory->view_by_obor($config["per_page"], $offset, $obor);
    $data["links"] = $this->pagination->create_links();
   /* $this->load->model("mesta");*/
    $this->load->model("Mpocet");
    $data["obor"] = $this->Mpocet->view_by_obor($obor);
    
    $this->load->view('templates/header');
      $this->load->view('templates/navbar');
      $this->load->view('view_pocet', $data);
      $this->load->view('templates/footer');

}

public function view_by_skola($skola,  $offset = null)
{
    if($offset == null){
        redirect("/obor/$skola/0", 'refresh');
    }
    $config = $this->create_base_pagination_config();
    $config['base_url'] = base_url()."/view/".$skola."/";
    $this->load->model("skoly");
    $config['total_rows'] = $this->skoly->record_count($skola);
    $this->load->library("pagination");
    $this->pagination->initialize($config);
    
    $data["results"] = $this->skoly->fetch_skola($config["per_page"], $offset, $skola);
    $data["links"] = $this->pagination->create_links();
  
    $this->load->model("skoly");
    $data["obor"] = $this->skoly->fetch_skola($skola);
   
    $this->load->view('templates/header');
      $this->load->view('templates/navbar');
      $this->load->view('view_skoly', $data);
      $this->load->view('templates/footer');
}

 


}




