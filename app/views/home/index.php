<div class="main-content">
    <section class="section">
        <div class="section-header">
            <?php if (isset($_SESSION['user']['nama'])) : ?>
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
                        <div class="card-icon bg-success">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Peminjaman</h4>
                            </div>
                            <div class="card-body">
                                <?php
                                echo $data['peminjaman'];
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
                                echo "<span style='font-size: 16px;'>Rp" . number_format($data['transaksi'], 0, ',', '.') . "</span>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Penjualan</h4>
                </div>
                <div class="vticker">
                    <canvas id="Chart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:  #ff0000;">Peminjaman</h4>
                </div>
                <div class="vticker">
                    <canvas id="PinjamChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var months = <?php echo json_encode(array_column($data['totalpenjualan'], 'month')); ?>;
        var totalSales = <?php echo json_encode(array_column($data['totalpenjualan'], 'total_jual')); ?>;

        var ctx = document.getElementById('Chart');
        var salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: months,
                datasets: [{
                    label: 'Total Penjualan Perbulan',
                    data: totalSales,
                    backgroundColor: 'rgb(173,216,230)',
                    borderColor: 'rgb(0,0,255)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <script>
        var monthspinjam = <?php echo json_encode(array_column($data['totalpeminjaman'], 'month')); ?>;
        var totalpinjam = <?php echo json_encode(array_column($data['totalpeminjaman'], 'jumlah_pinjam')); ?>;

        var ctx = document.getElementById('PinjamChart');
        var salesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: monthspinjam,
                datasets: [{
                    label: 'Total Peminjaman Perbulan',
                    data: totalpinjam,
                    backgroundColor: 'rgb(240,128,128)',
                    borderColor: 'rgb(255,0,0)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>