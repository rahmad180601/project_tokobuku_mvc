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
  public function editForm($id_produk = null)
  {
    $data['judul'] = "Form Edit Data";
    $data['product'] = $this->model('ProductModel')->getProductById($id_produk);
    $this->view('templates/header', $data);
    $this->view('product/edit_form', $data);
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

  public function deleteProduct($id)
  {
    try {
      $result = $this->model('ProductModel')->deleteProductById($id);

      if (!$result) {
        Alert::setAlert('Tidak dapat menghapus data.', 'danger');
        header('Location: ' . BASE_URL . '/product');
        exit;
      }

      Alert::setAlert('Data berhasil dihapus', 'success');
      header('Location: ' . BASE_URL . '/product');
      exit;
    } catch (PDOException $e) {
      Alert::setAlert('Tidak dapat menghapus data. Error: ' . $e->getMessage(), 'danger');
      header('Location: ' . BASE_URL . '/product');
      exit;
    }
  }

  public function updateProduct()
  {
    try {
      if (!isset($_POST['id_produk'])) {
        Alert::setAlert('ID produk tidak ditemukan.', 'danger');
        header('Location: ' . BASE_URL . '/product');
        exit;
      }
      $result = $this->model('ProductModel')->updateProduct($_POST);
      if (is_string($result)) {
        Alert::setAlert('Tidak dapat menambahkan data. Error: ' . $result, 'danger');
        header('Location: ' . BASE_URL . '/product/editForm/' . $_POST['id_produk']);
        exit;
      }
      if ($result) {
        Alert::setAlert('Data berhasil diperbarui', 'success');
        header('Location: ' . BASE_URL . '/product');
        exit;
      } else {
        Alert::setAlert('Tidak ada perubahan data.', 'warning');
        header('Location: ' . BASE_URL . '/product');
        exit;
      }
    } catch (PDOException $e) {
      Alert::setAlert('Tidak dapat memperbarui data. Error: ' . $e->getMessage(), 'danger');
      header('Location: ' . BASE_URL . '/product/editForm/' . $_POST['id_produk']);
      exit;
    }
  }
}
