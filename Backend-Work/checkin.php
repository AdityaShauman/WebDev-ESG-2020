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
    $username = strtolower($_POST["username"]);
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["email"] = $row["email"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["login"] = true; 

            $_SESSION["message"] = "Berhasil Login";
            header("Location: ./admin/index.php");
            exit;
        };
    }
    $error = true ;
}
?>