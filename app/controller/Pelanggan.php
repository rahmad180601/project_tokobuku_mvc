<?php
<<<<<<< Updated upstream
require_once '../app/config/config.php';
=======
>>>>>>> Stashed changes
class Pelanggan extends Controller {
    private $model;

    public function __construct() {
        $this->model = new PelangganModel;
    }

    public function index() {
<<<<<<< Updated upstream
        $data['judul'] = "Pelanggan";
        $data['pelanggan'] = $this->model->getAllPelanggan();
        $this->view('templates/header', $data);
        $this->view('pelanggan/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id_pelanggan) {
        $data['judul'] = "Detail Pelanggan";
        $data['pelanggan'] = $this->model->getPelangganById($id_pelanggan);
        $this->view('templates/header', $data);
        $this->view('pelanggan/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        if( $this->model->tambahPelanggan($_POST) > 0 ) {
=======
        $data["judul"] = "Pelanggan";
        $data['pelanggan'] = $this->model("PelangganModel")->getAllPelanggan();
        $this->view("templates/header", $data);
        $this->view("pelanggan/index", $data);
    }

    public function tambah() {
        if($this->model('PelangganModel')->tambahpelanggan($_POST) > 0) {
>>>>>>> Stashed changes
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/pelanggan');
            exit;
         } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');   
            header('Location: ' . BASE_URL . '/pelanggan');
            exit;
          }
     }

     public function delete($id) {
        $pelangganModel = $this->model('PelangganModel');
        $pelangganModel->deletePelanggan($id);
        Flasher::setFlash('berhasil', 'didelete', 'success');
        header('Location: ' . BASE_URL . '/pelanggan');
    }

<<<<<<< Updated upstream
    public function ubah() {
        if( $this->model->updatePelanggan($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/pelanggan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/pelanggan');
            exit;
        }
    }

    public function hapus($id_pelanggan) {
        if( $this->model->deletePelanggan($id_pelanggan) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/pelanggan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/pelanggan');
            exit;
=======
    public function edit() {
        $pelangganModel = $this->model('PelangganModel');
        $data = [
            'id_pelanggan' => $_POST['id_pelanggan'],
            'nama_pelanggan' => $_POST['nama_pelanggan'],
            'alamat' => $_POST['alamat'],
            'telepon' => $_POST['telepon']
        ];
        if ($pelangganModel->editPelanggan($data)) {
            Flasher::setFlash('berhasil', 'diupdate', 'success');
        } else {
            Flasher::setFlash('gagal', 'diupdate', 'danger');
>>>>>>> Stashed changes
        }
        header('Location: ' . BASE_URL . '/pelanggan');
    }
    
    
}
?>
