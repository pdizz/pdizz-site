<?php 

class Pages extends CI_Controller {
    
    public function view($page = 'home') {
        
        if ( !file_exists(APPPATH.'views/pages/' . $page . '.php')) {
            // we dont have that page
            show_404();
        }
        
        // set path to view and pass to page template
        $data['title'] = ucfirst($page);
        $data['view'] = 'pages/' . $page;
        $this->load->view('template', $data);

    }
}

?>
