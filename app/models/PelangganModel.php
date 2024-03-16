<?php
class PelangganModel {
    private $table = 'pelanggan';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPelanggan() {
        $this->db->query('SELECT * FROM pelanggan');
        return $this->db->resultAll();
    }

    public function getPelangganById($id_pelanggan) {
        $this->db->query('SELECT * FROM pelanggan WHERE id_pelanggan=:id_pelanggan');
        $this->db->bind('id_pelanggan', $id_pelanggan);
        return $this->db->resultSingle();
    }

    public function tambahPelanggan($data) {
        $query = "INSERT INTO pelanggan (nama_pelanggan, alamat, telepon) VALUES(:nama_pelanggan, :alamat, :telepon)";
        $this->db->query($query);
        $this->db->bind('nama_pelanggan', $data['nama_pelanggan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePelanggan($data) {
        $query = "UPDATE pelanggan SET nama_pelanggan = :nama_pelanggan, alamat = :alamat, telepon = :telepon WHERE id_pelanggan = :id_pelanggan";
        $this->db->query($query);
        $this->db->bind('nama_pelanggan', $data['nama_pelanggan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('id_pelanggan', $data['id_pelanggan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deletePelanggan($id_pelanggan) {
        $query = "DELETE FROM pelanggan WHERE id_pelanggan = :id_pelanggan";
        $this->db->query($query);
        $this->db->bind('id_pelanggan', $id_pelanggan);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
?>
