<?php
class Product extends Controller
{

  public function index()
  {
    $data['judul'] = "Produk";
    $data['products'] = $this->model("ProductModel")->getAllProduct();
    $this->view('templates/header', $data);
    $this->view('product/index', $data);
    $this->view('templates/footer');
  }
  public function form()
  {
    $data['judul'] = "Form Tambah Data";
    $this->view('templates/header', $data);
    $this->view('product/form', $data);
    $this->view('templates/footer');
  }
  public function addProduct()
  {
    try {
      $result = $this->model('ProductModel')->createNewProduct($_POST);

      if (is_string($result)) {
        Alert::setAlert('Tidak dapat menambahkan data. Error: ' . $result, 'danger');
        header('Location: ' . BASE_URL . '/product/form');
        exit;
      }

      Alert::setAlert('Data berhasil ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/product');
      exit;
    } catch (PDOException $e) {
      Alert::setAlert('Tidak dapat menambahkan data. Error: ' . $e->getMessage(), 'danger');
      header('Location: ' . BASE_URL . '/product/form');
      exit;
    }
  }
}
