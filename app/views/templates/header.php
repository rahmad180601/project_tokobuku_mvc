<!DOCTYPE html>
<html lang=”en”>
   <head>
       <meta charset=”UTF-8">
       <meta name=”viewport” content=”width=device-width, initial-scale=1.0">
       <meta http-equiv=”X-UA-Compatible” content=”ie=edge”>
       <title>Halaman <?= $data['judul']; ?></title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<<<<<<< Updated upstream
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="<?= BASE_URL; ?>">Sinau MVC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Home <span class="sr-only">(current)</span></a>
    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/blog">Blog</a>
    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/user">User</a>
    </div>
    </div>
    </div>
</nav>
=======
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>
                        <div class="search-result">

                        </div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= BASE_URL; ?>/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">

                            <div class="d-sm-none d-lg-inline-block">Hi,  <?= $_SESSION['user']['nama']; ?></div>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <!-- <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a> -->
                            <div class="dropdown-divider"></div>


                            <a href="<?= BASE_URL; ?>/login/logout" class="dropdown-item has-icon text-danger">

                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">

                        <a href="index.html">Book</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">BK</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="active"><a class="nav-link" href="<?= BASE_URL; ?>/home"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                        <li class="menu-header">Page</li>
                        <?php if (isset($_SESSION['user']['roles']) && $_SESSION['user']['roles'] == 'admin'): ?>
                            <li><a class="nav-link" href="<?= BASE_URL; ?>/user"><i class="far fa-user"></i> <span>Petugas</span></a></li>
                        <?php endif; ?>
                        <li><a class="nav-link" href="<?= BASE_URL; ?>/product"><i class="fas fa-th"></i> <span>Produk</span></a></li>
                        <li><a class="nav-link" href="<?= BASE_URL; ?>/pelanggan"><i class="far fa-user"></i> <span>Pelanggan</span></a></li>
                        <li><a class="nav-link" href="<?= BASE_URL; ?>/transaksi"><i class="fas fa-th-large"></i>  <span>Transaksi</span></a></li>
                        <li><a class="nav-link" href="<?= BASE_URL; ?>/peminjaman"><i class="fas fa-th-large"></i> <span>Peminjaman</span></a></li>

                    </ul>
                </aside>
            </div>

   

         
           
>>>>>>> Stashed changes
