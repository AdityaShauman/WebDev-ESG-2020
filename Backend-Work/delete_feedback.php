<?php 
session_start();
if(isset($_SESSION['login'])){
    include "connectdb.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $delete = mysqli_query($conn,"DELETE FROM feedback WHERE id_feedback='$id'");
        if($delete){
            header('Location:feedback_list.php?alert=delsuccess');
        }else{
            header('Location:feedback_list.php?alert=delerror');
        }
    }else{
        header('Location:feedback_list.php');
    }    
}else{
    header('location:feedback_list.php');
}
