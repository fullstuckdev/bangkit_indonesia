<?php
include '_config.php';

$id_gallery = $_GET['id'];

$delete = mysqli_query($con, "DELETE FROM gallery WHERE id = $id_gallery");

if ($delete) { ?>
    <script>
        alert('Data berhasil dihapus!')
        location.href = 'page_gallery.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal dihapus!')
        location.href = 'page_gallery.php'
    </script>
<?php } ?>