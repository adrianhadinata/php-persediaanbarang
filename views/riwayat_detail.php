<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Riwayat Pengiriman Barang</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM riwayat WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="300">Kode</td> <td><?= $data['kode'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Customer</td> <td><?= $data['nama_customer'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td> <td><?= $data['nama_barang'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pesan</td> <td><?= $data['tgl_pesan'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Pengemasan</td> <td><?= $data['tgl_pengemasan'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Barang</td> <td><?= $data['jumlah_barang'] ?></td>
                        </tr>
                        <tr>
                            <td>Dikirim</td> <td><?= $data['estimasi_pengiriman'] ?></td>
                        </tr>
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=riwayat&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Riwayat Pengiriman Barang </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

