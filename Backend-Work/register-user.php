<?php 
$page = 'Registrasi';
include "header.php";?>

        <!---Section Title--->
        <section id="title">
            <div class="container">
                <h2 class="title"> 
                    <b>
                    <font color="black">Buat Akun Baru</font>
                    </b> 
                </h2>
            </div>
        </section>
        <section id="login">
          <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto">
                    <form action="login.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Username</b></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="unameregis" placeholder="">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Nama</b></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="namaregis" placeholder="">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Email</b></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="emailregis" placeholder="">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><b>Kata Sandi</b></label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" name="passwordregis" placeholder="">
                    </div>
                    <div class="mb-3">
                    <label for="image" class="form-label"><b>Foto</label></b><br>
                    <input type="file" class="form-control-file" id="image" name = "fotoprofil">
                    </div>
                    <div class="d-grid gap-2">
                    <button class="btn btn-primary" style="background-color:#273793" type="submit" name="register"><b>Daftarkan Akun</b></button>
                    </div>
                    </form>
                    <a class="mt-3 d-flex justify-content-center text-center" style="color:#273793" href="login.php"><b>Sudah Punya Akun?</b></a>
                </div>
            </div>
          </div>
        </section>

<?php include "footer.php";?>