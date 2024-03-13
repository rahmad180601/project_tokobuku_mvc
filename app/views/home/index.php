
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <?php if (isset($_SESSION['user']['nama'])): ?>
                <h1>Selamat datang, <?= $_SESSION['user']['nama']; ?></h1>
            <?php endif; ?>
        </div>

        <div class="section-body">
        </div>
    </section>
</div>