<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {

    public function index()
    {
        $this->vars['content']  = 'public/home';
        $this->load->view('tmp/index', $this->vars);
    }

}

/* End of file Home.php */
