<?php
session_start();
if(isset($_POST['submit'])){
    if(isset($_POST['email'])&&isset($_POST['password'])){
        include "connectdb.php";
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $search = mysqli_query($conn,"SELECT * FROM user WHERE email='$email'");
        if(mysqli_num_rows($search)>0){
            $d = mysqli_fetch_assoc($search);
            if($password==$d['password']){
                $_SESSION['email']=$username;
                $_SESSION['password']=$password;
                $_SESSION['login']=TRUE;
                header("Location:./admin/index.php");
            }else{
                header("Location:login.php?alert=incorrect");
            }
        }else{
            header("Location:login.php?alert=nouser");
        }
    }
}