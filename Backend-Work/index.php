<?php 
$page = 'Home';
include "header.php"; ?>

<!---SECTION TITLE DAN VIDEO-->
    <section id="title" style= "background-image: url(./assets/img/Frame.png); padding-bottom: 40px; margin-top: -15px;">
      <div class="container  mb-5">
        <h2 class="title"> 
          <b>
          <font color="black">Welcome To</font>
          <font color="#273793">ERP Studygroup</font>
          </b> 
        </h2>
        <!--video-->
        <div class="container">
          <center>
            <div class="row">
              <div class="mx-auto col-md-8">
                <video src="./assets/video/lab riset ess.mp4" style="border-radius:5px;width:100%" controls></video>
              </div>
            </div>
          </center>

        </div>
      </div>
    </section>

<!-- SECTION TENTANG KAMI DAN DIVISI -->    
    <section id="about-us" style= "background: linear-gradient(0deg, #d1c9ff 5%, #FFFFFF 90%); padding-bottom: 50px;">
      <div class="container mt-5 mb-5">
        <center><p class="title-about-us"><b>Tentang Kami</b></p></center>
        <p class="content-about-us">
         ERP Study Group merupakan salah satu study group yang berada dibawah naungan program S1 Sistem Informasi yang tergabung dalam Laboratorium Riset Enterprise System & Solution (ESS), Fakultas Rekayasa Industri, Telkom University. ERP Study Group berfungsi untuk mengkoordinir dan mengelola kegiatan maupun pelatihan terkait minat mahasiswa Sistem Informasi yang tergabung dalam Laboratorium ESS khususnya pada bidang Enterprise Resource Planning dengan harapan dapat menjadi wadah untukmahasiswa/i Sistem Informasi dalam mengembangkan potensinya lebih jauh.
        </p>
      
<!-- DIVISI -->      
      <center><p class="mt-5 title-activity"><b>Divisi</b></p></center>
        <div class="row g-3">
          <div class="col-md-4">
            <center><img src="./assets/img/core_ill.svg" style="max-height:150px">
            <p>Core</p></center>
          </div>
          <div class="col-md-4">
            <center><img src="./assets/img/rnp_ill.svg" style="max-height:150px">
            <p>Research and Project</p></center>
          </div>
          <div class="col-md-4">
            <center><img src="./assets/img/event_ill.svg" style="max-height:150px">
            <p>Event and Training</p></center>
          </div>
          <div class="col-md-4">
            <center><img src="./assets/img/pengmas_ill.svg" style="max-height:150px">
            <p>Community Service and Certification</p></center>
          </div>
          <div class="col-md-4">
            <center><img src="./assets/img/op_ill.svg" style="max-height:150px">
            <p>Operation</p></center>
          </div>
          <div class="col-md-4">
            <center><img src="./assets/img/compe_ill.svg" style="max-height:150px">
            <p>Competition</p></center>
          </div>
        </div>
       </div>
    </section>


<!-- SOCIAL MEDIA -->
    <section class="mt-5">
      <div class="container">
        <p class="title-socmed"><b>Find us on social media!</b></p>
        <div id="social-media">
          <div class="container">
            <center>
              <div class="row mt-5 mb-5">
                <div class="col-md-3 col-6">
                  <a href=""><button class="btn-socmed"><i class="fab fa-youtube stroke-transparent"></i></button></a>
                  <p style="margin-top: 0.3cm;"><b>ERP Laboratory</b></p>
                </div>
                <div class="col-md-3 col-6">
                  <a href=""><button class="btn-socmed"><i class="fab fa-line stroke-transparent"></i></button></a>
                    <p style="margin-top: 0.3cm;"><b>@dny3610n</b></p>
                </div>
                <div class="col-md-3 col-6">
                  <a href=""><button class="btn-socmed"><i class="fab fa-instagram stroke-transparent"></i></button></a>
                    <p style="margin-top: 0.3cm;"><b>@erpstudygroup</b></p>
                </div>
                <div class="col-md-3 col-6">
                  <a href=""><button class="btn-socmed"><i class="fab fa-linkedin stroke-transparent"></i></button></a>
                    <p style="margin-top: 0.3cm;"><b>ERP Study Group</b></p>
                </div>
              </div>
            </center>
          </div>
        </div>
      </div>
    </section>

<!-- FOOTER -->
<?php include "footer.php"; ?>