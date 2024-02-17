<?php

if (isset($_POST['action'])) {
    if ($_POST['action'] === 'perbulan') {
        perbulan();
    }

    if ($_POST['action'] === 'pertahun') {
        pertahun();
    }
};

function perbulan()
{
    require '../config/koneksi.php';

    if ($_POST) {
        //Ambil data dari form
        $ambilbln = $_POST['bulan'];
        $ambilthn = $_POST['tahun'];
        $bulanNama;
        if ($ambilbln == 12) {
            $bulanNama = "DESEMBER";
        } elseif ($ambilbln == 11) {
            $bulanNama = "NOVEMBER";
        } elseif ($ambilbln == 10) {
            $bulanNama = "OKTOBER";
        } elseif ($ambilbln == 9) {
            $bulanNama = "SEPTEMBER";
        } elseif ($ambilbln == 8) {
            $bulanNama = "AGUSTUS";
        } elseif ($ambilbln == 7) {
            $bulanNama = "JULI";
        } elseif ($ambilbln == 6) {
            $bulanNama = "JUNI";
        } elseif ($ambilbln == 5) {
            $bulanNama = "MEI";
        } elseif ($ambilbln == 4) {
            $bulanNama = "APRIL";
        } elseif ($ambilbln == 3) {
            $bulanNama = "MARET";
        } elseif ($ambilbln == 2) {
            $bulanNama = "FEBRUARI";
        } elseif ($ambilbln == 1) {
            $bulanNama = "JANUARI";
        }

        //buat sql
        $sql = "SELECT t1.kode, t1.nama_customer, t2.nama_barang, t1.tgl_pesan, t1.tgl_pengemasan, t1.dikirim, t1.estimasi FROM riwayat t1 JOIN barang t2 ON t2.id = t1.id_barang WHERE substr(t1.tgl_pesan,1,7)='$ambilthn-$ambilbln'";

        header('Location: http://localhost/php-persediaanbarang/index_admin.php?page=report&actions=perbulan&sql=' . $sql);
    }
}

function pertahun()
{
    require '../config/koneksi.php';

    if ($_POST) {
        //Ambil data dari form
        $ambilthn = $_POST['tahun'];

        //buat sql
        $sql = "SELECT t1.kode, t1.nama_customer, t2.nama_barang, t1.tgl_pesan, t1.tgl_pengemasan, t1.dikirim, t1.estimasi FROM riwayat t1 JOIN barang t2 ON t2.id = t1.id_barang WHERE substr(t1.tgl_pesan,1,4)='$ambilthn'";

        header('Location: http://localhost/php-persediaanbarang/index_admin.php?page=report&actions=pertahun&sql=' . $sql);
    }
}
