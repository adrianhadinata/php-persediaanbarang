<?php
$id = $_GET['id'];
$ambil =  mysqli_query($koneksi, read($id)) or die("SQL Edit error");
$data = mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Riwayat Pengiriman Barang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="kode" class="col-sm-3 control-label">Kode</label>
                                <div class="col-sm-9">
                                    <input type="text" name="kode" value="<?= $data['kode'] ?>" class="form-control" id="inputEmail3" placeholder="Kode">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama_customer" class="col-sm-3 control-label">Nama Customer</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama_customer" value="<?= $data['nama_customer'] ?>" class="form-control" id="inputEmail3" placeholder="Nama Customer">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama_barang" value="<?= $data['nama_barang'] ?>" class="form-control" id="inputEmail3" placeholder="Nama Barang">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tgl_pesan" class="col-sm-3 control-label">Tanggal Pesan</label>
                                <div class="col-sm-9">
                                    <input type="date" name="tgl_pesan" value="<?= $data['tgl_pesan'] ?>" class="form-control" id="inputEmail3" placeholder="Tanggal Pesan">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tgl_pengemasan" class="col-sm-3 control-label">Tanggal Pengemasan</label>
                                <div class="col-sm-9">
                                    <input type="date" name="tgl_pengemasan" value="<?= $data['tgl_pengemasan'] ?>" class="form-control" id="inputEmail3" placeholder="Tanggal Pengemasan">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jumlah_barang" class="col-sm-3 control-label">Jumlah Barang</label>
                                <div class="col-sm-9">
                                    <input type="text" name="jumlah_barang" value="<?= $data['dikirim'] ?>" class="form-control" id="inputEmail3" placeholder="jumlah_barang">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="estimasi_pengiriman" class="col-sm-3 control-label">Estimasi Pengiriman</label>
                                <div class="col-sm-9">
                                    <input type="text" name="estimasi_pengiriman" value="<?= $data['estimasi'] ?>" class="form-control" id="inputEmail3" placeholder="estimasi_pengiriman">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-success">
                                        <span class="fa fa-edit"></span> Update Data Riwayat Pengiriman Barang</button>
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

<?php
if ($_POST) {
    //Ambil data dari form
    $kode = $_POST['kode'];
    $nama_customer = $_POST['nama_customer'];
    $nama_barang = $_POST['nama_barang'];
    $tgl_pesan = $_POST['tgl_pesan'];
    $tgl_pengemasan = $_POST['tgl_pengemasan'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $estimasi_pengiriman = $_POST['estimasi_pengiriman'];
    //buat sql
    $sql = "UPDATE riwayat SET kode='$kode',nama_customer='$nama_customer',nama_barang='$nama_barang',
    tgl_pesan='$tgl_pesan',tgl_pengemasan='$tgl_pengemasan',jumlah_barang='$jumlah_barang',estimasi_pengiriman='$estimasi_pengiriman' WHERE id ='$id'";
    $query =  mysqli_query($koneksi, $sql) or die("SQL Edit MHS Error");
    if ($query) {
        echo "<script>window.location.assign('?page=riwayat&actions=tampil');</script>";
    } else {
        echo "<script>alert('Edit Data Gagal');<script>";
    }
}

?>