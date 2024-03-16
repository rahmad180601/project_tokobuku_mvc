<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $data['judul']; ?></h1>
        </div>

        <div class="section-body">
        <?php Alert::alert(); ?>
            <div class="row">
                <!-- Area Chart -->
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h4>Daftar Peminjaman</h4>
                            <div class="card-header-action">
                                <a href="<?= BASE_URL; ?>/peminjaman/tambah" class="btn btn-primary">Tambah Peminjaman</a>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="col-sm-12">
                                    <table class="table table-bordered" id="userTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Produk</th>
                                            <th>Pelanggan</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($data['peminjaman'] as $peminjaman) : ?>
                                            <tr>
                                            <td><?= $no++ ?></td>
                                                <!-- <td><?= $peminjaman['id_peminjaman']; ?></td> -->
                                                <td><?= $peminjaman['nama_produk']; ?></td>
                                                <td><?= $peminjaman['nama_pelanggan']; ?></td>
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
                </div>
            </div>
    </section>
</div>