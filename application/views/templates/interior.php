<?php
	$this->load->view('templates/head');
	$this->load->view('templates/navigation');
	$this->load->view('templates/interior-header');
	echo $content;
	$this->load->view('templates/foot');
?>