<?php

class PeminjamanModel
{
    private $table = 'peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // public function getAllPeminjaman()
    // {
    //     $this->db->query("SELECT * FROM " . $this->table);
    //     return $this->db->resultAll();
    // }

    public function getAllPeminjaman() { 
        $this->db->query("SELECT peminjaman.*, product.*, pelanggan.* 
             FROM peminjaman 
             INNER JOIN product ON peminjaman.id_produk = product.id_produk 
             INNER JOIN pelanggan ON peminjaman.id_pelanggan = pelanggan.id_pelanggan");
        return $this->db->resultAll();
   }

    public function getAllPelanggan() {
        $this->db->query("SELECT * FROM pelanggan");
        return $this->db->resultAll();
    }

    public function getAllProduk() {
        $this->db->query("SELECT * FROM product");
        return $this->db->resultAll();
    }

    public function getPeminjamanById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id_peminjaman=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function getTotalPeminjaman() { 
        $this->db->query("SELECT SUM(peminjaman.jumlah) as jumlah_sum 
                           FROM peminjaman ");
        $result = $this->db->resultSingle();
        return $result ? $result['jumlah_sum'] : 0;
    }

    
    public function getTotalPeminjamanPerBulan() {
        $this->db->query("SELECT DATE_FORMAT(tanggal_pinjam, '%Y-%m') as month, SUM(jumlah) as jumlah_pinjam
                           FROM peminjaman
                           GROUP BY month
                           ORDER BY month");
        return $this->db->resultAll();
    }

    public function getProdukById($id) {
        $this->db->query("SELECT * FROM product WHERE id_produk = :id");
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
