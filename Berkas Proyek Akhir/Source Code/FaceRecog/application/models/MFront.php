<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MFront extends CI_Model{
  function __construct(){
    parent:: __construct();
    $this->load->database();
  }
  
  function whatsTheStatus(){
    $this->db->SELECT('*');
    $this->db->FROM('status');
    $result = $this->db->get()->row();
    return $result;
  }

  function ratingThisYear(){
    $condition = array(
      'year' => $this->MFront->whatsTheStatus()->year,
      'review' => 2
    );
    $this->db->select('*');
    $this->db->join('evaluation', 'evaluation.userid = institution.userid');
    $this->db->join('province', 'institution.institutionprovince = province.provinceid');
    $this->db->where($condition);
    $this->db->order_by('evaluation.total', 'desc');
    $query = $this->db->get('institution');
    return $query->result();
  }

  function newsList(){
    $this->db->select('*');
    $this->db->order_by('news.newsid', 'desc');
    $query = $this->db->get('news');
    return $query->result();
  }

  }
?>
