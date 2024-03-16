
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <?php if (isset($_SESSION['user']['nama'])): ?>
                <h1>Selamat datang, <?= $_SESSION['user']['nama']; ?></h1>
            <?php endif; ?>
        </div>

        <div class="section-body">

        <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Pelanggan</h4>
                    </div>
                    <div class="card-body">
                        <?php 
                            echo count($data['pelanggan']);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Produk</h4>
                    </div>
                    <div class="card-body">
                    <?php 
                            echo count($data['products']);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pendapatan</h4>
                    </div>
                    <div class="card-body">
                    <?php 
                        echo "<span style='font-size: 18px;'>Rp" . number_format($data['transaksi'], 0, ',', '.') . "</span>";
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Peminjaman</h4>
                    </div>
                    <div class="card-body">
                        33
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>
    </section>
</div>