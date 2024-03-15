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
        
        $id_produk = $_POST['id_produk'];
        $jumlah = $_POST['jumlah'];

        if ($this->model('TransaksiModel')->cekStok($id_produk, $jumlah)) {
            $stok_jual = $data['produk']['stok_jual'] - $_POST['jumlah'];
            $total = $data['produk']['harga_satuan'] * $_POST['jumlah'];

            if($this->model('TransaksiModel')->buatTransaksi($_POST, $total, $stok_jual) > 0) {
                Flasher::setFlash('Data', 'berhasil ditambahkan', 'success');
                header('Location: ' . BASE_URL . '/transaksi');
                exit;
            } 
            else {
                Flasher::setFlash('Data', 'gagal ditambahkan', 'danger');   
                header('Location: ' . BASE_URL . '/transaksi');
                exit;
            }
        } 
        else {
            Flasher::setFlash('Stok', 'tidak cukup', 'danger');   
            header('Location: ' . BASE_URL . '/transaksi/tambah');
            exit;

            // echo $id_produk;
            // echo $jumlah;
        }

        
    }

    public function hapus($id) {
        $data['transaksi'] = $this->model("TransaksiModel")->getTransaksiById($id);
        $data['produk'] = $this->model("TransaksiModel")->getProdukById($data['transaksi']['id_produk']);

        $id_produk = $data['transaksi']['id_produk'];
        $stok_baru = $data['transaksi']['jumlah'] + $data['produk']['stok_jual'];

        // echo $id_produk;
        // echo "<br>";
        // echo $stok_baru;

        if($this->model('TransaksiModel')->hapusTransaksi($id, $id_produk, $stok_baru) > 0) {
            Flasher::setFlash('Data', 'berhasil dihapus', 'success');
            header('Location: ' . BASE_URL . '/transaksi');
            exit;
        }
        else {
            Flasher::setFlash('Data', 'gagal dihapus', 'danger');   
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
        $data['transaksi'] = $this->model("TransaksiModel")->getTransaksiById($_POST['id_transaksi']);
        $data['produk'] = $this->model("TransaksiModel")->getProdukById($_POST['id_produk']);

        $id_produk = $_POST['id_produk'];
        $jumlah_baru = $_POST['jumlah'];
        $jumlah_lama = $data['transaksi']['jumlah'];
        $stok_jual = $data['produk']['stok_jual'];

        if ($this->model('TransaksiModel')->cekStok($id_produk, $jumlah_baru)) {

            $perubahan_stok = $jumlah_baru - $jumlah_lama;
            $stok_akhir = $stok_jual - $perubahan_stok;
            
            $total = $data['produk']['harga_satuan'] * $_POST['jumlah'];

            if($this->model('TransaksiModel')->ubahTransaksi($_POST, $total, $stok_akhir) > 0) {
                Flasher::setFlash('Data', 'berhasil ditambahkan', 'success');
                header('Location: ' . BASE_URL . '/transaksi');
                exit;
            } 
            else {
                Flasher::setFlash('Data', 'gagal ditambahkan', 'danger');   
                header('Location: ' . BASE_URL . '/transaksi');
                exit;
            }
        } 
        else {
            Flasher::setFlash('Stok', 'tidak cukup', 'danger');   
            header('Location: ' . BASE_URL . '/transaksi/edit' . '/' . $_POST['id_transaksi']);
            exit;
        }

        // $total = $data['produk']['harga_satuan'] * $_POST['jumlah'];
        
        // if($this->model('TransaksiModel')->ubahTransaksi($_POST, $total) > 0) {
        //     Flasher::setFlash('Data', 'berhasil diubah', 'success');
        //     header('Location: ' . BASE_URL . '/transaksi');
        //     exit;
        // } else {
        //     Flasher::setFlash('Data', 'gagal diubah', 'danger');
        //     header('Location: ' . BASE_URL . '/transaksi');
        //     exit;
        // }
    }
}