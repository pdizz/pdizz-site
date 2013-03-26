<?php 

class Contact extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('form');
        $this->load->library(array('form_validation', 'email'));
    }
    
    public function index() {
        
        // validate form (TODO: filtering, XSS)
        $this->form_validation->set_rules('sender_name', 'From', 'required');
        $this->form_validation->set_rules('sender_email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            // reload the page
            $data['title'] = 'Contact Me';
            $data['view'] = 'contact/contact';
            
            // repopulate the form with previous info
            $data['sender_email'] = $this->input->post('sender_email');
            $data['sender_name'] = $this->input->post('sender_name');
            $data['subject'] = $this->input->post('subject');
            $data['message'] = $this->input->post('message');
            
            // get source code to pass to source view
            $this->load->library('source');
            $data['source'] = $this->source->get(
                    'controllers/contact.php',
                    'models/contact_model.php', 
                    'views/contact/contact.php'
                    );
            
            $this->load->view('template', $data);

        }
        else {
            // form passed validation
            $sender_email = $this->input->post('sender_email');
            $sender_name = $this->input->post('sender_name');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
            
            // TODO captcha!!!!!!!!!
            
            // construct email and send
            $this->email->from($sender_email, $sender_name);
            $this->email->to('pete.albrecht@gmail.com');
            $this->email->subject($subject);
            $this->email->message($message);
            $this->email->send();
            
            // store contact info in DB
            $this->load->model('contact_model');
            $this->contact_model->set($sender_email, $sender_name, $subject, $message);
            
            // success!
            $data['title'] = 'Success';
            $data['view'] = 'contact/success';   
            
            // get source code to pass to source view
            $this->load->library('source');
            $data['source'] = $this->source->get(
                    'controllers/contact.php',
                    NULL, 
                    'views/contact/success.php'
                    );
            
            $this->load->view('template', $data);
            
        }

        
        
    }    
    
}


?>
