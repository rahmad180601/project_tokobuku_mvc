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
      <li class="active"><a class="nav-link" href="<?= BASE_URL; ?>/product/"><i class="fa fa-book"></i> <span>Produk</span></a></li>
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

    <div class="section-body card">
      <form class="needs-validation" novalidate="" action="<?= BASE_URL; ?>/product/addProduct" method="post">
        <div class="card-body">
          <div class="form-group disabled">
            <label>ID Product</label>
            <input type="text" class="form-control" id="id_produk" name="id_produk" required>
            <div class="invalid-feedback">
              ID produk tidak boleh kosong!
            </div>
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
            <div class="invalid-feedback">
              Nama produk tidak boleh kosong!
            </div>
          </div>
          <div class="form-group">
            <label>@Harga satuan</label>
            <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" required>
            <div class="invalid-feedback">
              Harga produk tidak boleh kosong!
            </div>
          </div>
          <div class="form-group">
            <label>Stok Jual</label>
            <input type="text" class="form-control" id="stok_jual" name="stok_jual" required></input>
            <div class="invalid-feedback">
              Stok jual produk tidak boleh kosong!
            </div>
          </div>
          <div class="form-group mb-0">
            <label>Stok Pinjam</label>
            <input type="text" class="form-control" id="stok_pinjam" name="stok_pinjam" required></input>
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