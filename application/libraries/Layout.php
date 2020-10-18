<?php
 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{

    var $obj;
    var $layout;

    function __construct()
    {
        $this->obj =& get_instance();
        $this->layout = 'layout/layout_main';
       
    }

    function setLayout($layout)
    {
      $this->layout = $layout;
      
    }

    function view($data=null, $return=false)
    {
        
       
        $loadedData = array();
        $loadedData['content'] = $this->obj->load->view($data['main'],$data,true);
       
        
       if($return)
        {
            $output = $this->obj->load->view($this->layout, $loadedData, true);
            return $output;
        }
        else
        {
            $this->obj->load->view($this->layout, $loadedData, false);
        }
        
    }
    /* generates all items on page  */
    function generate($data)
    {
        
        
        $this->obj->layout->setLayout($this->layout);
        $this->obj->layout->view($data);
    }
}
?> 

