<?php include "header.php";
?>
<!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Contact Us</h1>
            <a class="btn btn-primary mt-2 mb-3" href="prestasi_add.php">+ TAMBAH</a>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Pesan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Jurusan</th>
                                        <th>Email</th>
                                        <th>Feedback</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $kontak = mysqli_query($conn,"SELECT * FROM feedback ORDER BY tanggal DESC"); 
                                        $i=1;
                                        while($d=mysqli_fetch_assoc($kontak)): 
                                    ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $d['nama']; ?></td>
                                            <td><?= $d['nim']; ?></td>
                                            <td><?= $d['jurusan']; ?></td>
                                            <td><?= $d['email']; ?></td>
                                            <td><?= $d['feedback']; ?></td>
                                            <td></td>
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



<?php include "footer.php"; ?>