<?php
if (!isset($_SESSION['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Status Pengiriman Barang</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode</th>
                                <th>Nama Customer</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Pengemasan</th>
                                <th>Harus Dikirim</th>
                                <th>Realisasi Pengiriman</th>
                                <th>Estimasi Pengiriman</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = read();

                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            $nomor = 0;

                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++;
                            ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['kode'] ?></td>
                                    <td><?= $data['nama_customer'] ?></td>
                                    <td><?= $data['nama_barang'] ?></td>
                                    <td><?= $data['tgl_pengemasan'] ?></td>
                                    <td><?= $data['dikirim'] ?> unit</td>
                                    <td><?= $data['aktual'] ?> unit</td>
                                    <td><?= $data['estimasi'] ?> hari</td>
                                    <td>
                                        <a href="?page=courier&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=courier&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Status Pengiriman Barang
                                    </a>
                                </td>
                            </tr>
                        </tfoot>

                    </table>
                </div>
            </div>

        </div>
    </div>
</div>