<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top" id="container-admin">

    <div class="container ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">Sistem Informasi Persediaan Barang Gudang</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>

                <?php if (isset($_SESSION['level']) && $_SESSION['level'] == 1) { ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="?page=barang&actions=tampil">Data Barang</a></li>
                            <li><a href="?page=riwayat&actions=tampil">Riwayat Pengiriman Barang</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="?page=barang&actions=report">Laporan Barang</a></li>
                            <li><a href="?page=riwayat&actions=report">Laporan Riwayat Pengiriman Barang</a></li>
                        </ul>
                    </li>
                    <li><a href="?page=user&actions=tampil">User</a></li>
                <?php } ?>

                <?php if (isset($_SESSION['level']) && $_SESSION['level'] == 2) { ?>
                    <li><a href="?page=courier&actions=tampil">Pengiriman</a></li>
                <?php } ?>

                <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>