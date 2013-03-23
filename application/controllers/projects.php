<?php 

class Projects extends CI_Controller {
    
    public function view($project = NULL) { 
        
        if ($project === NULL) { // load project home page 
            $data['title'] = 'Projects';
        
            $this->load->library('page');
            $this->page->render('pages/projects', $data);
            
            /*
            $this->load->view('fragments/header', $data);
            $this->load->view('fragments/navigation');
            $this->load->view('pages/projects');
            $this->load->view('fragments/navigation');
            $this->load->view('fragments/footer');   
             * 
             */         
        }
        
        else { // load requested project
            $data['title'] = ucfirst($project);
        
            $this->load->library('page');
            $this->page->render('projects/' . $project, $data);
            
            /*
            $this->load->view('fragments/header', $data);
            $this->load->view('fragments/navigation');
            $this->load->view('projects/' . $project);
            $this->load->view('fragments/navigation');
            $this->load->view('fragments/footer');
             * 
             */
        }       
        
    }
    
}

?>
