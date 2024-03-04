<?php

class Home extends Controller { 

    public function index() {
       $data['judul'] = "Home";
       $data['nama'] = $this->model('UserModel')->getUser();
       $this->view('templates/header', $data);
       $this->view('templates/footer');
       $this->view('home/index',$data);
    }

 }