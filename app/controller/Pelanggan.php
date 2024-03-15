<?php
require_once '../app/config/config.php';
class Pelanggan extends Controller {
    private $model;

    public function __construct() {
        $this->model = new PelangganModel;
    }

    public function index() {
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
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/pelanggan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/pelanggan');
            exit;
        }
    }

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
        }
    }
}
?>
