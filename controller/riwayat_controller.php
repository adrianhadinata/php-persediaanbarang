<?php
require '../model/riwayat_model.php';

if (isset($_POST['action'])) {
    if ($_POST['action'] === 'insert') {
        insert();
    }
};

function insert()
{
    require '../config/koneksi.php';
    if ($_POST) {
        //Ambil data dari form
        $kode = $_POST['kode'];
        $nama_customer = $_POST['nama_customer'];
        $id_barang = $_POST['nama_barang'];
        $tgl_pesan = $_POST['tgl_pesan'];
        $tgl_pengemasan = $_POST['tgl_pengemasan'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $estimasi_pengiriman = $_POST['estimasi_pengiriman'];

        $data = array(
            'kode' => $kode,
            'nama_customer' => $nama_customer,
            'tgl_pesan' => $tgl_pesan,
            'tgl_pengemasan' => $tgl_pengemasan,
            'jumlah_barang' => $jumlah_barang,
            'id_barang' => $id_barang,
            'estimasi_pengiriman' => $estimasi_pengiriman
        );

        //buat sql
        $sql = insert_data($data);
        $query =  mysqli_query($koneksi, $sql) or die("SQL Simpan Data Error");

        if ($query) {
            header('Location: http://localhost/php-persediaanbarang/index_admin.php?page=riwayat&actions=tampil');
        } else {
            echo "<script>alert('Simpan Data Gagal');<script>";
            die;
        }
    }
}
