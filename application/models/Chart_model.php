<?php
class Chart_model extends CI_Model{
    public function GetPie(){

      $query=$this->db->query("SELECT nama, count(no_kandidat) as jumlah FROM hasil_voting h left JOIN kandidat k ON h.no_kandidat = k.no_urut GROUP BY h.no_kandidat order by k.nama asc");
      if($query->num_rows() > 0){
          foreach($query->result() as $data){
              $hasil[] = $data;
          }
          return $hasil;
      }
    }
}
?>
