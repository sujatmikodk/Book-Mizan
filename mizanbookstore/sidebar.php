<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles-table.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-danger">
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-store" style="color:grey"></i>
            </div>
        </a>
        <a class="navbar-brand ps-3" href="home.php">MIZAN BOOKSTORE</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
    </nav>
    
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">CHART</div>
                        
                        <!-- Reseller Section -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseReseller" aria-expanded="false" aria-controls="collapseReseller">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                            Reseller
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseReseller" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="barchartreseller.php">Grafik Reseller</a>
                                <a class="nav-link" href="data_reseller.php">Data Reseller</a>
                            </nav>
                        </div>

                        <!-- Produk Section -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProduk" aria-expanded="false" aria-controls="collapseProduk">
                            <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                            Produk
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseProduk" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="barchartproduct.php">Grafik Produk</a>
                                <a class="nav-link" href="data_produk.php">Data Produk</a>
                            </nav>
                        </div>

                        <!-- Pembelian Section -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePembelian" aria-expanded="false" aria-controls="collapsePembelian">
                            <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                            Pembelian
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePembelian" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="linechartpembelian.php">Grafik Pembelian</a>
                                <a class="nav-link" href="data_pembelian.php">Data Pembelian</a>
                            </nav>
                        </div>

                        <!-- Penjualan Section -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePenjualan" aria-expanded="false" aria-controls="collapsePenjualan">
                            <div class="sb-nav-link-icon"><i class="fas fa-money-bill-alt"></i></div>
                            Penjualan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePenjualan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="linechartpenjualan.php">Grafik Penjualan</a>
                                <a class="nav-link" href="data_penjualan.php">Data Penjualan</a>
                            </nav>
                        </div>

                        <div class="sb-sidenav-menu-heading">OLAP</div>
                        <a class="nav-link" href="olap.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            Mondrian
                        </a>

                        <div class="sb-sidenav-menu-heading">ACCOUNT</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    MIZAN BOOKSTORE
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts-table.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>