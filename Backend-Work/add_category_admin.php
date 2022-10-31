<?php 
session_start();
$page = 'Gallery';
include "header.php"; 
if(!isset($_SESSION['login'])){
    include "login.php";
    exit;
}
if(isset($_POST['submit'])){
    $catname = $_POST['kategori'];
    $date = date('Y');
    $upload_dir = "./assets/uploads/$date/";
    if(!is_dir($upload_dir)){
        mkdir($upload_dir,0777,true);
    }
    $tempname = $_FILES['file']['tmp_name'];
    $filename = crc32(date('Y-m-d H:i:s')).$_FILES['file']['name'];
    $filesize = $_FILES['file']['size'];
    $move = move_uploaded_file($tempname, $upload_dir.$filename);
    if($filesize<2*1024*1024){
        if($move){
            $save = mysqli_query($conn,"INSERT INTO category (category,year,image) VALUES ('$catname','$date','$filename')");
            if($save){
                header('location:galleryadmin.php?alert=cat-success');
            }else{
                header('location:add_category_admin.php?err=server-error');
            }  
        }else{
            header('location:add_category_admin.php?err=server-error');
        }
    }else{
        header('location:add_category_admin.php?err=max-size-exceeded');
    }
}
?>


    <section style="margin-top: 12rem; margin-bottom: -1px; background: linear-gradient(0deg, #d1c9ff 5%, #FFFFFF 90%); padding-bottom: 50px;">
        
        <form method="post" action="" enctype="multipart/form-data">
            <div class="row justify-content-center">
            <div class="col-lg-5 col-lg-offset-5 ">
            <div class="card h-100">
            <div class="card-body" style="box-shadow: 1px 1px 5px 5px lightgrey; border-radius: 10px;"> 
                <div class="col text-left" style="margin-left: 25px;"><a class="close" href="galleryadmin.php" role="button">&larr;</a></div>
                <div class="col text-center">
                    <h3><b><font color="#273793">Tambah Kategori</font></b></h3>
                </div>
                <div class="form-group">
                    <p style="color:#273793;"><b>Nama Kategori</b></p>
                    <input required type="text" name="kategori" class="form-control" placeholder="Nama Kategori" aria-describedby="helpId">
                </div>
                <div class="">
                    <input type="file" name="file" class="password form-control"/>
                </div>
                <div class="form-group  text-center" style="margin-top: 30px">
                    <input type="submit" class="btn" name="submit" style="background-color: #273793; color:#FFFFFF; border-radius: -1cm; width: 470px;" value="Tambah" role="button"> 
                </div>
                </div>
                </div>
            </div> 
            </div>
          </div>
        </form>
        </section>


<?php include "footer.php"; ?>