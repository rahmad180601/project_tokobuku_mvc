<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $data['judul']; ?></h1>
        </div>

        <div class="section-body card">
            <form class="needs-validation" novalidate action="<?= BASE_URL; ?>/peminjaman/updatePeminjaman" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_produk">ID Produk</label>
                        <input type="text" class="form-control" id="id_produk" name="id_produk" value="<?= $data['peminjaman']['id_produk']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="id_pelanggan">ID Pelanggan</label>
                        <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" value="<?= $data['peminjaman']['id_pelanggan']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pinjam">Tanggal Pinjam</label>
                        <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="<?= $data['peminjaman']['tanggal_pinjam']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kembali">Tanggal Kembali</label>
                        <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="<?= $data['peminjaman']['tanggal_kembali']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $data['peminjaman']['jumlah']; ?>" required>
                    </div>
                    <input type="hidden" name="id" value="<?= $data['peminjaman']['id_peminjaman']; ?>">
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>
