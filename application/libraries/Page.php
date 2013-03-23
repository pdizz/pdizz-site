<?php 

class Page extends CI_Controller {

    public function render($page, $data) { // $page should be path to page view

        $this->load->view('fragments/header', $data);
        $this->load->view('fragments/navigation');
        //$this->load->view('fragments/message', $data);
        $this->load->view($page);
        $this->load->view('fragments/navigation');
        $this->load->view('fragments/footer');

    }  

}

?>
