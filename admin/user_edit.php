<?php include '_header.php'; ?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Udah Data User</h5>
        <div class="card-body">
            <h5 class="card-title">Form Edit User</h5>

            <?php
            $id_user = $_GET['id_user'];
            // $nama_user = $_GET['nama_user'];
            // $username = $_GET['username'];
            // $password = $_GET['password'];
            $data = mysqli_query($con, "SELECT * FROM user WHERE id_user = '$id_user'");
            $row = mysqli_fetch_array($data); ?>

            <form action="proses_user_edit.php" method="POST">
                <input type="hidden" name="id_user" class="form-control" value="<?= $row['id_user'] ?>">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_user" class="form-control" value="<?= $row['nama_user'] ?>">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" value="<?= $row['username'] ?>">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" value="<?= $row['password'] ?>">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-danger ">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary ">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- ./content -->
<?php include '_footer.php'; ?>

<!-- onclick="history.go(-1)" -->