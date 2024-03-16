<?php

class Home extends Controller { 

    public function index() {
      $data['judul'] = "Home";
      if (isset($_SESSION['user'])) {
          $data['user_name'] = $_SESSION['user']['nama'];
      }
      $data['products'] = $this->model("ProductModel")->getAllProduct();
      $data['pelanggan'] = $this->model("PelangganModel")->getAllPelanggan();
      $data['transaksi'] = $this->model("TransaksiModel")->getTotalTransaksi();
      $this->view('templates/header', $data);
      $this->view('home/index', $data);
      $this->view('templates/footer');
    }

 }

 ?>