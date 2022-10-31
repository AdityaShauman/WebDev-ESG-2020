<?php include "header.php"; 
    if(isset($_POST)){
        if(!empty($_POST['nama'])&&!empty($_POST['prestasi'])&&
        !empty($_POST['jenis_lomba'])&&!empty($_POST['penyelenggara'])&&
        !empty($_POST['tingkat'])&&!empty($_POST['tahun'])){
            if(isset($_FILES['gambar'])){
                $exp = explode('.',$_FILES['gambar']['name']);
                $eks = end($exp);
                $path = '../assets/img/';
                $temp = $_FILES['gambar']['tmp_name'];
                $size = $_FILES['gambar']['size'];
                $filename = 'juaralomba'.time().$eks;
                $nama = $_POST['nama']; $prestasi = $_POST['prestasi']; $jenis = $_POST['jenis_lomba'];
                $tingkat = $_POST['tingkat']; $penyelenggara = $_POST['penyelenggara']; $tahun = $_POST['tahun']; 
                $insert = mysqli_query($conn,"INSERT INTO prestasi (nama,prestasi,jenis_lomba,penyelenggara,tingkat,tahun) VALUES ('$nama','$prestasi','$jenis','$penyelenggara','$tingkat','$tahun')");
                $valid = array('jpg','png','jpeg','gif');
                if($size>5000000){
                    if(in_array($eks,$valid)){
                        if($insert&&move_uploaded_file($temp,$path.$filename)){
                            $_SESSION['alert']='add-success';
                            echo "<script>window.location.replace('prestasi.php');</script>";
                        }else{
                            $_SESSION['alert']='server-error';
                            echo "<script>window.location.replace('prestasi_add.php');</script>";
                        }
                    }else{
                        $_SESSION['alert']='invalid-format';
                        echo "<script>window.location.replace('prestasi_add.php');</script>";
                    }
                }else{
                    $_SESSION['alert']='size-limit';
                    echo "<script>window.location.replace('prestasi_add.php');</script>";
                }
            }else{
                $nama = $_POST['nama']; $prestasi = $_POST['prestasi']; $jenis = $_POST['jenis_lomba'];
                $tingkat = $_POST['tingkat']; $penyelenggara = $_POST['penyelenggara']; $tahun = $_POST['tahun']; 
                $insert = mysqli_query($conn,"INSERT INTO prestasi (nama,prestasi,jenis_lomba,penyelenggara,tingkat,tahun) VALUES ('$nama','$prestasi','$jenis','$penyelenggara','$tingkat','$tahun')");
                if($insert){
                    $_SESSION['alert']='add-success';
                    echo "<script>window.location.replace('prestasi.php');</script>";
                }else{
                    $_SESSION['alert']='server-error';
                    echo "<script>window.location.replace('prestasi_add.php');</script>";
                }
            }
        }else{
            $_SESSION['alert']='incomplete';
            echo "<script>window.location.replace('prestasi_add.php');</script>";
        }
    }
?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Prestasi</h1>
            <a class="btn btn-primary mt-2 mb-3" href="prestasi.php">< KEMBALI</a>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Prestasi</h6>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="my-2">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" name="gambar" maxlength="50">
                        </div>
                        <div class="my-2">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" maxlength="50" required>
                        </div>
                        <div class="my-2">
                            <label for="prestasi">Prestasi</label>
                            <input type="text" class="form-control" name="prestasi" maxlength="50" required>
                        </div>
                        <div class="my-2">
                            <label for="jenis_lomba">Jenis Lomba</label>
                            <input type="text" class="form-control" name="jenis_lomba" maxlength="50" required>
                        </div>
                        <div class="my-2">
                            <label for="penyelenggara">Penyelenggara</label>
                            <input type="text" class="form-control" name="penyelengggara" maxlength="50" required>
                        </div>
                        <div class="my-2">
                            <label for="tingkat">Tingkat</label>
                            <input type="text" class="form-control" name="tingkat" maxlength="50" required>
                        </div>
                        <div class="my-2">
                            <label for="tahun">tahun</label>
                            <input type="text" class="form-control" name="tahun" maxlength="50" required>
                        </div>
                        <div class="mt-3">
                            <input class="form-control btn btn-primary" type="submit" name="submit" value="SAVE">
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php include "footer.php"; ?>