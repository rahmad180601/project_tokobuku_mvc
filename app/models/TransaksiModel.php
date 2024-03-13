<?php
class TransaksiModel {
     // private $table = 'transaksi';
     private $db;
     
     public function __construct() {
          $this->db = new Database;
     }

     public function getAllTransaksi() { 
          $this->db->query("SELECT transaksi.*, produk.*, pelanggan.* 
               FROM transaksi 
               INNER JOIN produk ON transaksi.id_produk = produk.id_produk 
               INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan");
          return $this->db->resultAll();
     }

     public function getAllPelanggan() {
          $this->db->query("SELECT * FROM pelanggan");
          return $this->db->resultAll();
     }

     public function getAllProduk() {
          $this->db->query("SELECT * FROM produk");
          return $this->db->resultAll();
     }
    
     public function getTransaksiById($id) {
          $this->db->query("SELECT transaksi.*, produk.*, pelanggan.* 
               FROM transaksi 
               INNER JOIN produk ON transaksi.id_produk = produk.id_produk 
               INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan
               WHERE transaksi.id_transaksi = :id");
          $this->db->bind('id', $id);
          return $this->db->resultSingle();
     }

     public function getProdukById($id) {
          $this->db->query("SELECT * FROM produk WHERE id_produk = :id");
          $this->db->bind('id', $id);
          return $this->db->resultSingle();
     }

     public function buatTransaksi ($data, $total) {
          $query = "INSERT INTO transaksi (tanggal_transaksi, id_pelanggan, id_produk, jumlah, total) VALUES (:tanggal_transaksi, :id_pelanggan, :id_produk, :jumlah, :total)";
          $this->db->query($query);
          $this->db->bind('tanggal_transaksi', $data['tanggal_transaksi']);
          $this->db->bind('id_pelanggan', $data['id_pelanggan']);
          $this->db->bind('id_produk', $data['id_produk']);
          $this->db->bind('jumlah', $data['jumlah']);
          $this->db->bind('total', $total);
          $this->db->execute();
          return $this->db->rowCount();
     }

     public function hapusTransaksi ($id) {
          $query = "DELETE FROM transaksi WHERE id_transaksi = :id";
          $this->db->query($query);
          $this->db->bind('id', $id);

          $this->db->execute();

          return $this->db->rowCount();
     }

     public function ubahTransaksi ($data, $total) {
          $query = "UPDATE transaksi SET 
               tanggal_transaksi = :tanggal_transaksi, 
               id_pelanggan = :id_pelanggan, 
               id_produk = :id_produk, 
               jumlah = :jumlah, 
               total = :total 
               WHERE id_transaksi = :id_transaksi";
          $this->db->query($query);
          $this->db->bind('tanggal_transaksi', $data['tanggal_transaksi']);
          $this->db->bind('id_pelanggan', $data['id_pelanggan']);
          $this->db->bind('id_produk', $data['id_produk']);
          $this->db->bind('jumlah', $data['jumlah']);
          $this->db->bind('total', $total);
          $this->db->bind('id_transaksi', $data['id_transaksi']);
          $this->db->execute();
          return $this->db->rowCount();
     }
}