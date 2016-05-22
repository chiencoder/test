<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    var $data = array();

    public function __construct() {
        parent::__construct();
        
        //$this->show_list_province();
        //$this->show_list_district(1);
        //$this->show_list_ward(1);
        //var_dump($this->data['provinces']);
    }

    public function index() {
        $this->load->view('app/home', $this->data);
    }

}
