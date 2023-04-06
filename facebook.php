<?php

session_start();
include'../env.php';
//*input collect
$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$author = $_REQUEST['author'];
$errors = [];

//*validation
 if(empty($title)){
    $errors['title_error']= "The email address or phone number is missing.</br>";
  } 

if(strlen('detail')>=8){
    $errors['detail_error']= "your passwprd is to long";
}else if(empty($detail)){
    $errors['detail_error']= "plese give password";
} 
if(empty($author)){
    $errors['author_error']= "please give your varification code"; 
}
if(count($errors) > 0){
    $_SESSION['form_error'] = $errors;
    $_SESSION['old']=$_REQUEST;
header("location:../hw7_validation.php");
}
else{
    $query="INSERT INTO posts(title, detail, author) VALUES ('$title','$detail','$author')";
    
    $response = mysqli_query($conn, $query);
    if($response){
        $_SESSION['msg']='successfully login';
        header("location:../hw7_validation.php");
    }
}

?>