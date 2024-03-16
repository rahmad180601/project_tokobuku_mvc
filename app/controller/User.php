<?php
class User extends Controller {

    public function index() {
        $data["judul"] = "Petugas";
        $data['user'] = $this->model("UserModel")->getAllUser();
        $this->view("templates/header", $data);
        $this->view("user/index", $data);
        // $this->view("templates/footer");
    }

    public function profile($nama = "Linux", $pekerjaan = "Devs") {
        $data["judul"] = "User";
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $this->view("templates/header", $data);
        $this->view("user/profile", $data);
        $this->view("templates/footer");
    }

    public function tambah() {
        if($this->model('UserModel')->tambahpetugas($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/user');
            exit;
         } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');   
            header('Location: ' . BASE_URL . '/user');
            exit;
          }
     }

     public function delete($id) {
        $userModel = $this->model('UserModel');
        $userModel->deleteUser($id);
        Flasher::setFlash('berhasil', 'didelete', 'success');
        header('Location: ' . BASE_URL . '/user');
    }

    public function edit() {
        $userModel = $this->model('UserModel');
        $data = [
            'id' => $_POST['id'],
            'nama' => $_POST['nama'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'roles' => $_POST['roles']
        ];
        $userModel->editUser($data);
        Flasher::setFlash('berhasil', 'diupdate', 'success');
        header('Location: ' . BASE_URL . '/user');
    }
    
    
}

?>