<?php 
session_start();
$page = 'Gallery';
include "header.php"; 
if(!isset($_SESSION['login'])){
    include "login.php";
    exit;
}
$category = mysqli_query($conn,"SELECT * FROM category");
?>

  <body class="gallerysec">

    <!---Section Title--->
    <section id="title">
      <div class="container mb-3">
        <h2 class="title"> 
          <b>
          <font color="black">Gallery</font>
          <font color="#273793">ERP Studygroup</font>
          </b> 
        </h2>
        </div>
      </div>
    </section>
      
      <section id="kategori">
        <div class="container mt-5 mb-5">
          <center><p class="title-about-us"><b>Kategori</b></p></center>
          <div class="row row-cols-1 row-cols-md-2 g-4">
              <?php
                    if(mysqli_num_rows($category)>0){
                            $i = 1;
                            while($d=mysqli_fetch_assoc($category)){
                                echo "
            <div class='col'>
              <div class='card' style='height: 150px;  background-color: #273793;'>
                <div class='row g-0'>
                    <div class='col-md-4 p-4'>
                      <img src='./assets/uploads/$d[year]/$d[image]' class='img-fluid' alt='...'>
                    </div>
                    <div class='col-md-8'>
                      <div class='card-body'>
                        <a class='font-trigger' href='#' data-target='#font' data-toggle='modal'><p class='text-center' style='color:#FFFFFF; font-size: 20px; margin-top: 40px; '><b>Study Group</b></p></a>
                        <div id='font' class='modal fade' role='dialog'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                <div class='modal-body'>
                                    <button data-dismiss='modal' class='close' >&larr;</button>
                                    <h4><b><font color='#273793'>ERP Studygroup</font></b></h4>
                                    <div class='col-sm-5'>
                                        <div class='card' style='width: 10rem; background-color: #273793;'>
                                            <img class='card-img-top' src='https://image.freepik.com/free-photo/tv-cabinet-interior-wall-mockup-modern-empty-room-minimal-design-3d-rendering_41470-4060.jpg' alt='Card image cap'>
                                            <ul class='list-group list-group-flush'>
                                              <li class='list-group-item' style='background-color: #273793;'><p class='card-text' style='color: #FFFFFF; text-align: center;'>Workshop CRM</p></li>
                                              <li class='list-group-item' style='background-color: #273793;'>
                                                <center>
                                                  <a><button class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#updateModal'><i class='far fa-edit' style='font-size:12px; text-align: center ;color: #FFFFFF;'></i></button></a>
                                                  <a><button class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#deleteModal'><i class='fa' style='font-size:12px; text-align: center ; color: #FFFFFF;'>&#xf00d</i></button></a>
                                                  </center>
                                              </li>
                                            </ul>
                                            
                                        </div>
                                    </div> 
                                </div>
                            
                                </div>
                            </div>  
                        </div>
                      </div>
                      <div class='card-body'>
                        <a href='#' class='btn btn-warning'  data-bs-toggle='modal' data-bs-target='#editModal' style='margin-top: -80px; margin-left: 200px; font-size: 12px; color: #FFFFFF;'>Edit</a>
                        <a href='delete_category.php?id=$d[id_cat]' class='btn btn-danger delete' style='margin-top: -128px; margin-left: 255px; font-size: 12px; color: #FFFFFF;'>Delete</a>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            
            ";}
            }else{
                echo "</div><center><p class='my-5'>Belum ada data</p></center>";
            }?>
          </div>

        <div class="container mt-5 mb-5">
            <div class="mt-3 d-flex justify-content-center">
              <a class="btn" href="add_category_admin.php" style="background-color: #273793; color:#FFFFFF; border-radius: 3cm;" role="button">Tambah Kategori</a>
            </div>
          </div>
        

        <!-- MODAL EDIT -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog ">
            <div class="modal-content">
              <div class="modal-body">
                <form>
                  <div class="row justify-content-center">
                        <div class="col text-left" style="margin-left: 50px;"><a class="close" href="galleryadmin_main.html" role="button">&larr;</a></div>
                        <h3 style="text-align: center;"><b><font color="#273793">Edit Kategori</font></b></h3>
                  </div>
                  <div class="form-group">
                    <p style="color:#273793;"><b>Nama Kategori</b></p>
                    <input required type="text" name="Kategori" class="form-control" placeholder="Nama Kategori" aria-describedby="helpId">
                  </div>
                  <div class="">
                    <input type="file" name="file-category" class="password form-control"/>
                  </div>
                  <div class="form-group  text-center" style="margin-top: 30px">
                    <a class="btn" href="galleryadmin_main.html" style="background-color: #273793; color:#FFFFFF; border-radius: -1cm; width: 470px;" role="button">Tambah</a> 
                  </div>
                </form>
              </div>
              </div>  
              </div>
              </div>
            </div>
          </div>
            
            <script>
    
                $('.delete').click(function(e){
                    e.preventDefault();
                    var link = $(this).attr('href');
                
                    Swal.fire({
                      title: 'Peringatan',
                      icon: 'warning',
                      text: 'Anda yakin untuk menghapus kategori ini?',
                      showDenyButton: true,
                      confirmButtonText: 'Hapus',
                      denyButtonText: 'Batal',
                    }).then((result) => {
                      /* Read more about isConfirmed, isDenied below */
                      if (result.isConfirmed) {
                        window.location.href = link
                      } else if (result.isDenied) {
                        Swal.fire('Informasi', 'Batal menghapus feedback', 'info')
                      }
                    })
                });
            
            </script>
            
          <!-- Modal Update -->
          <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <div class="modal-body">
                    <form>
                      <div class="row justify-content-center">
                            <div class="col text-left" style="margin-left: 50px;"><a class="close" href="galleryadmin_main.html" role="button">&larr;</a></div>
                            <h3 style="text-align: center;"><b><font color="#273793">Update Kegiatan</font></b></h3>
                      </div>
                      <div class="form-group">
                        <p style="color:#273793;"><b>Nama Kegiatan</b></p>
                        <input required type="text" name="Kategori" class="form-control" placeholder="Nama Kategori" aria-describedby="helpId">
                      </div>
                      <div class="">
                        <input type="file" name="file-category" class="password form-control"/>
                      </div>
                      <div class="form-group  text-center" style="margin-top: 30px">
                        <a class="btn" href="galleryadmin.php" style="background-color: #273793; color:#FFFFFF; border-radius: -1cm; width: 470px;" role="button">Tambah</a> 
                      </div>
                    </form>
                  </div>
                </div>               
                </div>  
                </div>
                </div>

      </section>
      

<?php include "footer.php"; ?>