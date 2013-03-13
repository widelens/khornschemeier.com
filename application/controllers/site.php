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
		$template_data['hero_image_xl'] = 'family-XL';
		$template_data['hero_image'] = 'family';
		$template_data['hero_image_alt'] = 'Kevin Hornschemeier, Jennifer Hornschemeier, Everett Hornschemeier';
		$template_data['title'] = 'Family';
		$template_data['subtitle'] = 'Kevin, Jennifer, Everett';
		$template_data['content'] = $this->load->view('family', NULL, TRUE);
		$this->load->view('templates/interior', $template_data);
	}
	
	/**
	 * Travel
	 */
	public function travel()
	{
		$template_data['hero_image_xl'] = 'travel-XL';
		$template_data['hero_image'] = 'travel';
		$template_data['hero_image_alt'] = '';
		$template_data['title'] = 'Travel';
		$template_data['subtitle'] = 'Seeing the World';
		$template_data['content'] = $this->load->view('travel', NULL, TRUE);
		$this->load->view('templates/interior', $template_data);
	}
	
	/**
	 * Photography
	 */
	public function photography()
	{
		$template_data['hero_image_xl'] = 'photography-XL';
		$template_data['hero_image'] = 'photography';
		$template_data['hero_image_alt'] = '';
		$template_data['title'] = 'Photography';
		$template_data['subtitle'] = 'Capturing Moments';
		$template_data['content'] = $this->load->view('photography', NULL, TRUE);
		$this->load->view('templates/interior', $template_data);
	}
	
	/**
	 * Work
	 */
	public function work()
	{
		$template_data['hero_image_xl'] = 'work-XL';
		$template_data['hero_image'] = 'work';
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
		$template_data['hero_image_xl'] = 'contact-XL';
		$template_data['hero_image'] = 'contact';
		$template_data['hero_image_alt'] = '';
		$template_data['title'] = 'Contact';
		$template_data['subtitle'] = "Let's talk";
		$template_data['js_includes'] = '<script type="text/javascript" src="http://platform.linkedin.com/in.js">0myij2plauey</script>';
		$template_data['content'] = $this->load->view('contact', NULL, TRUE);
		$this->load->view('templates/interior', $template_data);
	}
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */