<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {
    public function index()

    {
        $this->load->view('welcome_massage');
    }
}

public function index()

{
    $this->load->model('customers_model');
    $data['customer'] = $this->customers_model->get-customers(3);
    $this->load->view('welcome_massage',$data);
}

?>