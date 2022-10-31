<?php 
$page = 'Feedback';
include "header.php";
if(!isset($_SESSION['login'])){
    include "login.php";
    exit;
}
$feedback = mysqli_query($conn,"SELECT * FROM feedback");
// tangkap alert
if(isset($_GET['alert'])){
    if($_GET['alert']=='delsuccess'){
        echo "
            <script>
                Swal.fire({
                  icon: 'success',
                  title: 'Berhasil',
                  text: 'Feedback berhasil dihapus'
                })
            </script>
        ";
    }elseif($_GET['alert']=='delerror'){
        echo "
            <script>
                Swal.fire({
                  icon: 'error',
                  title: 'Gagal',
                  text: 'Terjadi error saat menghapus feedback'
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
        .container-feedback{
            margin-left: 10cm;
            margin-right: 10cm;
            margin-top: 3cm;
            border-radius: 0.5cm;
            border-color: brown;
        }
        .btn{
            background-color: #273793;
            color: white;
        }
        .form-label{
            color: #273793;
        }
</style>
    <section>
        <div class="container-feedback">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">FEEDBACK</th>
                        <th scope="col">NIM</th>
                        <th scope="col">JURUSAN</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">TANGGAL</th>
                        <th scope="col"><b>. . .</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(mysqli_num_rows($feedback)>0){
                            $i = 1;
                            while($d=mysqli_fetch_assoc($feedback)){
                                echo "
                                    <tr>
                                        <td scope='row'>$i</td>
                                        <td>$d[nama]</td>
                                        <td>$d[feedback]</td>
                                        <td>$d[nim]</td>
                                        <td>$d[jurusan]</td>
                                        <td>$d[email]</td>
                                        <td>$d[tanggal]</td>
                                        <td><a href='delete_feedback.php?id=$d[id_feedback]' class='delete' style='text-decoration:none; color:#000000'><i class='fas fa-trash-alt'></i></a></td>
                                    </tr>
                                ";
                                $i++;
                            }
                        }else{
                            echo "<tr><center>Data Belum Tersedia</center></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    
    
    <script>
    
        $('.delete').click(function(e){
            e.preventDefault();
            var link = $(this).attr('href');
        
            Swal.fire({
              title: 'Peringatan',
              icon: 'warning',
              text: 'Anda yakin untuk menghapus feedback ini?',
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
    
    
<?php include "footer.php"; ?>