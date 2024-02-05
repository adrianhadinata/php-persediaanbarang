<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pengiriman Barang</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    //proses query ke database
                    $query = mysqli_query($koneksi, detail()) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array

                    ?>

                    <!--dalam tabel--->
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>id</th>
                                <th>Tanggal Peniriman</th>
                                <th>Jumlah Dikirim</th>
                                <th>Bukti Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 0;

                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++;
                            ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['id'] ?></td>
                                    <td><?= $data['tanggal_pengiriman'] ?></td>
                                    <td><?= $data['jumlah'] ?></td>
                                    <td style="text-align: center;"><img src="<?php echo strlen($data['bukti_foto']) !== 0 ? 'Assets/uploads/' . $data['bukti_foto'] : 'https://placehold.co/100x100' ?>" placeholder="<?= $data['tanggal_pengiriman'] ?>" style="width: 100px; height: 100px;"></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=courier&actions=tampil" class="btn btn-info btn-sm">
                                        Kembali ke Halaman Sebelumnya
                                    </a>
                                </td>
                            </tr>
                        </tfoot>

                    </table>

                </div> <!--end panel-body-->
                <!--panel footer-->
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>