<?php 

ob_start(); // to remove header error

class cart extends CI_Controller {
    public $paypal_data = ''; 
    public $tax; 
    public $shipping; 
    public $total = 0; 
    public $grand_total; 
    
    /*
    
    cart index 
    
    */
    
    public function index() {
        // load view 
        $data['main_content'] = 'cart'; 
        $this->load->view('layouts/main', $data); 
    }
    
    /*
    
        Add to cart
    */
    
    
    // create an array for item data
    public function add() {
        $data = array(
                
                // item_number is from the form name being submitted in products view 
                //  post is equivelant as $_POST 
                'id' => $this->input->post('item_number'), 
                'qty' => $this->input->post('qty'), 
                'price' => $this->input->post('price'), 
                'name' => $this->input->post('title')
        ); 
        
    
        // make sure you load cart library to use 
        // load in config in autoload : $autoload['libraries'] = array('database', 'cart');
        // also include sessions in the config.php : $config['encryption_key'] = '12345';
        $this->cart->insert($data); 
       	redirect('products');
        
       
    }
    
    /*
        
        Update Cart 
        
    */
    
    public function update($in_cart = null) {
        $data = $_POST; 
        $this->cart->update($data); 
        
        //Show Cart Page
        redirect('cart', 'refresh'); 
    }
    
}