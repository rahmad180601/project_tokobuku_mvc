<?php

class Home extends Controller { 

    public function index() {
      $data['judul'] = "Home";
      if (isset($_SESSION['user'])) {
          $data['user_name'] = $_SESSION['user']['nama'];
      }
      $this->view('templates/header', $data);
      $this->view('home/index', $data);
      $this->view('templates/footer');
    }

 }

 ?>