<?php
include '_config.php';

$id_user = $_GET['id_user'];

$delete = mysqli_query($con, "DELETE FROM user WHERE id_user = '$id_user'");

if ($delete) { ?>
    <script>
        alert('Data berhasil dihapus!')
        location.href = 'page_user.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal dihapus!')
        location.href = 'page_user.php'
    </script>
<?php } ?>