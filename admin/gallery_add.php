<?php
include '_config.php';
require_once("autentikasi.php");

$gambar = isset($_POST['gambar']);
$id_user = $_SESSION["user"]["id_user"];
$keterangan = $_POST['keterangan'];

//upload dan simpan gallery
$namafile = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp_name, 'img_gallery/' . $namafile);

$query = "INSERT INTO gallery(gambar, id_user, keterangan) VALUES(
    '" . $namafile . "',
    '" . $id_user . "',
    '" . $keterangan . "'
    )";

$result = mysqli_query($con, $query);

if ($result) { ?>
    <script>
        alert('Data berhasil ditambahkan!')
        location.href = 'page_gallery.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal ditambahkan!')
        location.href = 'page_gallery.php'
    </script>
<?php } ?>