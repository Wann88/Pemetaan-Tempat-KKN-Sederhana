<?php

class M_desa extends CI_Model{
    public function get_data(){
        $this->koneksi->select('*');
        $this->koneksi->from('tb_desa');
        return $this->koneksi->get()->result();
    }
}

?>