<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata_model extends CI_Model
{
  public function getAll()
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
    return $this->db->query("SELECT * from kandidat")->result_array();
  }
}
