<?php 

class Projects extends CI_Controller {
    
    public function view($project = NULL) { 
        
        if ($project === NULL) { // load project home page 
            $data['title'] = 'Projects';
            $data['view'] = 'pages/projects';
            
            // get source code to pass to source view
            $this->load->library('source');
            $data['source'] = $this->source->get(
                    'controllers/projects.php',
                    NULL, 
                    'views/pages/projects.php'
                    );
            
            // render the page
            $this->load->view('template', $data);                   
        }
        
        else { // load requested project
            $data['title'] = ucfirst($project);
            $data['view'] = 'projects/' . $project;
            
            // get source code to pass to source view
            $this->load->library('source');
            $data['source'] = $this->source->get(
                    'controllers/projects.php',
                    NULL, 
                    'views/projects/'.$project.'.php'
                    );
            
            // render the page
            $this->load->view('template', $data);

        }       
        
    }
    
}

?>
