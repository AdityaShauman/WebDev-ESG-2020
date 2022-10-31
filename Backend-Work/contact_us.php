<?php 
$page = 'Contact Us';
include "header.php";
if(isset($_POST['submit'])){
    if(isset($_POST['nama'])&&($_POST['email'])){
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        $feedback = $_POST['pesan'];
        $date = date('Y-m-d', strtotime('+7hours'));
        $submit = mysqli_query($conn, "INSERT INTO feedback (nama,feedback,nim,jurusan,email,tanggal) VALUES ('$nama','$feedback','$nim','$jurusan','$email','$date')");
        if($submit){
            header('Location:contact_us.php?alert=success');
        }else{
            header('Location:contact_us.php?alert=server-error');
        }
    }else{
        header('Location:contact_us.php?alert=incomplete');
    }
}
if(isset($_GET['alert'])){
    $alert = $_GET['alert'];
    if($alert=='incomplete'){
        echo "
            <script>
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'Form Belum Terisi Dengan Lengkap!'
                })
            </script>
        ";
    }elseif($alert=='server-error'){
        echo "
            <script>
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'Terjadi gangguan pada server'
                })
            </script>
        ";
    }elseif($alert=='success'){
        echo "
            <script>
                Swal.fire({
                  icon: 'success',
                  title: 'Berhasil',
                  text: 'Terima kasih telah mengisi feedback :)'
                })
            </script>
        ";
    }
}
?>
<style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
        body{
            font-family: "Poppins";
        }
        .container-form{
            margin-left: 10cm;
            margin-right: 10cm;
            margin-top: 3cm;
        }
        .btn{
            background-color: #273793;
            color: white;
        }
        .form-label{
            color: #273793;
        }
    </style>
        <section class="contact-sec">
        <div class="container-form p-3">
            <form class="p-5" action="" method="post"> 
                <div class="mb-3" style="margin-top: -1cm;">
                    <h2 class="text-center" style="color: #273793;"><b>Contact Us</b></h2>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label"><b>Nama</b></label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" >
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="nim" class="form-label"><b>NIM</b></label>
                        <input type="text" class="form-control" placeholder="NIM" name="nim">
                    </div>
                    <div class="col">
                        <label for="Jurusan" class="form-label"><b>Jurusan</b></label>
                        <input type="text" class="form-control" placeholder="Jurusan Kuliah" name="jurusan">
                    </div>
                  </div>
                <div class="mb-3">
                    <label for="email" class="form-label"><b>Email</b></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label"><b>Pesan</b></label>
                    <textarea class="form-control" id="pesan" rows="3" name="pesan" placeholder="Pesan yang ingin anda sampaikan"></textarea>
                </div>

                <input type="submit" class="form-control btn mb-3" name="submit" value="Kirim Pesan">

        </div>
    </section>
    

<?php include "footer.php"; ?>