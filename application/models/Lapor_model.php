<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor_model extends CI_Model
{
    public function save($nik,$deskripsi)
    {
      /*
      $data = array(
      'title' => 'My title',
      'name'  => 'My Name',
      'date'  => 'My date'
      );

      $sql = $this->db->set($data)->get_compiled_insert('mytable');
      echo $sql;


      */
      $hsl=$this->db->query("INSERT INTO keluhan (nik,deskripsi) VALUES ('$nik','$deskripsi')");
      return $hsl;
    }
}
