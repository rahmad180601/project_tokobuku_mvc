<div class="main-content">
  <section class="section">
    <?php Alert::alert(); ?>
    <div class="section-header">
      <h1><?= $data['judul']; ?></h1>
    </div>

    <div class="section-body">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Latest Posts</h4>
            <div class="card-header-action">
              <a href="<?= BASE_URL; ?>/product/form" class="btn btn-primary">Tambah data buku</a>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped mb-0">
                <thead>
                  <tr>
                    <th>ID Barang</th>
                    <th>Nama Produk</th>
                    <th>@Harga satuan</th>
                    <th>Stok Jual</th>
                    <th>Stok Pinjam</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($data['products'] as $product) : ?>
                    <tr>
                      <td><?= $product['id_produk']; ?></td>
                      <td><?= $product['nama_produk']; ?></td>
                      <td><?= $product['harga_satuan']; ?></td>
                      <td><?= $product['stok_jual']; ?></td>
                      <td><?= $product['stok_pinjam']; ?></td>
                      <td>
                        <a href="<?= BASE_URL; ?>/product/editForm/<?= $product['id_produk']; ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                        <a href="<?= BASE_URL; ?>/product/deleteProduct/<?= $product['id_produk']; ?>" class="btn btn-danger btn-action delete-btn" onclick="return confirm('Data <?= $product['nama_produk']; ?> akan dihapus. Yakin?')"><i class="fas fa-trash"></i></a>
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
  </section>
</div>