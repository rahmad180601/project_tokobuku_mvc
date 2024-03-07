<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
      <li><a class="nav-link" href="<?= BASE_URL; ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
      <li class="menu-header">Page</li>
      <li class="active"><a class="nav-link" href="<?= BASE_URL; ?>/product/"><i class="fa fa-book mr-0"></i> <span class="ml-4">Produk</span></a></li>
      <li><a class="nav-link" href="#"><i class="far fa-square"></i> <span>Pelanggan</span></a></li>
      <li><a class="nav-link" href="#"><i class="far fa-square"></i> <span>Transaksi</span></a></li>
      <li><a class="nav-link" href="#"><i class="far fa-square"></i> <span>Peminjaman</span></a></li>
    </ul>


  </aside>
</div>
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
                    <th>Nama</th>
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
                      <td><?= $product['nama']; ?></td>
                      <td><?= $product['harga_satuan']; ?></td>
                      <td><?= $product['stok_jual']; ?></td>
                      <td><?= $product['stok_pinjam']; ?></td>
                      <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
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