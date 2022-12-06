<?php
include '_config.php';

$id_user = $_POST['id_user'];
$nama_user = $_POST['nama_user'];
$username = $_POST['username'];
$password = $_POST['password'];

date_default_timezone_set('Asia/Jakarta');
$waktu = date('Y-m-d H:i:s');
$update = mysqli_query($con, "UPDATE user SET nama_user='$nama_user', username='$username', password='$password' WHERE id_user = '$id_user'");
// $query = "UPDATE user SET nama_user='$nama_user', username='$username', password='$password' WHERE id_user = '$id_user'";
// $result = mysqli_query($con, $query);

if ($update) { ?>
    <script>
        alert('Data berhasil diubah!')
        location.href = 'page_user.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal diubah!')
        location.href = 'page_user.php'
    </script>
<?php } ?>