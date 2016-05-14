<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Maps extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $this->load->library('googlemaps');
        
        $config = array(
            'center' => 'Hồ Chí Minh',
            'zoom' => 'auto'
        );
        $this->googlemaps->initialize($config);

        $marker = array(
            'position' => '368 dinh bo linh, binh thanh'
        );
        $this->googlemaps->add_marker($marker);
        
        $marker = array(
            'position' => '480 dinh bo linh, binh thanh'
        );
        $this->googlemaps->add_marker($marker);
        
        $data['map'] = $this->googlemaps->create_map();

        $this->load->view('maps', $data);
    }

}
