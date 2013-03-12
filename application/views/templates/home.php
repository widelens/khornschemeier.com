<?php
	$this->load->view('templates/head');
	$this->load->view('templates/navigation');
	echo $content;
	$this->load->view('templates/foot');
?>