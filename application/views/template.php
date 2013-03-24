<?php 

$this->load->view('fragments/header', $this->_ci_cached_vars);
$this->load->view('fragments/navigation');
$this->load->view('fragments/message');
$this->load->view($view);
$this->load->view('fragments/navigation');
$this->load->view('fragments/footer');

?>
