<!--Interacts with teh db using active records-->
<?php

class Product_model extends CI_Model {
    
    // create get product method
    // Uses 'acive record' to interact with the database 
    public function get_products() {
        $this->db->select('*'); 
        $this->db->from('products'); 
        $query = $this->db->get();
        
        // returns the result rows
        return $query->result(); 
    }
    
    /*
        Get single product    
    */
    
    public function get_product_details($id) {
        $this->db->select('*'); 
        $this->db->from('products'); 
        $this->db->where('id', $id);
        $query = $this->db->get();
        
        // returns the result row
        // it is 'row()' since its a single product 
        return $query->row(); 
    }
    
}

?>