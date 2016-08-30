<?php
class Kategori extends CI_Controller {
function add() {
$this->load->view(‘tambah_kategori’);
}
function save() {
if($this->input->post('submit') ) {
$this->kategori_m->insert();
redirect ('kategori/add');
}
}


}
?>