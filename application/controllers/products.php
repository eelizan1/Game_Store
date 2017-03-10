<?php

// this will be our default controller 
// always extend to CI_Controller to work

class Products extends CI_Controller{
    public function index(){
        
        
       // load views in this application
       // products will be the 'main content' that is displayed in the middle of main.php
       // when we load the main view
        $data['main_content'] = 'products'; 
        
       // load main layout view 
       $this->load->view('/layouts/main', $data); 
    }
}
    
?>