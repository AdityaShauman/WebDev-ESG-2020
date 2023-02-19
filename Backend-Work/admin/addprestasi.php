<?php

    require('../connectdb.php');
    
    function adding($inputdata){
        global $conn;
        $pemenang = $inputdata['pemenang'];
        $prestasi = $inputdata['prestasi'];
        $jenis = $inputdata['jenis'];
        $penyelenggara = $inputdata['penyelenggara'];
        $tingkat = $inputdata['tingkat'];
        $tahun = $inputdata['tahun']; 
        $fotoprestasi = upfoto();
        
        $query = "INSERT INTO prestasi VALUES('', '$pemenang', '$prestasi','$jenis','$penyelenggara','$tingkat','$tahun','$fotoprestasi')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }



    function upfoto(){
        $fotofile = $_FILES['fotoprestasi']['name'];
        $fototmpname = $_FILES['fotoprestasi']['tmp_name'];
        move_uploaded_file("$fototmpname", "../assets/img/" . $fotofile);
        return $fotofile;
    }


?>