<?php
class Transaksi extends Controller {

    public function index () {
        $data['judul'] = "Transaksi";
        $data['transaksi'] = $this->model("TransaksiModel")->getAllTransaksi();
        $this->view('templates/header', $data);
        $this->view('transaksi/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = "Detail Transaksi";
        $data['transaksi'] = $this->model("TransaksiModel")->getTransaksiById($id);
        $this->view('templates/header', $data);
        $this->view('transaksi/detail', $data);
        $this->view('templates/footer');  
    }

    public function tambah() {
        $data['judul'] = "Tambah Transaksi";
        $data['transaksi'] = $this->model("TransaksiModel")->getAllTransaksi();
        $data['pelanggan'] = $this->model("TransaksiModel")->getAllPelanggan();
        $data['produk'] = $this->model("TransaksiModel")->getAllProduk();
        $this->view('templates/header', $data);
        $this->view('transaksi/tambah', $data);
        $this->view('templates/footer');
    }

    public function buat() {
        $data['produk'] = $this->model("TransaksiModel")->getProdukById($_POST['id_produk']);
        
        $total = $data['produk']['harga_satuan'] * $_POST['jumlah'];

        if($this->model('TransaksiModel')->buatTransaksi($_POST, $total) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/transaksi');
            exit;
        } 
        else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');   
            header('Location: ' . BASE_URL . '/transaksi');
            exit;
        }
    }

    public function hapus($id) {
        if($this->model('TransaksiModel')->hapusTransaksi($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/transaksi');
            exit;
        } 
        else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');   
            header('Location: ' . BASE_URL . '/transaksi');
            exit;
        }
    }

    public function edit($id) {
        $data['judul'] = "Edit Transaksi";
        $data['transaksi'] = $this->model("TransaksiModel")->getTransaksiById($id);
        $data['pelanggan'] = $this->model("TransaksiModel")->getAllPelanggan();
        $data['produk'] = $this->model("TransaksiModel")->getAllProduk();
        $this->view('templates/header', $data);
        $this->view('transaksi/edit', $data);
        $this->view('templates/footer');
    }

    public function ubah() {
        $data['produk'] = $this->model("TransaksiModel")->getProdukById($_POST['id_produk']);
        
        $total = $data['produk']['harga_satuan'] * $_POST['jumlah'];
        
        if($this->model('TransaksiModel')->ubahTransaksi($_POST, $total) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/transaksi');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/transaksi');
            exit;
        }
    }
}