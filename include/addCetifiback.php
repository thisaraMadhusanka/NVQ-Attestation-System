<?php
include_once('connection.php');
if(isset($_POST['submit'])){
     $sno=$_POST['number'];
    $nic=$_POST['select'];
     $bno=$_POST['bno'];
     $date=$_POST['date'];


        $query="SELECT * FROM student_certificate Where Certificate_Serial_Number='$sno'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            header("location:../addCertificate.php?error=userexit");
            exit();
        }else{
    $query="INSERT into student_certificate(Certificate_Serial_Number,Student_NIC,Back_Serial_Number,Effective_Date)VALUES('$sno','$nic','$bno','$date')";
    $result=mysqli_query($conn,$query);
    header("location:../addCertificate.php?error=ok");
} 

 header("location:../certificate.php?error=ok");
}
?> 