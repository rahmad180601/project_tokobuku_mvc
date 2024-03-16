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

  public function deleteProductById($id_produk)
  {
    $this->db->query("DELETE FROM " . $this->table . ' WHERE id_produk=:id_produk');
    $this->db->bind('id_produk', $id_produk);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function createNewProduct($data)
  {
    if (!is_numeric($data['harga_satuan']) || !is_numeric($data['stok_jual']) || !is_numeric($data['stok_pinjam'])) {
      return "Harga satuan, stok jual, dan stok pinjam harus berupa angka.";
    }
    $query = "INSERT INTO product (id_produk, nama_produk, harga_satuan, stok_jual, stok_pinjam) VALUES (:id_produk, :nama_produk, :harga_satuan, :stok_jual, :stok_pinjam)";
    $this->db->query($query);
    $this->db->bind('id_produk', $data['id_produk']);
    $this->db->bind('nama_produk', $data['nama_produk']);
    $this->db->bind('harga_satuan', $data['harga_satuan']);
    $this->db->bind('stok_jual', $data['stok_jual']);
    $this->db->bind('stok_pinjam', $data['stok_pinjam']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function updateProduct($data)
  {
    if (!is_numeric($data['harga_satuan']) || !is_numeric($data['stok_jual']) || !is_numeric($data['stok_pinjam'])) {
      return "Harga satuan, stok jual, dan stok pinjam harus berupa angka.";
    }
    $query = "UPDATE product SET nama_produk=:nama_produk, harga_satuan=:harga_satuan, stok_jual=:stok_jual, stok_pinjam=:stok_pinjam WHERE id_produk=:id_produk";
    $this->db->query($query);
    $this->db->bind('id_produk', $data['id_produk']);
    $this->db->bind('nama_produk', $data['nama_produk']);
    $this->db->bind('harga_satuan', $data['harga_satuan']);
    $this->db->bind('stok_jual', $data['stok_jual']);
    $this->db->bind('stok_pinjam', $data['stok_pinjam']);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
