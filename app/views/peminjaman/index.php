<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap4.css">
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman <?= $data['judul']; ?></h1>
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
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Produk</th>
                                                <th>Pelanggan</th>
                                                <th>Tanggal Pinjam</th>
                                                <th>Tanggal Kembali</th>
                                                <th>Jumlah</th>
                                                <th>Action</th>
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
                                                        <a href="<?= BASE_URL; ?>/peminjaman/edit/<?= $peminjaman['id_peminjaman']; ?>" class="btn btn-primary btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                                                        <a href="<?= BASE_URL; ?>/peminjaman/delete/<?= $peminjaman['id_peminjaman']; ?>" class="btn btn-danger btn-action delete-btn" onclick="return confirm('Data akan dihapus. Yakin?')"><i class="fas fa-trash"></i></a>
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

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= BASE_URL; ?>/assets/js/stisla.js"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="<?= BASE_URL; ?>/assets/js/scripts.js"></script>
<script src="<?= BASE_URL; ?>/assets/js/custom.js"></script>

<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap4.js"></script>

<script>
    $(document).ready(function() {

        new DataTable('#example');

    });
</script>