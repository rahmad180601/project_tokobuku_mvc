<?php
class Pelanggan extends Controller
{

    public function index()
    {
        $data["judul"] = "Pelanggan";
        $data['pelanggan'] = $this->model("PelangganModel")->getAllPelanggan();
        $this->view("templates/header", $data);
        $this->view("pelanggan/index", $data);
    }

    public function profile($nama = "Linux", $pekerjaan = "Devs")
    {
        $data["judul"] = "Pelanggan";
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $this->view("templates/header", $data);
        $this->view("pelanggan/profile", $data);
        $this->view("templates/footer");
    }

    public function tambah()
    {
        if ($this->model('PelangganModel')->tambahpelanggan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/pelanggan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/pelanggan');
            exit;
        }
    }

    public function delete($id)
    {
        $pelangganModel = $this->model('PelangganModel');
        $pelangganModel->deletePelanggan($id);
        Flasher::setFlash('berhasil', 'didelete', 'success');
        header('Location: ' . BASE_URL . '/pelanggan');
    }

    public function edit() {
        $pelangganModel = $this->model('PelangganModel');
        $data = [
            'id_pelanggan' => $_POST['id_pelanggan'],
            'nama_pelanggan' => $_POST['nama_pelanggan'],
            'alamat' => $_POST['alamat'],
            'telepon' => $_POST['telepon']
        ];
        $pelangganModel->editPelanggan($data);
        Flasher::setFlash('berhasil', 'diupdate', 'success');
        header('Location: ' . BASE_URL . '/pelanggan');
    }
    
}
