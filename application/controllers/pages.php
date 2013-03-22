<?php 

class Pages extends CI_Controller {
    
    public function view($page = 'home') {
        
        if ( !file_exists(APPPATH.'views/pages/' . $page . '.php')) {
            // we dont have that page
            show_404();
        }
        
        $data['title'] = ucfirst($page);
        
        $this->load->view('fragments/header', $data);
        $this->load->view('fragments/navigation');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('fragments/navigation');
        $this->load->view('fragments/footer');
        
    }
}

?>
