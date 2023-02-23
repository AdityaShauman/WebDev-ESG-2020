<?php

    require('../connectdb.php');
    
    function adding($inputdata){
        global $conn;
        $judul = $inputdata['namalomba'];
        $kategori = $inputdata['lomba_cat'];
        $guidebook = $inputdata['linkgb'];
        $instagram = $inputdata['linkig'];

        
        $query = "INSERT INTO competition VALUES('', '$judul', '$kategori','$guidebook','$instagram')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }


?>