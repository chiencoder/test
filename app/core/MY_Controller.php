<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function check_login() {
        $user_session = $this->session->userdata('logged_in');
        //echo var_dump($user_session);
        //die();
        if ($user_session == FALSE) {
            redirect(base_url());
        }
    }

}
