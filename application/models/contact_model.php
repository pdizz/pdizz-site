<?php 

class Contact_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    // TODO check if they've contacted before
    //public function get($sender_email) {}
    
    public function set($sender_ip, $sender_email, $sender_name, $subject, $message) {
        $data = array(
            'sender_ip' => inet_pton($sender_ip), // convert ip string to binary
            'sender_email' => $sender_email,
            'sender_name' => $sender_name,
            'subject' => $subject,
            'message' => $message            
        );
        
        return $this->db->insert('contact', $data);
    }
    
}

?>
