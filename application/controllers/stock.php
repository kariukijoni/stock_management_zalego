<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Stock extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->load->model('stock_model');
    }

    //chaeck whether logged in user
    public function index() {
        $this->isLoggedIn();
        $this->global['pageTitle'] = 'Stock Management System : Stock';
        $data['stock_list'] = $this->stock_model->stock_listing();

        $this->loadViews("stock_listing_view", $this->global, $data, NULL);
        ;
    }

    public function add_new_item() {
        
    }

    public function edit_stock() {
        
    }

}
