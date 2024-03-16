<!-- index.php -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> Halaman <?= $data['judul']; ?></h1>
        </div>

        <div class="section-body">
            <?php Flasher::flash(); ?>
            <div class="row">
                <!-- Area Chart -->
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Pelanggan</h6>
                            <div>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                                    Tambah Pelanggan
                                </button>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="col-sm-12">
                                    <table class="table table-bordered" id="pelangganTable">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Telepon</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data['pelanggan'] as $item) : ?>
                                                <tr>
                                                    <td> <?= $item['nama_pelanggan']; ?></td>
                                                    <td><?= $item['alamat']; ?></td>
                                                    <td><?= $item['telepon']; ?></td>
                                                    <td>
                                                        <a class="btn-edit" href="" data-toggle="modal" data-target="#formEdit" data-kode="<?= $item['id_pelanggan']; ?>" data-nm="<?= $item['nama_pelanggan']; ?>" data-alamat="<?= $item['alamat']; ?>" data-telepon="<?= $item['telepon']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                </path>
                                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                </path>
                                                            </svg></a>
                                                        <a class="btn-delete" href="<?= BASE_URL; ?>/pelanggan/delete/<?= $item['id_pelanggan']; ?>" onclick="return confirm('Apakah anda yakin?')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                                            </svg></a>

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