<<<<<<< HEAD
<!-- Warning: Trying to access array offset on value of type null in C:\xampp\htdocs\ESG-WEB-DEVELOPMENT-main\backend_work\info_lomba.php on line 7 -->
<?php 
$page = 'Info Lomba';
include "header.php";
$ach1 = mysqli_query($conn,"SELECT * FROM achievement ORDER BY id_achievement DESC LIMIT 12");
while($d=mysqli_fetch_assoc($ach1)){
    $data[] = $d;
}
$total = count($data);
$cat = mysqli_query($conn,"SELECT * FROM comp_cat");
?>
    <section class="contact-sec">
        <!---Section Title--->
        <section id="title">
            <div class="container mb-3">
                <h2 class="title"> 
                    <b>
                    <font color="#273793">Hall of Fame</font>
                    </b> 
                </h2>
            </div>
        </section>
        <section id="carousel-activity">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">   
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <?php 
                    $count = 0;
                    if($total<4){
                        $max = $total;
                    }
                    while($count<4):
                    ?>
                    <div class="col"><img src="./assets/img/<?= $data[$count]['picture']; ?>" width="250" alt="<?= $data[$count]['activity']; ?>" ></div>   
                    <?php 
                    $count++;
                    endwhile; ?>       
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <?php 
                    $count = 0;
                    $id = 4;
                    if($total>4):
                        if($total%4==0){
                            $max = 4;
                            if($total>8){
                                $max = 4;
                            }
                        }else{
                            $max=$total%4;
                            if($total>8){
                                $max = 4;
                            }
                        }
                        while($count<$max):
                    ?>
                    <div class="col"><img src="./assets/img/<?= $data[$id]['picture']; ?>" width="250" alt="<?= $data[$id]['activity']; ?>" ></div>   
                    <?php 
                    $id++;
                    $count++;  
                    endwhile;
                    endif; 
                    ?>       
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <?php 
                    $count = 0;
                    $id = 8;
                    if($total>8):
                        if($total%4==0){
                            $max = 4;
                        }else{
                            $max=$total%4;
                        }
                        while($count<$max):
                    ?>
                    <div class="col"><img src="./assets/img/<?= $data[$id]['picture']; ?>" width="250" alt="<?= $data[$id]['activity']; ?>" ></div>   
                    <?php 
                    $id++;
                    $count++;
                        endwhile; 
                    endif;
                    ?>       
                  </div>
                </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </section>
                </section>

    <section class = "calendersec">            
        <!---Section Title--->
        <section id="title">
            <div class="container">
                <h2 class="title"> 
                    <b>
                    <font color="black">Info Lomba</font>
                    <font color="#273793">ERP Studygroup</font>
                    </b> 
                </h2>
            </div>
        </section>

        <section id="card-lomba">
            <div style="padding-left: 3cm; padding-right: 3cm;">
                <div class="row">
                    <?php while($i=mysqli_fetch_assoc($cat)): ?>
                    <div class="col-lg-4 col-md-2 my-2">
                      <div class="card" style="background-color: #273793; color: white;">
                        <div class="card-body">
                          <h5 class="card-title d-flex justify-content-center p-3"><?= $i['cat_name']; ?></h5>
                          <div class="d-flex justify-content-center">
                            <a href="#" data-target="#comp<?= $i['id_comp_cat']; ?>" data-toggle="modal" class="btn d-flex justify-content-center" style="background-color: #DCD6FF; width: 85%;"><b>Cek Detail</b></a>
                            <div id="comp<?= $i['id_comp_cat']; ?>" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                  <div class="modal-content" style="background: #273793; width: 800px; height: 500px; margin-left: -150px;">
                                  <div class="modal-body" style="background: #273793;">
                                      <button data-dismiss="modal" class="close" style="color: #FFFFFF;">&larr;</button>
                                      <h5><b><a style="margin-left: 35px;"><font color="white"><?= $i['cat_name']; ?></font></a></b></h5>
                                      <hr color="white">
                                      <div class="container">
                                        <div class="row shadow rounded">
                                            <div class="col-12">
                                                <table class="table border-light mx-3 mt-3 text-light">
                                                    <tbody>
                                                        <?php 
                                                        $id_cat = $i['id_comp_cat'];
                                                        $lomba = mysqli_query($conn, "SELECT * FROM competition WHERE id_comp_cat='$id_cat'");
                                                        $nomor = 1;
                                                        while($x=mysqli_fetch_assoc($lomba)) :?>
                                                        <tr>
                                                            <td><strong><?= $nomor; ?>.</strong></th>
                                                            <td><?= $x['title']; ?></td>
                                                            <td>
                                                                <div class="d-flex justify-content-end">
                                                                    <a class="btn ml-2" href="<?= $x['gb_link']; ?>" style="color:black; background: #85B6FF; font-size: 12px;">LINK GUIDEBOOK</a>
                                                                    <a class="btn ml-2" href="<?= $x['ig_link']; ?>" style="color:black; background: #85B6FF; font-size: 12px; padding-left: 0.3cm; margin: bottom 1px;">LINK INSTAGRAM</a>
                                                                </div>
                                                            
                                                            </td> 
                                                        </tr>
                                                        <?php 
                                                        $nomor++;
                                                        endwhile; ?>
                                                    </tbody>
                                                </table>
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
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
                
        <!---Section Title--->
        <section id="title-kalendar">
            <div class="container">
                <h2 class="title"> 
                    <b>
                    <font color="#273793">Kalendar</font>
                    </b> 
                </h2>
            </div>
        </section>

        <section id="kalender">
            <div class="container">
    <h2 align="center" style="color: #273793; font-size: 24;">May 2022</h2>
    <br />

    <table bgcolor="lightgrey" align="center" cellspacing="21" cellpadding="21" class="mb-5">

      <caption align="top">
      </caption>

      <thead>
          <tr>
              <th style="color: white; background: #273793;">
                  Sun</th>
              <th style="color: white; background: #273793;">
                  Mon</th>
              <th style="color: white; background: #273793;">
                  Tue</th>
              <th style="color: white; background: #273793;">
                  Wed</th>
              <th style="color: white; background: #273793;">
                  Thu</th>
              <th style="color: white; background: #273793;">
                  Fri</th>
              <th style="color: white; background: #273793;">
                  Sat</th>
          </tr>
      </thead>

      <tbody>
          <tr>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
              <td>5</td>
              <td>6</td>
              <td>7</td>
          </tr>
          <tr></tr>
          <tr>
              <td>8</td>
              <td>9</td>
              <td>10</td>
              <td>11</td>
              <td>12</td>
              <td>13</td>
              <td>14</td>
          </tr>
          <tr>
              <td>15</td>
              <td>16</td>
              <td>17</td>
              <td>18</td>
              <td>19</td>
              <td>20</td>
              <td>21</td>
          </tr>
          <tr>
              <td>22</td>
              <td>23</td>
              <td>24</td>
              <td>25</td>
              <td>26</td>
              <td>27</td>
              <td>28</td>
          </tr>
          <tr>
              <td>29</td>
              <td>30</td>
              <td>31</td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
          </tr>
      </tbody>
  </table>
            </div>
        </section>
        </section>                                                    

        <section class="mt-5">
            <div class="container">
              <p class="title-socmed"><b>Find us on social media!</b></p>
              <div id="social-media">
                <div class="container">
                  <center>
                    <table class="text-center">
                      <tr>
                        <td style="padding : 30px">
                          <a href=""><button class="btn-socmed"><i class="fab fa-youtube stroke-transparent"></i></button></a>
                          <p style="margin-top: 0.3cm;"><b>ERP Laboratory</b></p>
                        </td>
                        <td style="padding : 30px">
                          <a href=""><button class="btn-socmed"><i class="fab fa-line stroke-transparent"></i></button></a>
                          <p style="margin-top: 0.3cm;"><b>@dny3610n</b></p>
                        </td>
                        <td style="padding : 30px">
                          <a href=""><button class="btn-socmed"><i class="fab fa-instagram stroke-transparent"></i></button></a>
                          <p style="margin-top: 0.3cm;"><b>@erpstudygroup</b></p>
                        </td>
                        <td style="padding : 30px">
                          <a href=""><button class="btn-socmed"><i class="fab fa-linkedin stroke-transparent"></i></button></a>
                          <p style="margin-top: 0.3cm;"><b>ERP Study Group</b></p>
                        </td>
                      </tr>
                    </table>
                  </center>
                </div>
              </div>
            </div>
          </section>

          <footer style=" background-color: #273793; color:#FFFFFF; padding-top: 20px; padding-bottom: 2px;">
            <div class="container text-center">
              <p><b><i>@ERP Study Group 2019</i></b></p>
            </div>
          </footer>
    </body>
=======
<?php 
$page = 'Info Lomba';
include "header.php";
$ach1 = mysqli_query($conn,"SELECT * FROM prestasi WHERE gambar IS NOT NULL ORDER BY id_prestasi DESC LIMIT 12");
$cat = mysqli_query($conn,"SELECT * FROM comp_cat");
?>
    <section class="contact-sec">
        <!---Section Title--->
        <section id="title">
            <div class="container mb-3">
                <h2 class="title"> 
                    <b>
                    <font color="#273793">Hall of Fame</font>
                    </b> 
                </h2>
            </div>
        </section>
        <section id="carousel-activity">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <?php if(mysqli_num_rows($ach1)>0): 
                  while($d=mysqli_fetch_assoc($ach1)){
                      $data[] = $d;
                  }
                  $total = count($data);  
                ?>
             <div class="carousel-indicators">   
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                
                <?php if($total>3): ?>
                <div class="carousel-item active">
                  <div class="row">
                    <?php 
                    $count = 0;
                    if($total<4){
                        $max = $total;
                    }
                    while($count<4):
                    ?>
                    <div class="col"><img src="./assets/img/<?= $data[$count]['gambar']; ?>" width="250" alt="<?= $data[$count]['jenis_lomba']; ?>" ></div>   
                    <?php 
                    $count++;
                    endwhile; ?>       
                  </div>
                </div>
                <?php endif; ?>
                <?php if($total>7): ?>
                <div class="carousel-item">
                  <div class="row">
                    <?php 
                    $count = 0;
                    $id = 4;
                    if($total>4):
                        if($total%4==0){
                            $max = 4;
                            if($total>8){
                                $max = 4;
                            }
                        }else{
                            $max=$total%4;
                            if($total>8){
                                $max = 4;
                            }
                        }
                        while($count<$max):
                    ?>
                    <div class="col"><img src="./assets/img/<?= $data[$id]['gambar']; ?>" width="250" alt="<?= $data[$id]['jenis_lomba']; ?>" ></div>   
                    <?php 
                    $id++;
                    $count++;  
                    endwhile;
                    endif; 
                    ?>       
                  </div>
                </div>
                <?php endif; ?>
                <?php if($total>11): ?>
                <div class="carousel-item">
                  <div class="row">
                    <?php 
                    $count = 0;
                    $id = 8;
                    if($total>8):
                        if($total%4==0){
                            $max = 4;
                        }else{
                            $max=$total%4;
                        }
                        while($count<$max):
                    ?>
                    <div class="col"><img src="./assets/img/<?= $data[$id]['gambar']; ?>" width="250" alt="<?= $data[$id]['jenis_lomba']; ?>" ></div>   
                    <?php 
                    $id++;
                    $count++;
                        endwhile; 
                    endif;
                    ?>       
                  </div>
                </div>
                <?php endif; ?>
                
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <?php endif; ?>
        </section>
                </section>
           
        <!---Section Title--->
        <section id="title">
            <div class="container">
                <h2 class="title"> 
                    <b>
                    <font color="black">Info Lomba</font>
                    <font color="#273793">ERP Studygroup</font>
                    </b> 
                </h2>
            </div>
        </section>

        <section id="card-lomba">
            <div style="padding-left: 3cm; padding-right: 3cm;">
                <div class="row">
                    <?php while($i=mysqli_fetch_assoc($cat)): ?>
                    <div class="col-lg-4 col-md-2 my-2">
                      <div class="card" style="background-color: #273793; color: white;">
                        <div class="card-body">
                          <h5 class="card-title d-flex justify-content-center p-3"><?= $i['cat_name']; ?></h5>
                          <div class="d-flex justify-content-center">
                            <a href="#" data-target="#comp<?= $i['id_comp_cat']; ?>" data-toggle="modal" class="btn d-flex justify-content-center" style="background-color: #DCD6FF; width: 85%;"><b>Cek Detail</b></a>
                            <div id="comp<?= $i['id_comp_cat']; ?>" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                  <div class="modal-content" style="background: #273793; width: 800px; height: 500px; margin-left: -150px;">
                                  <div class="modal-body" style="background: #273793;">
                                      <button data-dismiss="modal" class="close" style="color: #FFFFFF;">&larr;</button>
                                      <h5><b><a style="margin-left: 35px;"><font color="white"><?= $i['cat_name']; ?></font></a></b></h5>
                                      <hr color="white">
                                      <div class="container">
                                        <div class="row shadow rounded">
                                            <div class="col-12">
                                                <table class="table border-light mx-3 mt-3 text-light">
                                                    <tbody>
                                                        <?php 
                                                        $id_cat = $i['id_comp_cat'];
                                                        $lomba = mysqli_query($conn, "SELECT * FROM competition WHERE id_comp_cat='$id_cat'");
                                                        $nomor = 1;
                                                        while($x=mysqli_fetch_assoc($lomba)) :?>
                                                        <tr>
                                                            <td><strong><?= $nomor; ?>.</strong></th>
                                                            <td><?= $x['title']; ?></td>
                                                            <td>
                                                                <div class="d-flex justify-content-end">
                                                                    <a class="btn ml-2" href="<?= $x['gb_link']; ?>" style="color:black; background: #85B6FF; font-size: 12px;">LINK GUIDEBOOK</a>
                                                                    <a class="btn ml-2" href="<?= $x['ig_link']; ?>" style="color:black; background: #85B6FF; font-size: 12px; padding-left: 0.3cm; margin: bottom 1px;">LINK INSTAGRAM</a>
                                                                </div>
                                                            
                                                            </td> 
                                                        </tr>
                                                        <?php 
                                                        $nomor++;
                                                        endwhile; ?>
                                                    </tbody>
                                                </table>
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
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
                
        <!---Section Title--->
        <section id="title-prestasi">
            <div class="container">
                <h2 class="title"> 
                    <b>
                    <font color="#273793">Prestasi</font>
                    </b> 
                </h2>
                <table class="table my-5" id="tabel">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>Prestasi</th>
                      <th>Jenis Lomba</th>
                      <th>Penyelenggara</th>
                      <th>Tingkat</th>
                      <th>Angkatan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $query = mysqli_query($conn,"SELECT * FROM prestasi");
                    $i = 1;
                    while($d=mysqli_fetch_assoc($query)): ?>
                      <tr>
                        <td><?= $i; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['prestasi']; ?></td>
                        <td><?= $d['jenis_lomba']; ?></td>
                        <td><?= $d['penyelenggara']; ?></td>
                        <td><?= $d['tingkat']; ?></td>
                        <td><?= $d['tahun']; ?></td>
                      </tr>
                    <?php 
                    $i++;
                    endwhile; ?>
                  </tbody>
                </table>
            </div>
        </section>
                                             
<?php 
include "footer.php";
?>

>>>>>>> febaf176a97b19f965ac39b5bdd1321b1f4656d4
