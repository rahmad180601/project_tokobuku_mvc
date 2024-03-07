<?php

class ProductModel
{
  private $table = 'product';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllProduct()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultAll();
  }

  public function getProductById($id_produk)
  {
    $this->db->query("SELECT * FROM " . $this->table . ' WHERE id_produk=:id_produk');
    $this->db->bind('id_produk', $id_produk);
    return $this->db->resultSingle();
  }

  public function createNewProduct($data)
  {
    if (!is_numeric($data['harga_satuan']) || !is_numeric($data['stok_jual']) || !is_numeric($data['stok_pinjam'])) {
      return "Harga satuan, stok jual, dan stok pinjam harus berupa angka.";
    }
    $query = "INSERT INTO product (id_produk, nama, harga_satuan, stok_jual, stok_pinjam) VALUES (:id_produk, :nama, :harga_satuan, :stok_jual, :stok_pinjam)";
    $this->db->query($query);
    $this->db->bind('id_produk', $data['id_produk']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('harga_satuan', $data['harga_satuan']);
    $this->db->bind('stok_jual', $data['stok_jual']);
    $this->db->bind('stok_pinjam', $data['stok_pinjam']);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
