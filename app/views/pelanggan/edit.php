<!-- edit.php -->
<div class="modal fade" id="formEdit" tabindex="-1" aria-labelledby="formEdit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formEdit">Edit Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL; ?>/pelanggan/edit" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Pelanggan</label>
                        <input type="hidden" id="id" name="id_pelanggan">
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
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

<script>
    $('#formEdit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var kd = button.data('kode')
        var nama = button.data('nm')
        var alamat = button.data('alamat')
        var telepon = button.data('telepon')

        var modal = $(this)

        modal.find('.modal-body #id').val(kd);
        modal.find('.modal-body #nama_pelanggan').val(nama);
        modal.find('.modal-body #alamat_edit').val(alamat);
        modal.find('.modal-body #telepon_edit').val(telepon);
    });
</script>
