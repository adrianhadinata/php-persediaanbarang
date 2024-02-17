<!DOCTYPE html>
<html>

<head>
    <title>Cetak Data Pembelian Barang</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body onload="reportHandler()">
    <!--Menampilkan data detail arsip-->

    <div class="container">
        <div class='row'>
            <div class="col-sm-12">
                <!--dalam tabel--->
                <div class="text-center">
                    <h2>Sistem Informasi Gudang CV. Global Karunia Technology </h2>
                    <h4>Jalan Mangga Buntu No 35 Semarang <br> Kota Semarang, Jawa Tengah, Kode Pos : 50248 </h4>
                    <hr>
                    <h3>DATA PEMBELIAN BARANG <? echo "$ambilthn"; ?></h3>
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode</th>
                                    <th>Nama Customer</th>
                                    <th>Nama Barang</th>
                                    <th>Tanggal Pesan</th>
                                    <th>Tanggal Pengemasan</th>
                                    <th>Jumlah Barang</th>
                                    <th>Estimasi Pengiriman</th>
                                </tr>
                            </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = str_replace('%20', ' ', $_GET['sql']);
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                            ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['kode'] ?></td>
                                    <td><?= $data['nama_customer'] ?></td>
                                    <td><?= $data['nama_barang'] ?></td>
                                    <td><?= $data['tgl_pesan'] ?></td>
                                    <td><?= $data['tgl_pengemasan'] ?></td>
                                    <td><?= $data['dikirim'] ?></td>
                                    <td><?= $data['estimasi'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="8" class="text-right">
                                    Semarang, &nbsp <?= date("d-m-Y") ?>
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