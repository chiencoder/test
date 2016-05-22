<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    var $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('cmb_model');
        $this->show_list_province();
    }

    public function show_list_province() {
        $provinces = $this->cmb_model->get_list_province();
        //var_dump($provinces);
        if ($provinces) {
            $this->data['provinces'] = $provinces->result();
        } else {
            show_404();
        }
        //var_dump($this->data['provinces']);
    }

    public function show_list_district($province_id = null) {
        $districts = $this->cmb_model->get_list_district($province_id);
        //var_dump($districts);
        if ($districts) {
            //$this->data['districts'] = $districts->result();
            echo json_encode($districts->result());
        } else {
            show_404();
        }
        //var_dump($this->data['districts']);
    }

    public function show_list_ward($district_id = null) {
        $wards = $this->cmb_model->get_list_ward($district_id);
        //var_dump($wards);
        if ($wards) {
            //$this->data['wards'] = $wards->result();
            echo json_encode($wards->result());
        } else {
            show_404();
        }
        //var_dump($this->data['wards']);
    }

}
