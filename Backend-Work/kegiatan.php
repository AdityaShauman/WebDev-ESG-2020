<?php 
$page = 'Kegiatan';

include "connectdb.php"; 
include "header.php"; 

$ent1 = mysqli_query($conn,"SELECT * FROM kegiatan");
while($d=mysqli_fetch_assoc($ent1)){
  $data[] = $d;
}
$total = count($data);

?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->

    </head>
    
    <body>
      <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
        body
        {
          background-image: url('bgkegiatan.png');
          background-repeat: no-repeat;
        }
        table {
            border-collapse: collapse;
            background: white;
            color: black;
        }
          
        th,
        td {
            font-weight: bold;
        }
      </style>
 
    
        <!---Section Title--->
        <section>
          <section id="title" >
            <div class="container mb-3">
                <h2 class="title"> 
                    <b>
                    <font color="#273793">Info Kegiatan</font>
                    </b> 
                </h2>
            </div>
        </section>
        <section id="carousel-activity">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <?php if(mysqli_num_rows($ent1)>0): 
                  while($d=mysqli_fetch_assoc($ent1)){
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
                    <div class="col"><img src="./assets/img/<?= $data[$count]['gambar_kegiatan']; ?>" width="250" alt="<?= $data[$count]['jenis_lomba']; ?>" ></div>   
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
                    <div class="col"><img src="./assets/img/<?= $data[$id]['gambar_kegiatan']; ?>" width="250" alt="<?= $data[$id]['jenis_lomba']; ?>" ></div>   
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
                    <div class="col"><img src="./assets/img/<?= $data[$id]['gambar_kegiatan']; ?>" width="250" alt="<?= $data[$id]['jenis_lomba']; ?>" ></div>   
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
                    <font color="black">Info Kegiatan</font>
                    <font color="#273793">ERP Studygroup</font>
                    </b> 
                </h2>
            </div>
        </section>

        <section id="card-lomba" style= "background: linear-gradient(0deg, #d1c9ff 5%, #FFFFFF 90%); padding-bottom: 50px;">
            <div style="padding-left: 3cm; padding-right: 3cm;">
                <div class="row">
                <?php foreach( $ent1 as $ent ) : ?>
                    <div class="col-sm-4">
                      <div class="card" style="background-color: #273793; color: white;">
                        <div class="card-body">
                          <h5 class="card-title d-flex justify-content-center p-3"><?= $ent['judul_kegiatan']; ?></h5>
                          <div class="d-flex justify-content-center">
                            <a href="#" data-target="#event<?= $ent['id_kegiatan']; ?>" data-toggle="modal" class="btn d-flex justify-content-center" style="background-color: #DCD6FF; width: 85%;"><b>Cek Detail</b></a>
                          </div>
                          <div id="event<?= $ent['id_kegiatan']; ?>" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                  <div class="modal-content" style="background: #ffffff; width: 800px; height: 600px; margin-left: -150px;">
                                  <div class="modal-body">
                                      <button data-dismiss="modal" class="close" style="color:#273793 ;">&larr;</button>
                                      <div class="container">
                                        <h2 class="text-center" style="color:#273793"><b><?= $ent['judul_kegiatan']; ?></b></h2>
                                        <h4 class="text-center" style="color:#273793">by <?= $ent['pj']; ?></h4>
                                        <br>
                                        <center>
                                          <img class="text-center" src="workshop odoo.png" alt="" width="90%">
                                          <br>
                                          <br>
                                          <p style="color: #273793; font-size: 14px; font-weight: normal; text-align: justify; margin-left: 35px; margin-right: 35px;"><?= $ent['keterangan']; ?></p>
                                          <br>
                                          <a class="btn" href="#" role="button" style="background-color: #273793; color: #ffff;">DAFTAR</a>
                                        </center>                                                                            
                                    </div>
                                  </div>
                                  </div>
                              </div>  
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    </body>
</html>
<?php include "footer.php"; ?>