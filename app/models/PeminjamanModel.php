<?php

class PeminjamanModel
{
    private $table = 'peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeminjaman()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }

    public function getPeminjamanById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id_peminjaman=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function addPeminjaman($data)
    {
        $query = "INSERT INTO " . $this->table . " (id_produk, id_pelanggan, tanggal_pinjam, tanggal_kembali, jumlah) VALUES (:id_produk, :id_pelanggan, :tanggal_pinjam, :tanggal_kembali, :jumlah)";
        $this->db->query($query);
        $this->db->bind('id_produk', $data['id_produk']);
        $this->db->bind('id_pelanggan', $data['id_pelanggan']);
        $this->db->bind('tanggal_pinjam', $data['tanggal_pinjam']);
        $this->db->bind('tanggal_kembali', $data['tanggal_kembali']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePeminjaman($data)
    {
        $query = "UPDATE " . $this->table . " SET id_produk=:id_produk, id_pelanggan=:id_pelanggan, tanggal_pinjam=:tanggal_pinjam, tanggal_kembali=:tanggal_kembali, jumlah=:jumlah WHERE id_peminjaman=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('id_produk', $data['id_produk']);
        $this->db->bind('id_pelanggan', $data['id_pelanggan']);
        $this->db->bind('tanggal_pinjam', $data['tanggal_pinjam']);
        $this->db->bind('tanggal_kembali', $data['tanggal_kembali']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deletePeminjaman($id)
    {
        $this->db->query("DELETE FROM " . $this->table . " WHERE id_peminjaman=:id");
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
