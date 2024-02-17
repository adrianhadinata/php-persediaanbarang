<!DOCTYPE html>
<html>

<head>
    <title>Cetak Data Barang</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body onload="reportHandler()">
    <!--Menampilkan data detail arsip-->
    <?php
    //proses query ke database
    $query = mysqli_query($koneksi, findById()) or die("SQL Detail error");
    //Merubaha data hasil query kedalam bentuk array
    $data = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <div class='row'>
            <div class="col-sm-12">
                <!--dalam tabel--->
                <div class="text-center">
                    <h2>Sistem Informasi Persediaan Barang Gudang </h2>
                    <h4>Jalan Mangga Buntu No 35 Semarang <br> Kota Semarang, Jawa Tengah, Kode Pos : 50248 </h4>
                    <hr>
                    <h3>DATA BARANG</h3>
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <tr>
                                <td>Kode</td>
                                <td><?= $data['kode'] ?></td>
                            </tr>
                            <tr>
                                <td width="200">Jenis </td>
                                <td><?= $data['jenis'] ?></td>
                            </tr>

                            <tr>
                                <td>Nama Barang</td>
                                <td><?= $data['nama_barang'] ?></td>
                            </tr>
                            <tr>
                                <td>Satuan</td>
                                <td><?= $data['satuan'] ?></td>
                            </tr>

                            <tr>
                                <td>Stok</td>
                                <td><?= $data['stok'] ?></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" class="text-right">
                                    Semarang <?= date("d-m-Y") ?>
                                    <br><br><br><br>
                                    <u>M A R S I N I <strong></u><br>
                                    Direktur
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>

<script>
    function reportHandler() {
        var akun = document.getElementById('container-akun');
        var navbar = document.getElementById('container-admin');
        var footer = document.getElementById('container-footer');

        akun.style.display = "none";
        navbar.style.display = "none";
        footer.style.display = "none";

        print();
    }
</script>