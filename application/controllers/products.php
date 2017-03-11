<?php

// this will be our default controller 
// always extend to CI_Controller to work

class Products extends CI_Controller{
    
    public function index(){
        
        // fetch all of the products from the products_model
        // And store data in data array
        // the get_products is a function from the Product_model
        $data['products'] = $this->Product_model->get_products(); 
        
        
       // load views in this application
       // products will be the 'main content' that is displayed in the middle of main.php
       // when we load the main view
        $data['main_content'] = 'products'; 
        
       // load main layout view 
       $this->load->view('/layouts/main', $data); 
    }
}
    
?>