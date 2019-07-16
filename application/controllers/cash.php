<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cash extends CI_Controller {

    public function index()
    {
    	$this->load->view('side_bar');
        $this->load->view('cash');
    }

}