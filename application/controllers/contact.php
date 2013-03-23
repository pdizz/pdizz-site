<?php 

class Contact extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper(array('form', 'email'));
        $this->load->library('form_validation');
    }
    
    public function index() {
        
        // validate form (TODO: filtering, XSS)
        $this->form_validation->set_rules('sender_name', 'From', 'required');
        $this->form_validation->set_rules('sender_email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            // reload the page
            $this->load->view('fragments/header', array('title' => 'Contact Me')); // pass in page title
            $this->load->view('fragments/navigation');
            $this->load->view('pages/contact'); // TODO maintain form state
            $this->load->view('fragments/navigation');
            $this->load->view('fragments/footer');
        }
        else {
            // form passed validation
            $sender_email = $this->input->post('sender_email');
            $sender_name = $this->input->post('sender_name');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
            
            // construct email and send
            $this->email->from($sender_email);
            $this->email->to('pete.albrecht@gmail.com');
            $this->email->reply_to($sender_email, $sender_name);
            $this->email->subject($subject);
            $this->email->message($message);
            $this->email->send();
            
            // store contact info in DB
        }

        
        
    }    
    
}


?>
