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
        
        // get source code to pass to source view
        $this->load->library('source');
        $data['source'] = $this->source->get(
                'controllers/pages.php',
                'views/template.php'
                );
        
        // render the page
        $this->load->view('template', $data);
    }
}

?>
