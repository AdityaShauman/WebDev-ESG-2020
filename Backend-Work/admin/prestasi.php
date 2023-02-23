<?php include "header.php"; 
if(isset($_GET['delete'])){
    $select = mysqli_query($conn,"SELECT * FROM prestasi WHERE id_prestasi='".$_GET['delete']."'");
    if(mysqli_num_rows($select)>0){
        $s = mysqli_fetch_assoc($select);
        $delete = mysqli_query($conn,"DELETE FROM prestasi WHERE id_prestasi='".$_GET['delete']."'");
        if($delete){
            if(!empty($s['gambar'])){
                unlink('../assets/img/'.$s['gambar']);
                $_SESSION['alert'] = 'delete-success';
                echo "<script>window.location.replace('prestasi.php');</script>";
            }else{
                $_SESSION['alert'] = 'delete-success';
                echo "<script>window.location.replace('prestasi.php');</script>";
            }
        }else{

        }
    }else{
        $_SESSION['alert'] = 'delete-null';
        echo "<script>window.location.replace('prestasi.php');</script>";
    }
}
?>

<?php 

if(!isset($_SESSION)){
    session_start();
}

require "addprestasi.php";
require "../connectdb.php";

if(isset($_POST["postprestasi"])){
    if(adding($_POST)){
        echo "<script> 
        alert('Berhasil Registrasi!');  
    </script>";
    }else{
        echo mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Prestasi</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</head>
<body>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Prestasi</h1>
            <a data-bs-toggle="modal" data-bs-target="#examplemodal"><button class="btn btn-primary mt-2 mb-3" >+ TAMBAH</button></a>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Prestasi</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Prestasi</th>
                                        <th>Jenis Lomba</th>
                                        <th>Penyelenggara</th>
                                        <th>Tingkat</th>
                                        <th>Angkatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $prestasi = mysqli_query($conn,"SELECT * FROM prestasi ORDER BY tahun DESC"); 
                                        $i=1;
                                        while($d=mysqli_fetch_assoc($prestasi)): 
                                    ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?php if(!empty($d['gambar'])){echo "<img src='../assets/img/$d[gambar]' style='max-width:50px'></img>";}else{echo 'N/A';} ?></td>
                                            <td><?= $d['nama']; ?></td>
                                            <td><?= $d['prestasi']; ?></td>
                                            <td><?= $d['jenis_lomba']; ?></td>
                                            <td><?= $d['penyelenggara']; ?></td>
                                            <td><?= $d['tingkat']; ?></td>
                                            <td><?= $d['tahun']; ?></td>
                                            <td><a><button class="btn btn-sm btn-danger delete" id="<?= $d['id_prestasi']; ?>"><i class="fas fa-trash"></i></button></a></td>
                                        </tr>
                                        
                                    <?php $i++; endwhile; ?>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>

            <!-- Form -->
            <div class="modal fade" id="examplemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Add Prestasi</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method ="POST" form action="prestasi.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="pemenang" name="pemenang" placeholder="Masukkan Nama Pemenang">
        </div>
                    
        <br>
        <div class="form-group">
            <label class="control-label" for="prestasi">Prestasi</label>
            <input class="form-control" id="prestasi" name="prestasi" placeholder="Masukkan Prestasi" type="text">
        </div>
        
        <br>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Lomba</label>
            <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Masukkan Jenis Lomba">
        </div>
    
        <div class="mb-3">
            <label class="form-label">Penyelenggara</label><br>
            <input type="text" class="form-control" id="penyelenggara" name="penyelenggara" placeholder="Masukkan Penyelenggara">
        </div>

        <br>

        <div class="mb-3">
            <label class="form-label">Tingkat</label><br>
            <input type="text" class="form-control" id="tingkat" name="tingkat" placeholder="Masukkan Tingkat Lomba">
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun</label><br>
            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan tahun Lomba">
        </div>

        <div class="form-group">
            <label for="image">Foto</label><br>
            <input type="file" class="form-control-file" id="image" name = "fotoprestasi">
        </div>

    
        <div class="mb-3">
            <div>
                <br><button class="btn btn-primary" type="submit" name="postprestasi">Selesai</button>
            </div>
        </div>
    </form>
                </div>
              </div>
            </div>
          </div>
    <!-- End of Main Content -->
</body>
</html>
<script>
    $(document).ready(function(){
        $(".delete").click(function(){
            Swal.fire({
            icon: 'warning',
            title: 'Are you sure?',
            text: "Process cannot be undone",
            showDenyButton: true,
            confirmButtonText: 'Yes',
            denyButtonText: 'No',
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location.replace('prestasi.php?delete='+$(this).attr('id'));
            } else if (result.isDenied) {
                Swal.fire('Delete Cancelled', '', 'info');
            }
            });
        });
    });
</script>
<?php include "footer.php"; ?>