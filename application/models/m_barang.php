<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_Barang extends CI_Model {

    // Fungsi untuk menghitung jumlah barang dan stok
    public function jumlahBarang() {
        $this->db->select('count(namaBarang) as jumBarang, sum(stok) as jumStok');
        $this->db->from('barang');
        $query = $this->db->get();
        return $query;
    }
}
?>
