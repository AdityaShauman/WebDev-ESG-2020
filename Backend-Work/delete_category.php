<?php 
session_start();
if(isset($_SESSION['login'])){
    include "connectdb.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $delete = mysqli_query($conn,"DELETE FROM category WHERE id_cat='$id'");
        if($delete){
            header('Location:galleryadmin.php?alert=delsuccess');
        }else{
            header('Location:galleryadmin.php?alert=delerror');
        }
    }else{
        header('Location:feedback_list.php');
    }    
}else{
    header('location:feedback_list.php');
}