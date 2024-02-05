<?php

function read()
{
    return "SELECT * FROM barang";
}

function hapus()
{
    return "DELETE FROM barang WHERE id ='" . $_GET['id'] . "'";
}

function detail()
{
    return "SELECT *FROM barang WHERE id ='" . $_GET['id'] . "'";
}

function edit($id)
{
    return "SELECT * FROM barang WHERE id ='$id'";
}
