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


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Prestasi</h1>
            <a class="btn btn-primary mt-2 mb-3" href="prestasi_add.php">+ TAMBAH</a>
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
                                            <td><button class="btn btn-sm btn-danger delete" id="<?= $d['id_prestasi']; ?>"><i class="fas fa-trash"></i></button></td>
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
    <!-- End of Main Content -->
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