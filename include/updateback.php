
<?php
include_once('connection.php');
if(isset($_POST['update'])){
   echo $oldnumber=$_POST['oldnumber'];
    $sno=$_POST['number'];
    $nic=$_POST['select'];
    $bno=$_POST['bno'];
    $date=$_POST['date'];

    $query="SELECT * FROM student_certificate Where Certificate_Serial_Number='$sno'";
      $result=mysqli_query($conn,$query);
      if(mysqli_num_rows($result)>0){
          header("location:../cetifiupdate.php?error=userexit");
            exit();
       }else{
        
    $query="UPDATE student_certificate SET Certificate_Serial_Number='$sno',Student_NIC='$nic',Back_Serial_Number='$bno',Effective_Date='$date' WHERE Certificate_Serial_Number='$oldnumber'";
    $result=mysqli_query($conn,$query);
    header("location:../certificate.php?error=updateok");
       
   }
      
} 

// header("location:../certificate.php?error=updateok");

?> 