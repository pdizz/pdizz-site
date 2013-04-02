<?php 
$this->load->view('fragments/header', $this->_ci_cached_vars);
$this->load->view('fragments/navigation');
//$this->load->view('fragments/message');
?>

<!-- beginning of main content view -->

<div id="content">
<?php $this->load->view($view); ?>
</div>

<!-- end of content view -->

<?php
$this->load->view('fragments/source');
$this->load->view('fragments/navigation');
$this->load->view('fragments/footer');
?>
