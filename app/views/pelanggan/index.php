<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap4.css">

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
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <!-- <th>ID Pelanggan</th> -->
                                                <th>Nama Pelanggan</th>
                                                <th>Alamat</th>
                                                <th>Telepon</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data['pelanggan'] as $item) : ?>
                                                <tr>
                                                    <!-- <td> <?= $item['id_pelanggan']; ?></td> -->
                                                    <td><?= $item['nama_pelanggan']; ?></td>
                                                    <td><?= $item['alamat']; ?></td>
                                                    <td><?= $item['telepon']; ?></td>
                                                    <td>
                                                        <a class="btn btn-primary btn-action mr-1 btn-edit" href="" data-toggle="modal" data-target="#formEdit" data-kode="<?= $item['id_pelanggan']; ?>" data-nama="<?= $item['nama_pelanggan']; ?>" data-alamat="<?= $item['alamat']; ?>" data-telepon="<?= $item['telepon']; ?>"><i class="fas fa-pencil-alt"></i></a>
                                                        <a class="btn btn-danger btn-action btn-delete" href="<?= BASE_URL; ?>/pelanggan/delete/<?= $item['id_pelanggan']; ?>" onclick="return confirm('Apakah anda yakin?')"><i class="fas fa-trash"></i></a>
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



<!-- Tambah Pelanggan -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL; ?>/pelanggan/tambah" method="post">
                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" required>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Edit Pelanggan -->
<div class="modal fade" id="formEdit" tabindex="-1" aria-labelledby="formEdit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formEdit">Edit Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL; ?>/pelanggan/edit" method="post">
                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="hidden" id="id_pelanggan" name="id_pelanggan">
                        <input type="text" class="form-control" id="nama_pelanggan_edit" name="nama_pelanggan" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat_edit" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control" id="telepon_edit" name="telepon" required>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="#">#</a>
    </div>
    <div class="footer-right">
        2.3.0
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
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
    $('#formEdit').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id_pelanggan = button.data('kode')
        var nama_pelanggan = button.data('nama')
        var alamat = button.data('alamat')
        var telepon = button.data('telepon')

        var modal = $(this)

        modal.find('.modal-body #id_pelanggan').val(id_pelanggan);
        modal.find('.modal-body #nama_pelanggan_edit').val(nama_pelanggan);
        modal.find('.modal-body #alamat_edit').val(alamat);
        modal.find('.modal-body #telepon_edit').val(telepon);
    });
</script>


<!-- Page Specific JS File -->
</body>

</html>