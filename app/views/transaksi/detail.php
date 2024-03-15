<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman <?= $data['judul'] ?></h1>
        </div>

        <div class="section-body">
            <!-- <h2 class="section-title">Table</h2>
            <p class="section-lead">Example of some Bootstrap table components.</p> -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Detail Transaksi</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Tanggal transaksi: <?= $data['transaksi']['tanggal_transaksi'] ?></li>
                                <li class="list-group-item">Nama Pelanggan: <?= $data['transaksi']['nama_pelanggan'] ?></li>
                                <li class="list-group-item">Nama Produk: <?= $data['transaksi']['nama_produk'] ?></li>
                                <li class="list-group-item">Jumlah: <?= $data['transaksi']['jumlah'] ?></li>
                                <li class="list-group-item">Total: <?= $data['transaksi']['total'] ?></li>
                            </ul>
                            <a href="<?= BASE_URL ?>/transaksi" class="btn btn-primary mt-4 float-right">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
