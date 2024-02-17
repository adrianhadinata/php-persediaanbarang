<?php

function read()
{
    return "SELECT t1.kode, t1.nama_customer, t2.nama_barang, t1.tgl_pesan, t1.tgl_pengemasan, t1.dikirim, t1.estimasi FROM riwayat t1 JOIN barang t2 ON t2.id = t1.id_barang";
}
