<?php
include_once('connection.php');
if(isset($_POST['stupdate'])){
    $oldnic=$_POST['oldnic'];
     $nic=$_POST['nic'];
      $name=$_POST['name'];
     $mobile=$_POST['mobile'];

    $query="SELECT * FROM student Where NIC='$nic'";
      $result=mysqli_query($conn,$query);
      if(mysqli_num_rows($result)>0){
          header("location:../stupdate.php?error=userexit");
            exit();
       }else{
    $query="UPDATE student SET NIC='$nic',Name='$name',Mobile='$mobile' WHERE NIC='$oldnic'";
    $result=mysqli_query($conn,$query);
    header("location:../student.php?error=updateok");
       }
} 

header("location:../student.php?error=updateok");

?> 
