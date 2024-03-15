<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman <?= $data['judul'] ?></h1>
        </div>

        <div class="section-body">
            <!-- <h2 class="section-title">Table</h2>
            <p class="section-lead">Example of some Bootstrap table components.</p> -->

            <div class="row">
            <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Transaksi</h6>
                            <div>
                            <a href="<?= BASE_URL ?>/transaksi/tambah" class="btn btn-primary float-right">Tambah Transaksi</a>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="col-sm-12">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Nama Produk</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                        <?php $no = 1; ?>
                                        <?php foreach ($data['transaksi'] as $transaksi) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $transaksi['tanggal_transaksi']; ?></td>
                                            <td><?= $transaksi['nama_pelanggan']; ?></td>
                                            <td><?= $transaksi['nama_produk']; ?></td>
                                            <td><?= $transaksi['jumlah']; ?></td>
                                            <td><?= $transaksi['total']; ?></td>
                                            <td>
                                                <a href="<?= BASE_URL ?>/transaksi/detail/<?= $transaksi['id_transaksi'] ?>" class="btn btn-info">Detail</a>
                                                <a href="<?= BASE_URL ?>/transaksi/edit/<?= $transaksi['id_transaksi'] ?>" class="btn btn-warning">Edit</a>
                                                <a href="<?= BASE_URL ?>/transaksi/hapus/<?= $transaksi['id_transaksi'] ?>" class="btn btn-danger" 
                                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-6">
                                <h4>Tabel Transaksi</h4>
                            </div>
                            <div class="col-6">
                                <a href="<?= BASE_URL ?>/transaksi/tambah" class="btn btn-primary float-right">Tambah Transaksi</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="alert">
                                <?php Flasher::flash();?>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Nama Produk</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                    </tr>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data['transaksi'] as $transaksi) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $transaksi['tanggal_transaksi']; ?></td>
                                        <td><?= $transaksi['nama_pelanggan']; ?></td>
                                        <td><?= $transaksi['nama_produk']; ?></td>
                                        <td><?= $transaksi['jumlah']; ?></td>
                                        <td><?= $transaksi['total']; ?></td>
                                        <td>
                                            <a href="<?= BASE_URL ?>/transaksi/detail/<?= $transaksi['id_transaksi'] ?>" class="btn btn-info">Detail</a>
                                            <a href="<?= BASE_URL ?>/transaksi/edit/<?= $transaksi['id_transaksi'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?= BASE_URL ?>/transaksi/hapus/<?= $transaksi['id_transaksi'] ?>" class="btn btn-danger" 
                                                onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><i
                                                class="fas fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1 <span
                                                class="sr-only">(current)</span></a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</div>
