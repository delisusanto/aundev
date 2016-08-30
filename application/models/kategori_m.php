<?php
class Kategori_m extends CI_model{
function insert(){
$data_kategori = array ('nama_kategori' => $this->input -> post('nama_kategori'));
return $this->db->insert('kategori',$data_kategori);
}
}
?>