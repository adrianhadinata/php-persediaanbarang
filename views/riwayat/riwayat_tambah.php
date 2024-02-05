<?php
// ini proses ambil data barang dari database, lalud ata yang didapat dimasukan ke $query
$sql = "SELECT * FROM barang";
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
                    <form class="form-horizontal" action="controller/riwayat_controller.php" method="post">
                        <input type="hidden" value="insert" name="action">

                        <div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode </label>
                            <div class="col-sm-9">
                                <input type="text" name="kode" class="form-control" id="inputEmail3" placeholder="Kode">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_customer" class="col-sm-3 control-label">Nama Customer</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_customer" class="form-control" id="inputEmail3" placeholder="Nama Customer">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <select name="nama_barang" class="form-control" id="inputEmail3">
                                    <option value="">Pilih Nama Barang:</option>

                                    <!-- proses perulangan untuk menampilkan semua data dalam $query -->
                                    <?php while ($data = mysqli_fetch_array($query)) {
                                        $nomor++;
                                    ?>
                                        <option value="<?php echo $data['id'] ?>"><?php echo $data['nama_barang'] ?></option>
                                    <?php } ?>

                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_pesan" class="col-sm-3 control-label">Tanggal Pesan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pesan" class="form-control" id="inputEmail3" placeholder="Tanggal Pesan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_pengemasan" class="col-sm-3 control-label">Tanggal Pengemasan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pengemasan" class="form-control" id="inputEmail3" placeholder="Tanggal Pengemasan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_barang" class="col-sm-3 control-label">Jumlah Barang</label>
                            <div class="col-sm-3">
                                <input type="text" name="jumlah_barang" class="form-control" id="inputEmail3" placeholder="Jumlah Barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="estimasi_pengiriman" class="col-sm-3 control-label">Estimasi Pengiriman</label>
                            <div class="col-sm-3">
                                <input type="text" name="estimasi_pengiriman" class="form-control" id="inputEmail3" placeholder="Estimasi Pengiriman">
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
                    <a href="?page=riwayat&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Riwayat Barang
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>