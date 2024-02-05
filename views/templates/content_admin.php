<?php
$beranda = 'views/login/beranda_adm.php';
@$page = $_GET['page'];
@$aksi = $_GET['actions'];
//seleksi page atau halaman yang dipilih oleh pengguna
//Menggunakan IF
if (empty($page)) {
    require $beranda;
} else {

    $file = "views/" . $page . "/" . $page . "_" . $aksi . ".php";
    $model = "model/" . $page . "_model.php";
    if (file_exists($file)) {
        require $model;
        require $file;
    } else {
        require $beranda;
    }
}
