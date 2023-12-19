<?php
if(isset($_GET['deleteid'])){
    include_once('connection.php');
    $nic=$_GET['deleteid'];

    // $query="SELECT * FROM student_certificate Where Student NIC='$nic'";
    // $result=mysqli_query($conn,$query);
    // if(mysqli_num_rows($result)>0){
    //     header("location:../stupdate.php?error=cantdelete");
    //     exit();
    // }else{
    $query=" DELETE FROM Student WHERE NIC='$nic'";
    $result=mysqli_query($conn,$query);
    header("location:../student.php?error=deleteok");
    // }
}
?>

<?php
if(isset($_GET['deleteno'])){
    include_once('connection.php');
    $nic=$_GET['deleteno'];

    // $query="SELECT * FROM student_certificate Where Student NIC='$nic'";
    // $result=mysqli_query($conn,$query);
    // if(mysqli_num_rows($result)>0){
    //     header("location:../stupdate.php?error=cantdelete");
    //     exit();
    // }else{
    $query=" DELETE FROM Student_certificate WHERE Certificate_Serial_Number='$nic'";
    $result=mysqli_query($conn,$query);
    header("location:../certificate.php?error=deleteok");
    // }
}
?>