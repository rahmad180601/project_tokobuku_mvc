<!-- detail.php -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman <?= $data['judul'] ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Table</h2>
            <p class="section-lead">Example of some Bootstrap table components.</p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Detail Pelanggan</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nama Pelanggan: <?= $data['pelanggan']['nama_pelanggan'] ?></li>
                                <li class="list-group-item">Alamat: <?= $data['pelanggan']['alamat'] ?></li>
                                <li class="list-group-item">No Telepon: <?= $data['pelanggan']['telepon'] ?></li>
                            </ul>
                            <a href="<?= BASE_URL ?>/pelanggan" class="btn btn-primary mt-4 float-right">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
