<?php include "header.php";

if(isset($_GET['delete'])){
    $select = mysqli_query($conn,"SELECT * FROM kegiatan WHERE id_kegiatan='".$_GET['delete']."'");
    if(mysqli_num_rows($select)>0){
        $s = mysqli_fetch_assoc($select);
        $delete = mysqli_query($conn,"DELETE FROM kegiatan WHERE id_kegiatan='".$_GET['delete']."'");
        $_SESSION['alert'] = 'delete-success';
        echo "<script>window.location.replace('kegiatan_admin.php');</script>";
    }else{
        $_SESSION['alert'] = 'delete-null';
        echo "<script>window.location.replace('kegiatan_admin.php');</script>";
    }
}



if(!isset($_SESSION)){
    session_start();
}

require "kegiatan_add.php";
require "../connectdb.php";

if(isset($_POST["postkegiatan"])){
    if(adding($_POST)){
        echo "<script> 
        alert('Berhasil Menambah Kegiatan!');  
    </script>";
    }else{
        echo mysqli_error($connect);
    }
}
?>
<!-- Begin Page Content -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<title>Kegiatan</title>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    
</head>
<body>

<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Kegiatan</h1>
<a data-bs-toggle="modal" data-bs-target="#examplemodal"><button class="btn btn-primary mt-2 mb-3" >+ TAMBAH</button></a>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Kegiatan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Judul Kegiatan</th>
                            <th>Penanggung Jawab</th>
                            <th>Keterangan</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $info = mysqli_query($conn,"SELECT * FROM kegiatan ORDER BY id_kegiatan DESC"); 
                            $i=1;
                            while($d=mysqli_fetch_assoc($info)): 
                        ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $d['judul_kegiatan']; ?></td>
                                <td><?= $d['pj']; ?></td>
                                <td><?= $d['keterangan']; ?></td>
                                <td><?= $d['gambar_kegiatan']; ?></td>
                                <td><a><button class="btn btn-sm btn-danger delete" id="<?= $d['id_kegiatan']; ?>"><i class="fas fa-trash"></i></button></a></td>
                            </tr>
                            
                        <?php $i++; endwhile; ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->


    <!-- Form -->
    <div class="modal fade" id="examplemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Add Kegiatan</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <form method ="POST" form action="kegiatan_admin.php" enctype="multipart/form-data">
<div class="mb-3">
<label for="judulkegiatan" class="form-label">Judul Kegiatan</label>
<input type="text" class="form-control" id="judulkegiatan" name="judulkegiatan" placeholder="Masukkan Judul Kegiatan">
</div>


<div class="form-group">
<label class="control-label" for="pjkegiatan">Penanggung Jawab</label>
<input class="form-control" id="pjkegiatan" name="pjkegiatan" placeholder="Masukkan Penanggung Jawab" type="text">
</div>


<div class="mb-3">
<label for="tanggalkegiatan" class="form-label">Tanggal Kegiatan</label>
<input type="date" class="form-control" id="tanggalkegiatan" name="tanggalkegiatan">
</div>

<div class="form-group">
<label class="control-label" for="deskripsi">Deskripsi Kegiatan</label>
<br>
<textarea name="deskripsi" cols="40" rows="5"></textarea>
<!-- <input class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Kegiatan" type="text"> -->
</div>

<div class="form-group">
            <label for="image">Foto</label><br>
            <input type="file" class="form-control-file" id="image" name = "fotokegiatan">
</div>



<div class="mb-3">
<div>
    <br><button class="btn btn-primary" type="submit" name="postkegiatan">Selesai</button>
</div>
</div>
</form>
    </div>
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
                window.location.replace('kegiatan_admin.php?delete='+$(this).attr('id'));
            } else if (result.isDenied) {
                Swal.fire('Delete Cancelled', '', 'info');
            }
            });
        });
    });
</script>
<?php include "footer.php"; ?>