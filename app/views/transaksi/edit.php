<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman <?= $data['judul'] ?></h1>
        </div>

        <div class="section-body">
            <!-- <h2 class="section-title">Table</h2>
            <p class="section-lead">Example of some Bootstrap table components.</p> -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-6">
                                <h4>Edit Transaksi</h4>
                            </div>
                            <div class="col-6">
                                <a href="<?= BASE_URL ?>/transaksi" class="btn btn-primary float-right">Kembali</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div>
                                    <?php Flasher::flash(); ?>
                                </div>
                                <form action="<?= BASE_URL ?>/transaksi/ubah" method="post">
                                    <div class="form-group">
                                        <label>Id Transaksi</label>
                                        <input type="text" class="form-control" name="id_transaksi" id="id_transaksi"
                                            value="<?= $data['transaksi']['id_transaksi'] ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Transaksi</label>
                                        <input type="date" class="form-control" id="tanggal_transaksi"
                                            name="tanggal_transaksi"
                                            value="<?= $data['transaksi']['tanggal_transaksi'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pelanggan</label>
                                        <select class="form-control" name="id_pelanggan" id="id_pelanggan">
                                            <?php foreach($data['pelanggan'] as $pelanggan) :?>
                                            <!-- <option value="<?php echo $pelanggan['id_pelanggan']; ?>"><?php echo $pelanggan['nama_pelanggan']; ?></option> -->
                                            <option value="<?php echo $pelanggan['id_pelanggan']; ?>" <?php if ($data['transaksi']['id_pelanggan'] == $pelanggan['id_pelanggan']) {
                                                echo 'selected';
                                            } ?>><?php echo $pelanggan['nama_pelanggan']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                <!-- <select class="form-control" name="id_produk" id="id_produk"> -->

                                        <select class="form-control" name="id_produk" id="id_produk" style="pointer-events: none;" readonly>

                                            <?php foreach($data['produk'] as $produk) :?>
                                            <!-- <option value="<?php echo $produk['id_produk']; ?>"><?php echo $produk['nama_produk']; ?></option> -->
                                            <option value="<?php echo $produk['id_produk']; ?>" <?php if ($data['transaksi']['id_produk'] == $produk['id_produk']) {
                                                echo 'selected';
                                            } ?>>
                                                <?php echo $produk['nama_produk']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah</label>

                                        <input type="number" min="1" class="form-control" name="jumlah" id="jumlah"
                                            value="<?= $data['transaksi']['jumlah'] ?>" required>

                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Total</label>
                                        <input type="text" class="form-control" name="total" id="total"
                                            value="<?= $data['transaksi']['total'] ?>">
                                    </div> -->
                                    <div class="text-right">
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>

                                        <!-- <a href="<?= BASE_URL ?>/transaksi" class="btn btn-secondary">Kembali</a> -->

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
