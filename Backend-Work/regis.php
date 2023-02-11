<?php 
    require "connectdb.php";
    function registrasi ($data){
        global $conn;

        $unameregis = strtolower(stripslashes($data["username"]));
        $namaregis = stripslashes($data["nama"]);
        $emailregis = stripslashes($data["useremail"]);
        $roleuser = stripslashes($data["roleuser"]);
        $passwordregis = mysqli_real_escape_string($conn,$data["userpassword"]);


        $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$emailregis' ");
        if(mysqli_fetch_assoc($result)){
            echo "<script> alert('Email telah dipakai') </script>";
            return false;
        }


        $password = password_hash($passwordregis, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO user VALUES (
            '$unameregis', '$namaregis', '$emailregis','$password','$roleuser'
        )");

        return mysqli_affected_rows($conn);

    }


    ?>