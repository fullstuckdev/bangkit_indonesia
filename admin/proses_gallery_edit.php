<?php
error_reporting(0);
include '_config.php';
require_once("autentikasi.php");

$id = $_POST['id'];
$keterangan = $_POST['keterangan'];
$gambar = $_POST['gambar'];
$id_user = $_SESSION["user"]["id_user"];

//upload dan simpan artikel
$namafile = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp_name, 'img_artikel/' . $namafile);

$update = mysqli_query($con, "UPDATE gallery SET gambar ='$namafile', id_user='$id_user' , keterangan='$keterangan' WHERE id ='$id'");

if ($update) { ?>
    <script>
        alert('Data berhasil diubah!')
        location.href = 'page_gallery.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal diubah!')
        location.href = 'page_gallery.php'
    </script>
<?php } ?>