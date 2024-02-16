<?php

function insert_data($data)
{
    return "INSERT INTO riwayat VALUES (0," . "'" . $data['kode'] . "','" . $data['nama_customer'] . "','" . $data['tgl_pesan'] . "','" . $data['tgl_pengemasan'] . "','" . $data['jumlah_barang'] . "','" . $data['id_barang'] . "','" . $data['estimasi_pengiriman'] . "')";
}

function read($id)
{
    return "SELECT * FROM riwayat JOIN barang ON barang.id = riwayat.id_barang WHERE riwayat.id='$id'";
}
