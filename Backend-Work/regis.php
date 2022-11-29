<?php 
    require "connectdb.php";
    function registrasi ($data){
        global $conn;

        $unameregis = stripslashes($data["unameregis"]);
        $namaregis = stripslashes($data["namaregis"]);
        $emailregis = stripslashes($data["emailregis"]);
        $passwordregis = mysqli_real_escape_string($conn,$data["passwordregis"]);


        $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$emailregis' ");
        if(mysqli_fetch_assoc($result)){
            echo "<script> alert('Email telah dipakai') </script>";
            return false;
        }


        $password = password_hash($passwordregis, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO user VALUES (
            '$unameregis', '$namaregis', '$emailregis','$password'
        )");

        return mysqli_affected_rows($conn);

    }


    ?>