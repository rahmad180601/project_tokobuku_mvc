<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $data['judul']; ?></h1>
        </div>

        <div class="section-body card">
            <form class="needs-validation" novalidate action="<?= BASE_URL; ?>/peminjaman/updatePeminjaman" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_produk">ID Produk</label>
                        <select class="form-control" name="id_produk" id="id_produk" style="pointer-events: none;" readonly>

                            <?php foreach ($data['produk'] as $produk) : ?>
                                <!-- <option value="<?php echo $produk['id_produk']; ?>"><?php echo $produk['nama_produk']; ?></option> -->
                                <option value="<?php echo $produk['id_produk']; ?>" <?php if ($data['peminjaman']['id_produk'] == $produk['id_produk']) {
                                                                                        echo 'selected';
                                                                                    } ?>>
                                    <?php echo $produk['nama_produk']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <!-- <input type="text" class="form-control" id="id_produk" name="id_produk" value="<?= $data['peminjaman']['id_produk']; ?>" required> -->
                    </div>
                    <div class="form-group">
                        <label for="id_pelanggan">ID Pelanggan</label>
                        <select class="form-control" name="id_pelanggan" id="id_pelanggan">
                            <?php foreach ($data['pelanggan'] as $pelanggan) : ?>
                                <!-- <option value="<?php echo $pelanggan['id_pelanggan']; ?>"><?php echo $pelanggan['nama_pelanggan']; ?></option> -->
                                <option value="<?php echo $pelanggan['id_pelanggan']; ?>" <?php if ($data['peminjaman']['id_pelanggan'] == $pelanggan['id_pelanggan']) {
                                                                                                echo 'selected';
                                                                                            } ?>><?php echo $pelanggan['nama_pelanggan']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <!-- <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" value="<?= $data['peminjaman']['id_pelanggan']; ?>" required> -->
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pinjam">Tanggal Pinjam</label>
                        <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="<?= $data['peminjaman']['tanggal_pinjam']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kembali">Tanggal Kembali</label>
                        <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="<?= $data['peminjaman']['tanggal_kembali']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $data['peminjaman']['jumlah']; ?>" required>
                    </div>
                    <input type="hidden" name="id" value="<?= $data['peminjaman']['id_peminjaman']; ?>">
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>