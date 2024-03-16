<?php

class Login extends Controller { 

    public function index() {
       $data['judul'] = "Login";
       $this->view('auth/index',$data);
    }

    public function login_user()
    {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $userModel = $this->model('UserModel');
        $user = $userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'nama' => $user['nama'],
                'email' => $user['email'],
                'roles' => $user['roles']
            ];
            header('Location: ' . BASE_URL . '/home');
        } else {
            Flasher::setFlash('Login Gagal!!', 'Silahkan Periksa Kembali Email Dan Password Anda', 'danger');   
            $_SESSION['error'] = 'Email atau password salah';
            header('Location: ' . BASE_URL );
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();

        header('Location: ' . BASE_URL);
        exit;
    }

 }

 ?>