<div class="main-content">
  <section class="section">
    <?php Alert::alert(); ?>
    <div class="section-header">
      <h1><?= $data['judul']; ?></h1>
    </div>

    <div class="section-body card">
      <form class="needs-validation" novalidate="" action="<?= BASE_URL; ?>/product/addProduct" method="post">
        <div class="card-body">
          <div class="form-group disabled">
            <label for="id_produk">ID Product</label>
            <input type="text" class="form-control" id="id_produk" name="id_produk" required>
            <div class="invalid-feedback">
              ID produk tidak boleh kosong!
            </div>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
            <div class="invalid-feedback">
              Nama produk tidak boleh kosong!
            </div>
          </div>
          <div class="form-group">
            <label for="harga_satuan">@Harga satuan</label>
            <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" required>
            <div class="invalid-feedback">
              Harga produk tidak boleh kosong!
            </div>
          </div>
          <div class="form-group">
            <label for="stok_jual">Stok Jual</label>
            <input type="text" class="form-control" id="stok_jual" name="stok_jual" required>
            <div class="invalid-feedback">
              Stok jual produk tidak boleh kosong!
            </div>
          </div>
          <div class="form-group mb-0">
            <label for="stok_pinjam">Stok Pinjam</label>
            <input type="text" class="form-control" id="stok_pinjam" name="stok_pinjam" required>
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