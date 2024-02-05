<?php
//membuat query untuk hapus data
$query = mysqli_query($koneksi, hapus()) or die("SQL Hapus Error");
if ($query) {
    echo "<script> window.location.assign('?page=barang&actions=tampil');</script>";
} else {
    echo "<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=barang&actions=tampil');</scripr>";
}
