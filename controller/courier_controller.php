<?php
require '../model/courier_model.php';

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
        $tgl_pengiriman = $_POST['tgl_pengiriman'];
        $jumlah_dikirim = $_POST['jumlah_dikirim'];
        $id_riwayat = $_POST['id_riwayat'];
        $gambar = null;
        $uploadOk = 1;

        if ($_FILES['fileToUpload']['name'] != '' || $_FILES['fileToUpload']['size'] != 0) {
            $target_dir = "../Assets/uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $gambar = htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
                    echo "The file " . $gambar . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        };

        if ($uploadOk === 0) {
            die;
        }

        $data = array(
            'id_riwayat' => $id_riwayat,
            'tanggal_pengiriman' => $tgl_pengiriman,
            'jumlah' => $jumlah_dikirim,
            'bukti_foto' => $gambar
        );

        //buat sql
        $sql = insert_data($data);
        $query =  mysqli_query($koneksi, $sql) or die("SQL Simpan Data Error");

        if ($query) {
            header('Location: http://localhost/php-persediaanbarang/index_admin.php?page=courier&actions=tampil');
        } else {
            echo "<script>alert('Simpan Data Gagal');<script>";
            die;
        }
    }
}
