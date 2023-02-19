<?php 
$page = 'Kegiatan';

include "connectdb.php"; 
include "header.php"; 
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
              <div class="carousel-indicators">   
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col"><img src="kegiatan_crm.png" width="250" alt="1 slide" ></div>
                    <div class="col"><img src="kegiatan_crm.png" width="250" alt="2 slide" ></div>
                    <div class="col"><img src="kegiatan_crm.png" width="250" alt="3 slide" ></div>
                    <div class="col"><img src="kegiatan_crm.png" width="250" alt="4 slide" style="margin-right: 0.3cm;"></div>           
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col"><img src="kegiatan_crm.png" width="250" alt="1 slide"></div>
                    <div class="col"><img src="kegiatan_crm.png" width="250" alt="2 slide"></div>
                    <div class="col"><img src="kegiatan_crm.png" width="250" alt="3 slide"></div>
                    <div class="col"><img src="kegiatan_crm.png" width="250" alt="4 slide"></div>           
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col"><img src="kegiatan_crm.png" width="250" alt="1 slide"></div>
                    <div class="col"><img src="kegiatan_crm.png" width="250" alt="2 slide"></div>
                    <div class="col"><img src="kegiatan_crm.png" width="250" alt="3 slide"></div>
                    <div class="col"><img src="kegiatan_crm.png" width="250" alt="4 slide"></div>            
                  </div>
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
                    <div class="col-sm-4">
                      <div class="card" style="background-color: #273793; color: white;">
                        <div class="card-body">
                          <h5 class="card-title d-flex justify-content-center p-3">Workshop ODOO</h5>
                          <div class="d-flex justify-content-center">
                            <a href="#" data-target="#event" data-toggle="modal" class="btn d-flex justify-content-center" style="background-color: #DCD6FF; width: 85%;"><b>Cek Detail</b></a>
                            <div id="event" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                  <div class="modal-content" style="background: #ffffff; width: 800px; height: 600px; margin-left: -150px;">
                                  <div class="modal-body">
                                      <button data-dismiss="modal" class="close" style="color:#273793 ;">&larr;</button>
                                      <div class="container">
                                        <h2 class="text-center" style="color:#273793"><b>Workshop ODOO</b></h2>
                                        <h4 class="text-center" style="color:#273793">by Yumna Zahran</h4>
                                        <br>
                                        <center>
                                          <img class="text-center" src="workshop odoo.png" alt="" width="90%">
                                          <br>
                                          <br>
                                          <p style="color: #273793; font-size: 14px; font-weight: normal; text-align: justify; margin-left: 35px; margin-right: 35px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique malesuada amet, elit urna. Tempus viverra ac pharetra urna. Maecenas enim, aliquam porta lectus laoreet a massa malesuada ullamcorper. Iaculis vehicula eu eget pharetra, euismod nibh.</p>
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
                    </div>
                    <div class="col-sm-4">
                      <div class="card" style="background-color: #273793; color: white;">
                        <div class="card-body">
                          <h5 class="card-title d-flex justify-content-center p-3">Competition Training</h5>
                          <div class="d-flex justify-content-center">
                            <a href="#" class="btn d-flex justify-content-center" data-target="#event2" data-toggle="modal" style="background-color: #DCD6FF; width: 85%;"><b>Cek Detail</b></a>
                            <div id="event2" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content" style="background: #ffffff; width: 800px; height: 600px; margin-left: -150px;">
                                <div class="modal-body">
                                    <button data-dismiss="modal" class="close" style="color:#273793 ;">&larr;</button>
                                    <div class="container">
                                      <h2 class="text-center" style="color:#273793"><b>Competition Training</b></h2>
                                      <h4 class="text-center" style="color:#273793">by Amelia</h4>
                                      <br>
                                      <center>
                                        <img class="text-center" src="workshop odoo.png" alt="" width="90%">
                                        <br>
                                        <br>
                                        <p style="color: #273793; font-size: 14px; font-weight: normal; text-align: justify; margin-left: 35px; margin-right: 35px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique malesuada amet, elit urna. Tempus viverra ac pharetra urna. Maecenas enim, aliquam porta lectus laoreet a massa malesuada ullamcorper. Iaculis vehicula eu eget pharetra, euismod nibh.</p>
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
                    </div>
                    <div class="col-sm-4">
                        <div class="card" style="background-color: #273793; color: white;">
                          <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center p-3">UI/UX Training</h5>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn d-flex justify-content-center" data-target="#event3" data-toggle="modal" style="background-color: #DCD6FF; width: 85%;"><b>Cek Detail</b></a>
                                <div id="event3" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                    <div class="modal-content" style="background: #ffffff; width: 800px; height: 600px; margin-left: -150px;">
                                    <div class="modal-body">
                                        <button data-dismiss="modal" class="close" style="color:#273793 ;">&larr;</button>
                                        <div class="container">
                                          <h2 class="text-center" style="color:#273793"><b>UI/UX Training</b></h2>
                                          <h4 class="text-center" style="color:#273793">by Dimas</h4>
                                          <br>
                                          <center>
                                            <img class="text-center" src="workshop odoo.png" alt="" width="90%">
                                            <br>
                                            <br>
                                            <p style="color: #273793; font-size: 14px; font-weight: normal; text-align: justify; margin-left: 35px; margin-right: 35px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique malesuada amet, elit urna. Tempus viverra ac pharetra urna. Maecenas enim, aliquam porta lectus laoreet a massa malesuada ullamcorper. Iaculis vehicula eu eget pharetra, euismod nibh.</p>
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
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-4">
                      <div class="card" style="background-color: #273793; color: white;">
                        <div class="card-body">
                          <h5 class="card-title d-flex justify-content-center p-3">Photoshop Training</h5>
                          <div class="d-flex justify-content-center">
                            <a href="#" class="btn d-flex justify-content-center" data-target="#event4" data-toggle="modal" style="background-color: #DCD6FF; width: 85%;"><b>Cek Detail</b></a>
                            <div id="event4" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content" style="background: #ffffff; width: 800px; height: 600px; margin-left: -150px;">
                                <div class="modal-body">
                                    <button data-dismiss="modal" class="close" style="color:#273793 ;">&larr;</button>
                                    <div class="container">
                                      <h2 class="text-center" style="color:#273793"><b>Photoshop Training</b></h2>
                                      <h4 class="text-center" style="color:#273793">by Rafif</h4>
                                      <br>
                                      <center>
                                        <img class="text-center" src="workshop odoo.png" alt="" width="90%">
                                        <br>
                                        <br>
                                        <p style="color: #273793; font-size: 14px; font-weight: normal; text-align: justify; margin-left: 35px; margin-right: 35px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique malesuada amet, elit urna. Tempus viverra ac pharetra urna. Maecenas enim, aliquam porta lectus laoreet a massa malesuada ullamcorper. Iaculis vehicula eu eget pharetra, euismod nibh.</p>
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
                    </div>
                    <div class="col-sm-4">
                      <div class="card"style=" background-color: #273793; color: white;">
                        <div class="card-body">
                          <h5 class="card-title d-flex justify-content-center p-3">Pelatihan dan Sertifikasi</h5>
                          <div class="d-flex justify-content-center">
                            <a href="#" class="btn d-flex justify-content-center" data-target="#event5" data-toggle="modal" style="background-color : #DCD6FF; width: 85%;"><b>Cek Detail</b></a>
                            <div id="event5" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content" style="background: #ffffff; width: 800px; height: 600px; margin-left: -150px;">
                                <div class="modal-body">
                                    <button data-dismiss="modal" class="close" style="color:#273793 ;">&larr;</button>
                                    <div class="container">
                                      <h2 class="text-center" style="color:#273793"><b>Pelatihan dan Sertifikasi</b></h2>
                                      <h4 class="text-center" style="color:#273793">by Diandra</h4>
                                      <br>
                                      <center>
                                        <img class="text-center" src="workshop odoo.png" alt="" width="90%">
                                        <br>
                                        <br>
                                        <p style="color: #273793; font-size: 14px; font-weight: normal; text-align: justify; margin-left: 35px; margin-right: 35px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique malesuada amet, elit urna. Tempus viverra ac pharetra urna. Maecenas enim, aliquam porta lectus laoreet a massa malesuada ullamcorper. Iaculis vehicula eu eget pharetra, euismod nibh.</p>
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
                    </div>
                    <div class="col-sm-4">
                        <div class="card" style="background-color: #273793; color: white; ">
                          <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center p-3">Company Visit</h5>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn" data-target="#event6" data-toggle="modal" style="background-color: #DCD6FF; width: 85%;"><b>Cek Detail</b></a>
                                <div id="event6" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                    <div class="modal-content" style="background: #ffffff; width: 800px; height: 600px; margin-left: -150px;">
                                    <div class="modal-body">
                                        <button data-dismiss="modal" class="close" style="color:#273793 ;">&larr;</button>
                                        <div class="container">
                                          <h2 class="text-center" style="color:#273793"><b>Company Visit</b></h2>
                                          <h4 class="text-center" style="color:#273793">by WCS</h4>
                                          <br>                                         
                                          <center>
                                            <img class="text-center" src="workshop odoo.png" alt="" width="90%">
                                            <br>
                                            <br>
                                            <p style="color: #273793; font-size: 14px; font-weight: normal; text-align: justify; margin-left: 35px; margin-right: 35px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique malesuada amet, elit urna. Tempus viverra ac pharetra urna. Maecenas enim, aliquam porta lectus laoreet a massa malesuada ullamcorper. Iaculis vehicula eu eget pharetra, euismod nibh.</p>
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
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
<?php include "footer.php"; ?>