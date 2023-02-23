<?php include "header.php";

if(isset($_GET['delete'])){
    $select = mysqli_query($conn,"SELECT * FROM competition WHERE id_comp='".$_GET['delete']."'");
    if(mysqli_num_rows($select)>0){
        $s = mysqli_fetch_assoc($select);
        $delete = mysqli_query($conn,"DELETE FROM competition WHERE id_comp='".$_GET['delete']."'");
        $_SESSION['alert'] = 'delete-success';
        echo "<script>window.location.replace('info.php');</script>";
    }else{
        $_SESSION['alert'] = 'delete-null';
        echo "<script>window.location.replace('info.php');</script>";
    }
}



if(!isset($_SESSION)){
    session_start();
}

require "info_add.php";
require "../connectdb.php";

if(isset($_POST["postlomba"])){
    if(adding($_POST)){
        echo "<script> 
        alert('Berhasil Menambah Lomba!');  
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

<title>Info</title>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    
</head>
<body>

<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Info</h1>
<a data-bs-toggle="modal" data-bs-target="#examplemodal"><button class="btn btn-primary mt-2 mb-3" >+ TAMBAH</button></a>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Informasi Lomba</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Guide Book</th>
                            <th>Sosial Media</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $info = mysqli_query($conn,"SELECT * FROM competition ORDER BY id_comp_cat DESC"); 
                            $i=1;
                            while($d=mysqli_fetch_assoc($info)): 
                        ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $d['title']; ?></td>
                                <td><?= $d['id_comp_cat']; ?></td>
                                <td><?= $d['gb_link']; ?></td>
                                <td><?= $d['ig_link']; ?></td>
                                <td><a><button class="btn btn-sm btn-danger delete" id="<?= $d['id_comp']; ?>"><i class="fas fa-trash"></i></button></a></td>
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
      <h1 class="modal-title fs-5" id="exampleModalLabel">Add Info Lomba</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <form method ="POST" form action="info.php" enctype="multipart/form-data">
<div class="mb-3">
<label for="namalomba" class="form-label">Nama</label>
<input type="text" class="form-control" id="namalomba" name="namalomba" placeholder="Masukkan Nama Lomba">
</div>

    <label for="catlomba" class="form-label">Kategori</label>
    <br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="lomba_cat" id="lomba_cat" value="1">
        <label class="form-check-label" for="roleuser">UI/UX</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="lomba_cat" id="lomba_cat" value="2">
        <label class="form-check-label" for="roleuser">Business Case</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="lomba_cat" id="lomba_cat" value="3">
        <label class="form-check-label" for="roleuser">KTI</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="lomba_cat" id="lomba_cat" value="4">
        <label class="form-check-label" for="roleuser">Hackaton</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="lomba_cat" id="lomba_cat" value="5">
        <label class="form-check-label" for="roleuser">Desain</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="lomba_cat" id="lomba_cat" value="6">
        <label class="form-check-label" for="roleuser">Debat</label>
    </div>

<br>
<div class="form-group">
<label class="control-label" for="prestasi">Guide Book</label>
<input class="form-control" id="linkgb" name="linkgb" placeholder="Masukkan Link Guidebook" type="text">
</div>


<div class="mb-3">
<label for="jenis" class="form-label">Instagram</label>
<input type="text" class="form-control" id="linkig" name="linkig" placeholder="Masukkan Link Instagram">
</div>


<div class="mb-3">
<div>
    <br><button class="btn btn-primary" type="submit" name="postlomba">Selesai</button>
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
                window.location.replace('info.php?delete='+$(this).attr('id'));
            } else if (result.isDenied) {
                Swal.fire('Delete Cancelled', '', 'info');
            }
            });
        });
    });
</script>
<?php include "footer.php"; ?>