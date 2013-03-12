<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Documentation: http://net.tutsplus.com/tutorials/php/working-with-restful-services-in-codeigniter-2/
require(APPPATH . 'libraries/REST_Controller.php');

class Api extends REST_Controller
{
	function albums_get()  
    {  
        // respond with information about photo albums  
    }  
}

/* End of file api.php */
/* Location: ./application/controllers/api.php */