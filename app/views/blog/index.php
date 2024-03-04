<div class="container mt-5">
    <div class="row">
        <div class="col-6">
 
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Buat Artikel
            </button>
            <?php Flasher::flash();?>
            <h3 class="mt-4">Blog</h3>
            <ul class="list-group">
                <?php foreach ($data['blog'] as $blog) : ?>
                    <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                        <?= $blog['judul']; ?>
                        <a href="<?= BASE_URL; ?>/blog/detail/<?= $blog['id']; ?>" class="btn btn-primary">baca</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div 
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Artikel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL; ?>/blog/tambah" method="post">
            <div class="form-group">
                <label for="penulis">Judul Artikel</label>
                <input type="text" class="form-control" id="penulis" name="penulis">
            </div>
            <div class="form-group">
                <label for="judul">Nama Penulis</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="form-group">
                <label for="tulisan">Isi Artikel</label>
                <textarea class="form-control" id="tulisan" rows="5" name="tulisan"></textarea>
            </div>
         
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

   