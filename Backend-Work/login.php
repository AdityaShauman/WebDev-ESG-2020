<?php 
$page = 'Login';
include "header.php";?>

        <!---Section Title--->
        <section id="title">
            <div class="container">
                <h2 class="title"> 
                    <b>
                    <font color="black">MASUK</font>
                    </b> 
                </h2>
            </div>
        </section>
        <section id="login">
          <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto">
                    <form action="checkin.php" method="POST">
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>Email</b></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><b>Kata Sandi</b></label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" name="password" placeholder="name@example.com">
                    </div>
                    <div class="d-grid gap-2">
                    <button class="btn btn-primary" style="background-color:#273793" type="submit" name="submit"><b>Masuk</b></button>
                    </div>
                    </form>
                    <a class="mt-3 d-flex justify-content-center text-center" style="color:#273793" href=""><b>Lupa Password?</b></a>
                </div>
            </div>
          </div>
        </section>

<?php include "footer.php";?>