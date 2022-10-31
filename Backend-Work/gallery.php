<?php 
$page = 'Gallery';
include "header.php";
$category = mysqli_query($conn,"SELECT * FROM category");
?>

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
        <div class="container my-5">
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
                        <a class='font-trigger' href='#' data-target='#font' data-toggle='modal'><p class='text-center' style='color:#FFFFFF; font-size: 20px; margin-top: 40px; '><b>$d[category]</b></p></a>
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
                                              
                                            </ul>
                                            
                                        </div>
                                    </div> 
                                </div>
                            
                                </div>
                            </div>  
                        </div>
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
        

        <a class="login-trigger " href="galleryadmin.php" ><p class="text-center my-5" style="color:#273793; font-size: 12px;"><b><u>Login untuk tambahkan gambar</u></b></p></a>
    </section>
        
<?php 
include "footer.php";
?>