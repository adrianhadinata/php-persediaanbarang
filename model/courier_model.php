<?php

function insert_data($data)
{
    return "INSERT INTO pengiriman VALUES (0," . $data['id_riwayat'] . ",'" . $data['tanggal_pengiriman'] . "','" . $data['jumlah'] . "','" . $data['bukti_foto'] . "')";
}

function detail()
{
    return "SELECT * FROM pengiriman WHERE id_riwayat ='" . $_GET['id'] . "'";
}

function read()
{
    return "SELECT riwayat.id, riwayat.kode, riwayat.nama_customer, barang.nama_barang, riwayat.tgl_pesan,  riwayat.tgl_pengemasan, riwayat.dikirim, riwayat.estimasi, SUM(IFNULL(pengiriman.jumlah, 0)) aktual FROM riwayat JOIN barang ON barang.id = riwayat.id_barang LEFT JOIN pengiriman ON pengiriman.id_riwayat = riwayat.id GROUP BY riwayat.id";
}

function read_riwayat()
{
    return "SELECT * FROM riwayat";
}
