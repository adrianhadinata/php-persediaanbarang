<?php

function read()
{
    return "SELECT t1.kode, t1.nama_customer, t2.nama_barang, t1.tgl_pesan, t1.tgl_pengemasan, t1.dikirim, t1.estimasi FROM riwayat t1 JOIN barang t2 ON t2.id = t1.id_barang";
}



function findById()
{
    return "SELECT * FROM barang WHERE id='" . $_GET['id'] . "'";
}

function findAllBarang()
{
    return "SELECT * FROM barang";
}

function findRiwayatById()
{
    return "SELECT t1.tgl_pesan, t1.tgl_pengemasan, t1.dikirim, t1.estimasi, t1.nama_customer, t2.nama_barang, t2.kode FROM riwayat t1 JOIN barang t2 ON t2.id = t1.id_barang WHERE t1.id='" . $_GET['id'] . "'";
}
