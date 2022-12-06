<?php include '_header.php';
error_reporting(0);
?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Udah Data Gallery</h5>
        <div class="card-body">
            <h5 class="card-title">Form Edit Gallery</h5>

            <?php
            $id = $_GET['id'];
            $gambar = $_GET['gambar'];
            $keterangan = $_GET['keterangan'];

            $data = mysqli_query($con, "SELECT * FROM gallery WHERE id = '$id'");

            $row = mysqli_fetch_array($data); ?>
            <form action="proses_gallery_edit.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>">
                    <div class="form-group">
                        <label for="">Gambar</label><br>
                        <img src="<?= "img_gallery/" . $row['gambar'] ?>" width="70" height="70">
                        <input name="gambar" type="file" id="gambar" class="form-control" />
                    </div>
                        <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= $row['keterangan'] ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <button type="submit" name="update" class="btn btn-primary ">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ./content -->
<?php include '_footer.php'; ?>