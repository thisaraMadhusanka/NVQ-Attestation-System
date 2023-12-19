<?php
include_once('connection.php');
if(isset($_POST['btnSubmit'])){
    $name=$_POST['username'];
    $password=md5($_POST['password']);
    $repassword=md5($_POST['repassword']);

        $query="SELECT * FROM user Where username='$name'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            header("location:../register.php?error=userexit");
            exit();
        }else{
    $query="INSERT into user(username,password)VALUES('$name','$password')";
    $result=mysqli_query($conn,$query);
    header("location:../register.php?error=ok");
} 
}
header("location:../index.php?error=ok");

?> 