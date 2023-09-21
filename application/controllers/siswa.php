<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Siswa extends CI_Controller { 
 
    public function __construct() 
    { 
        parent::__construct(); 
        $this->load->database(); 
    } 
 
    public function index() 
    { 
        $data['students'] = $this->db->get('siswa')->result_array(); 
        $this->load->view('siswa', $data); 
    } 
}