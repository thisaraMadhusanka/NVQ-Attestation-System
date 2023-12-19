<?php
include_once('connection.php');
if(isset($_POST['submit'])){
     $nic=$_POST['nic'];
      $name=$_POST['name'];
     $mobile=$_POST['mobile'];


        $query="SELECT * FROM Student Where NIC='$nic'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            header("location:../addStudent.php?error=userexit");
            exit();
        }else{
    $query="INSERT into Student(NIC,Name,Mobile)VALUES('$nic','$name','$mobile')";
    $result=mysqli_query($conn,$query);
    header("location:../addStudent.php?error=ok");
} 

header("location:../student.php?error=ok");
}
?> 