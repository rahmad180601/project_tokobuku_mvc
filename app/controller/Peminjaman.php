<?php

class Peminjaman extends Controller
{
    public function index()
    {
        $data['judul'] = "Peminjaman";
        $data['peminjaman'] = $this->model("PeminjamanModel")->getAllPeminjaman();
        $this->view('templates/header', $data);
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = "Form Tambah Data";
        $data['pelanggan'] = $this->model("PeminjamanModel")->getAllPelanggan();
        $data['produk'] = $this->model("PeminjamanModel")->getAllProduk();
        $this->view('templates/header', $data);
        $this->view('peminjaman/tambah', $data);
        $this->view('templates/footer');
    }

    public function tambahPeminjaman()
    {
        try {
            $result = $this->model('PeminjamanModel')->addPeminjaman($_POST);

            if (!$result) {
                Alert::setAlert('Tidak dapat menambahkan data.', 'danger');
                header('Location: ' . BASE_URL . '/peminjaman/tambah');
                exit;
            }

            Alert::setAlert('Data berhasil ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/peminjaman');
            exit;
        } catch (PDOException $e) {
            Alert::setAlert('Tidak dapat menambahkan data. Error: ' . $e->getMessage(), 'danger');
            header('Location: ' . BASE_URL . '/peminjaman/tambah');
            exit;
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Form Edit Data";
        $data['peminjaman'] = $this->model('PeminjamanModel')->getPeminjamanById($id);
        $data['pelanggan'] = $this->model("PeminjamanModel")->getAllPelanggan();
        $data['produk'] = $this->model("PeminjamanModel")->getAllProduk();
        $this->view('templates/header', $data);
        $this->view('peminjaman/edit', $data);
        $this->view('templates/footer');
    }

    public function updatePeminjaman()
    {
        try {
            $result = $this->model('PeminjamanModel')->updatePeminjaman($_POST);

            if (!$result) {
                Alert::setAlert('Tidak dapat memperbarui data.', 'danger');
                header('Location: ' . BASE_URL . '/peminjaman/edit/' . $_POST['id_peminjaman']);
                exit;
            }

            Alert::setAlert('Data berhasil diperbarui', 'success');
            header('Location: ' . BASE_URL . '/peminjaman');
            exit;
        } catch (PDOException $e) {
            Alert::setAlert('Tidak dapat memperbarui data. Error: ' . $e->getMessage(), 'danger');
            header('Location: ' . BASE_URL . '/peminjaman/edit/' . $_POST['id_peminjaman']);
            exit;
        }
    }

    public function delete($id)
    {
        try {
            $result = $this->model('PeminjamanModel')->deletePeminjaman($id);

            if (!$result) {
                Alert::setAlert('Tidak dapat menghapus data.', 'danger');
                header('Location: ' . BASE_URL . '/peminjaman');
                exit;
            }

            Alert::setAlert('Data berhasil dihapus', 'success');
            header('Location: ' . BASE_URL . '/peminjaman');
            exit;
        } catch (PDOException $e) {
            Alert::setAlert('Tidak dapat menghapus data. Error: ' . $e->getMessage(), 'danger');
            header('Location: ' . BASE_URL . '/peminjaman');
            exit;
        }
    }
}
