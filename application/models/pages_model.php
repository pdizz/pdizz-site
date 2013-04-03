<?php 

class Contact_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get($page) {
        
        $query = $this->db->get_where('pages', array('page_name' => $page), 1);
        
        if ($query->num_rows > 0) { // page found
            return $query->row();            
        }
        else { // page not found
            return FALSE;
        }
        
    }
    
}

?>
