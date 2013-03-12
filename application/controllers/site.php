<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller
{
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$template_data['content'] = $this->load->view('home', NULL, TRUE);
		$this->load->view('templates/home', $template_data);
	}
	
	/**
	 * Compile LESS files to css
	 */
	public function lessc($filename)
	{
		header('Content-type: text/css');
		header(sprintf('Last-Modified: %s GMT', gmdate('D, d M Y H:i:s', strtotime('-1 year')))); 
		
		$less = new lessc;
		echo $less->compileFile(PUBLICPATH . '/less/' . $filename);
	}
	
	/**
	 * Family
	 */
	public function family()
	{
		$template_data['content'] = $this->load->view('family', NULL, TRUE);
		$this->load->view('templates/interior', $template_data);
	}
	
	/**
	 * Travel
	 */
	public function travel()
	{
		$template_data['content'] = $this->load->view('travel', NULL, TRUE);
		$this->load->view('templates/interior', $template_data);
	}
	
	/**
	 * Photography
	 */
	public function photography()
	{
		$template_data['content'] = $this->load->view('photography', NULL, TRUE);
		$this->load->view('templates/interior', $template_data);
	}
	
	/**
	 * Work
	 */
	public function work()
	{
		$template_data['hero_image_xl'] = 'work-XL';
		$template_data['hero_image'] = 'work-car';
		$template_data['hero_image_alt'] = 'Butano State Park, California';
		$template_data['title'] = 'Work';
		$template_data['subtitle'] = 'Software Engineering';
		$template_data['content'] = $this->load->view('work', NULL, TRUE);
		$this->load->view('templates/interior', $template_data);
	}
	
	/**
	 * Contact
	 */
	public function contact()
	{
		$template_data['content'] = $this->load->view('contact', NULL, TRUE);
		$this->load->view('templates/interior', $template_data);
	}
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */