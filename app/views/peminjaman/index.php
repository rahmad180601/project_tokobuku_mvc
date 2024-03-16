<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $data['judul']; ?></h1>
        </div>

        <div class="section-body">
            <?php Alert::alert(); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Peminjaman</h4>
                    <div class="card-header-action">
                        <a href="<?= BASE_URL; ?>/peminjaman/tambah" class="btn btn-primary">Tambah Peminjaman</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>ID Peminjaman</th>
                                    <th>ID Produk</th>
                                    <th>ID Pelanggan</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['peminjaman'] as $peminjaman) : ?>
                                    <tr>
                                        <td><?= $peminjaman['id_peminjaman']; ?></td>
                                        <td><?= $peminjaman['id_produk']; ?></td>
                                        <td><?= $peminjaman['id_pelanggan']; ?></td>
                                        <td><?= $peminjaman['tanggal_pinjam']; ?></td>
                                        <td><?= $peminjaman['tanggal_kembali']; ?></td>
                                        <td><?= $peminjaman['jumlah']; ?></td>
                                        <td>
                                            <a href="<?= BASE_URL; ?>/peminjaman/edit/<?= $peminjaman['id_peminjaman']; ?>" class="btn btn-primary btn-action mr-1">Edit</a>
                                            <a href="<?= BASE_URL; ?>/peminjaman/delete/<?= $peminjaman['id_peminjaman']; ?>" class="btn btn-danger btn-action delete-btn" onclick="return confirm('Data akan dihapus. Yakin?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
