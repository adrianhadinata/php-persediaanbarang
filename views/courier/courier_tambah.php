<?php
// ini proses ambil data barang dari database, lalud ata yang didapat dimasukan ke $query
$sql = read_riwayat();
$query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
$nomor = 0;

?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Riwayat Pengiriman Barang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="controller/courier_controller.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="insert" name="action">

                        <div class="form-group">
                            <label for="id_riwayat" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <select name="id_riwayat" class="form-control" id="inputEmail3">
                                    <option value="">Pilih Kode Riwayat:</option>

                                    <!-- proses perulangan untuk menampilkan semua data dalam $query -->
                                    <?php while ($data = mysqli_fetch_array($query)) {
                                        $nomor++;
                                    ?>
                                        <option value="<?php echo $data['id'] ?>"><?php echo $data['kode'] ?></option>
                                    <?php } ?>

                                </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_pengiriman" class="col-sm-3 control-label">Tanggal Pengiriman</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pengiriman" class="form-control" id="inputEmail3" placeholder="Tanggal pengiriman">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_dikirim" class="col-sm-3 control-label">Jumlah Dikirim</label>
                            <div class="col-sm-3">
                                <input type="text" name="jumlah_dikirim" class="form-control" id="inputEmail3" placeholder="Jumlah Barang">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Bukti Foto</label>
                            <div class="col-sm-3">
                                <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=courier&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data courier Barang
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>