<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class stock_model extends CI_Model {

    public function stock_listing() {
        $this->db->select("*");
        $this->db->from("tbl_stock");
        $query=$this->db->get();
        return $query->result();
    }

}
