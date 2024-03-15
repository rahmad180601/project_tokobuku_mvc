<?php
class TransaksiModel {
     private $table = 'transaksi';
     private $db;
     
     public function __construct() {
          $this->db = new Database;
     }

     public function getAllTransaksi() { 
          $this->db->query("SELECT transaksi.*, product.*, pelanggan.* 
               FROM transaksi 
               INNER JOIN product ON transaksi.id_produk = product.id_produk 
               INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan");
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
    
     public function getTransaksiById($id) {
          $this->db->query("SELECT transaksi.*, product.*, pelanggan.* 
               FROM transaksi 
               INNER JOIN product ON transaksi.id_produk = product.id_produk 
               INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan
               WHERE transaksi.id_transaksi = :id");
          $this->db->bind('id', $id);
          
          return $this->db->resultSingle();
     }

     public function getProdukById($id) {
          $this->db->query("SELECT * FROM product WHERE id_produk = :id");
          $this->db->bind('id', $id);
          
          return $this->db->resultSingle();
     }

     public function cekStok($id_produk, $jumlah) {
          $this->db->query("SELECT stok_jual FROM product WHERE id_produk = :id");
          $this->db->bind('id', $id_produk);
          $stok = $this->db->fetchColumn();

          return $stok >= $jumlah;
     }

     public function buatTransaksi ($data, $total, $stok_jual) {
          $query2 = "UPDATE product SET stok_jual = :stok_jual WHERE id_produk = :id_produk";
          $this->db->query($query2);
          $this->db->bind('stok_jual', $stok_jual);
          $this->db->bind('id_produk', $data['id_produk']);
          $this->db->execute();

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

     public function hapusTransaksi ($id, $id_produk, $stok_baru) {
          $query2 = "UPDATE product SET stok_jual = :stok_jual WHERE id_produk = :id_produk";
          $this->db->query($query2);
          $this->db->bind('stok_jual', $stok_baru);
          $this->db->bind('id_produk', $id_produk);
          $this->db->execute();

          $query = "DELETE FROM transaksi WHERE id_transaksi = :id";
          $this->db->query($query);
          $this->db->bind('id', $id);
          $this->db->execute();

          return $this->db->rowCount();
     }

     public function ubahTransaksi ($data, $total, $stok_akhir) {
          $query2 = "UPDATE product SET stok_jual = :stok_jual WHERE id_produk = :id_produk";
          $this->db->query($query2);
          $this->db->bind('stok_jual', $stok_akhir);
          $this->db->bind('id_produk', $data['id_produk']);
          $this->db->execute();
          
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