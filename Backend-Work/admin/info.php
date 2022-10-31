<?php include "header.php";
?>
<!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Info</h1>
            <a class="btn btn-primary mt-2 mb-3" href="prestasi_add.php">+ TAMBAH</a>
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