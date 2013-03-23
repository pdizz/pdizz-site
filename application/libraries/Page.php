<?php 

class Page {
    
    public function render($content, $data) {
        
        $this->load->view('fragments/header', $data);
        $this->load->view('fragments/navigation');
        $this->load->view('fragments/message', $data);
        $this->load->view($content);
        $this->load->view('fragments/navigation');
        $this->load->view('fragments/footer');
        
    }
    
}

?>
