<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voting_model extends CI_Model
{
  public function filter($nik)
  {
    /*
    1. $hsl = $this->db->get('film');  => Produces: SELECT * FROM mytable

    2. $this->db->select('title, content, date');
       $query = $this->db->get('mytable');

       atau

       $this->db->select('title, content, date');
       $this->db->from('mytable');
       $query = $this->db->get();

       maka hasilnya => SELECT title, content, date FROM mytable

    3. $this->db->select('*');
       $this->db->from('blogs');
       $this->db->join('comments', 'comments.id = blogs.id');
       $query = $this->db->get();
       maka hasilnya => SELECT * FROM blogs JOIN comments ON comments.id = blogs.id

    4. $this->db->where('name', $name); => Produces: WHERE name = 'Joe'

       $this->db->where('name', $name);
       $this->db->where('title', $title);
       $this->db->where('status', $status);
       hasilnya => WHERE name = 'Joe' AND title = 'boss' AND status = 'active'

       $where = "name='Joe' AND status='boss' OR status='active'";
       $this->db->where($where);

    */
    return $this->db->query("SELECT * FROM `hasil_voting` WHERE `nik` LIKE $nik")->result_array();
  }

  public function save($nik,$no_urut)
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
    $hsl=$this->db->query("INSERT INTO hasil_voting (nik,no_kandidat) VALUES ($nik,$no_urut)");
    return $hsl;
  }
}
