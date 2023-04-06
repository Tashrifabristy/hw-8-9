<?php

session_start();
include '../env.php';
$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$author = $_REQUEST['author'];
$id=$_REQUEST['id'];
$errors=[];

if(empty($title)){
    $errors['title_error']="fill up your title";
}

if(empty($detail)){
    $errors['detail_error']="fill up your detail";
}
if(count($errors)>0){
    $_SESSION['form_error']= $errors; 
    header("Location:../editpost.php?id=$id");
}else{
    $query="UPDATE posts SET title='$title', detail='$detail', author='$detail' WHERE id='$id'";
    $response= mysqli_query($conn, $query);
    if($response){
        header("Location:../allpost.php");
    }
   
}  
?>