<?php 

class Projects extends CI_Controller {
    
    public function view($project = NULL) { 
        
        if ($project === NULL) { // load project home page 
            $data['title'] = 'Projects';
            $data['view'] = 'pages/projects';
            $this->load->view('template', $data);
                   
        }
        
        else { // load requested project
            $data['title'] = ucfirst($project);
            $data['view'] = 'projects/' . $project;
            $this->load->view('template', $data);

        }       
        
    }
    
}

?>
