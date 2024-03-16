<?php
class PelangganModel {
    private $table = 'pelanggan';
    private $db;
    
    public function __construct() {
         $this->db = new Database;
    }

    public function getAllPelanggan() { 
         $this->db->query("SELECT * FROM " . $this->table);
         return $this->db->resultAll();
    }
    
    
    public function tambahpelanggan ($data) {
        $query = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, alamat, telepon) VALUES (:id_pelanggan, :nama_pelanggan, :alamat, :telepon)";
            $this->db->query($query);
            $this->db->bind(':id_pelanggan', $data['id_pelanggan']);
            $this->db->bind(':nama_pelanggan', $data['nama_pelanggan']);
            $this->db->bind(':alamat', $data['alamat']);
            $this->db->bind(':telepon', $data['telepon']);
            $this->db->execute();
            return $this->db->rowCount();
    }

    public function deletePelanggan($id) {
        $query = "DELETE FROM pelanggan WHERE id_pelanggan = :id_pelanggan";
        $this->db->query($query);
        $this->db->bind(':id_pelanggan', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function editPelanggan($data) {
        $query = "UPDATE pelanggan SET nama_pelanggan = :nama_pelanggan, alamat = :alamat, telepon = :telepon WHERE id_pelanggan = :id_pelanggan";
        $this->db->query($query);
        $this->db->bind(':nama_pelanggan', $data['nama_pelanggan']);
        $this->db->bind(':alamat', $data['alamat']);
        $this->db->bind(':telepon', $data['telepon']);
        $this->db->bind(':id_pelanggan', $data['id_pelanggan']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
?>
