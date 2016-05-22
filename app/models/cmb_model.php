<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cmb_model extends MY_Model{
    
    private $table_province = 'province';
    private $table_district = 'district';
    private $table_ward = 'ward';
    
    public function get_list_province(){
        $this->db->select('*');
        $this->db->from($this->table_province);
        $this->db->order_by('province_name', 'asc');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query;
        }  else {
            return false;
        }
    }
    
    public function get_list_district($province_id = null){
        $this->db->select('*');
        $this->db->from($this->table_district);
        $this->db->where('province_id', $province_id);
        $this->db->order_by('district_name', 'asc');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query;
        }  else {
            return false;
        }
    }
    
    public function get_list_ward($district_id = null){
        $this->db->select('*');
        $this->db->from($this->table_ward);
        $this->db->where('district_id', $district_id);
        $this->db->order_by('ward_name', 'asc');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query;
        }  else {
            return false;
        }
    }
    
}