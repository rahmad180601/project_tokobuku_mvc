<div class="main-content">
  <section class="section">
    <?php Alert::alert(); ?>
    <div class="section-header">
      <h1><?= $data['judul']; ?></h1>
    </div>

    <div class="section-body card">
      <form class="needs-validation" novalidate="" action="<?= BASE_URL; ?>/product/updateProduct" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="id_produk">ID Product</label>
            <input type="hidden" class="form-control " id="id_produk" name="id_produk" value="<?= isset($data['product']['id_produk']) ? $data['product']['id_produk'] : ''; ?>" required>
            <input type="text" class="form-control " id="id_produk_diplay" value="<?= isset($data['product']['id_produk']) ? $data['product']['id_produk'] : ''; ?>" disabled>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= isset($data['product']['nama_produk']) ? $data['product']['nama_produk'] : ''; ?>" required>
            <div class="invalid-feedback">
              Nama produk tidak boleh kosong!
            </div>
          </div>
          <div class="form-group">
            <label for="harga_satuan">@Harga satuan</label>
            <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" value="<?= isset($data['product']['harga_satuan']) ? $data['product']['harga_satuan'] : ''; ?>" required>
            <div class="invalid-feedback">
              Harga produk tidak boleh kosong!
            </div>
          </div>
          <div class="form-group">
            <label for="stok_jual">Stok Jual</label>
            <input type="text" class="form-control" id="stok_jual" name="stok_jual" value="<?= isset($data['product']['stok_jual']) ? $data['product']['stok_jual'] : ''; ?>" required>
            <div class="invalid-feedback">
              Stok jual produk tidak boleh kosong!
            </div>
          </div>
          <div class="form-group mb-0">
            <label for="stok_pinjam">Stok Pinjam</label>
            <input type="text" class="form-control" id="stok_pinjam" name="stok_pinjam" value="<?= isset($data['product']['stok_pinjam']) ? $data['product']['stok_pinjam'] : ''; ?>" required>
            <div class="invalid-feedback">
              Stok pinjam produk tidak boleh kosong!
            </div>
          </div>
        </div>
        <div class="card-footer text-right">
          <button class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
</div>