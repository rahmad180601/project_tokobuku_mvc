<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap4.css">
<div class="main-content">
  <section class="section">
   
    <div class="section-header">
      <h1>Halaman <?= $data['judul']; ?></h1>
    </div>

    <div class="section-body">
    <?php Alert::alert(); ?>
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
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>ID Barang</th>
                    <th>Nama Produk</th>
                    <th>@Harga satuan</th>
                    <th>Stok Jual</th>
                    <th>Stok Pinjam</th>
                    <th>Action</th>
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
</script>