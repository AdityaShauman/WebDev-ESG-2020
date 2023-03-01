<?php

    require('../connectdb.php');
    
    function adding($inputdata){
        global $conn;
        $judulkegiatan = $inputdata['judulkegiatan'];
        $pjkegiatan = $inputdata['pjkegiatan'];
        $tanggalkegiatan = $inputdata['tanggalkegiatan'];
        $deskripsi = $inputdata['deskripsi'];
        $fotokegiatan = upfoto();
        
        $query = "INSERT INTO kegiatan VALUES('', '$judulkegiatan', '$pjkegiatan','$tanggalkegiatan','$deskripsi','$fotokegiatan')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    function upfoto(){
        $fotofile = $_FILES['fotokegiatan']['name'];
        $fototmpname = $_FILES['fotokegiatan']['tmp_name'];
        move_uploaded_file("$fototmpname", "../assets/img/" . $fotofile);
        return $fotofile;
    }

?>