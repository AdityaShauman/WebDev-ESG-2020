<?php

if(!isset($_SESSION)){
    session_start();
}

require "regis.php";
require "connectdb.php";


if (isset($_SESSION["submit"])){
    header("Location: ./admin/index.php");
    exit;
}

if(isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["email"] = $row["email"];
            $_SESSION["nama"] = $row["nama"];
            $_SESSION["login"] = true; 

            $_SESSION["message"] = "Berhasil Login";
            header("Location: ./admin/index.php");
            exit;
        };
    }
    $error = true ;
}
?>