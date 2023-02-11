<?php include "header.php";
?>

<?php 

if(!isset($_SESSION)){
    session_start();
}

require "../regis.php";
require "../connectdb.php";

if(isset($_POST["register"])){
    if(registrasi($_POST)){
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

    <title>Admin</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</head>
<body>
<!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Kelola Admin</h1>
            <a data-bs-toggle="modal" data-bs-target="#examplemodal"><button class="btn btn-primary mt-2 mb-3" >+ TAMBAH</button></a>

            
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Admin Web</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $kontak = mysqli_query($conn,"SELECT * FROM user ORDER BY nama ASC"); 
                                        $i=1;
                                        while($d=mysqli_fetch_assoc($kontak)): 
                                    ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $d['username']; ?></td>
                                            <td><?= $d['nama']; ?></td>
                                            <td><?= $d['email']; ?></td>
                                            <td><?= $d['roleuser']; ?></td>
                                            <td><a href="delete.php?username=<?= $d['username'] ?>" class="btn btn-danger mx-4">Delete</a></td>
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
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method ="POST" form action="manage_admin.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Full Name">
        </div>
                    
        <br>
        <div class="form-group">
            <label class="control-label" for="username">Username</label>
            <input class="form-control" id="username" name="username" placeholder="Enter Username" type="text">
        </div>
        
        <br>
        <div class="mb-3">
            <label for="number" class="form-label">Email</label>
            <input type="email" class="form-control" id="useremail" name="useremail" placeholder="Enter Email">
        </div>
    
        <div class="mb-3">
            <label class="form-label">Password</label><br>
            <input type="text" class="form-control" id="password" name="userpassword" placeholder="Enter Password">
        </div>

        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="roleuser" id="roleuser" value="admin">
            <label class="form-check-label" for="roleuser">Administrator</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="roleuser" id="roleuser" value="member">
            <label class="form-check-label" for="roleuser">ESG Member</label>
        </div>
    
    
        <div class="mb-3">
            <div>
                <br><button class="btn btn-primary" type="submit" name="register">Selesai</button>
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
<?php include "footer.php"; ?>