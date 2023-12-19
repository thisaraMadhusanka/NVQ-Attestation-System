<?php
session_start();
if(isset($_POST['btnSubmit'])){
    include('connection.php');
    $username=$_REQUEST['username'];
    $password=($_REQUEST['password']);
   
    $query="SELECT * from user WHERE username='$username' And password='$password'";
    $result=mysqli_query($conn,$query);
    
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
            $_SESSION['uid']=$row['username'];

            header("location:../homepage.php?error=login");
        }else{
            header("location:../index.php?error=invalid");
            exit();
        }
    }
    ?>
      