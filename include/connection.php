<?php
// $servername="nvtibaddegama.tech";
// $username="nvtibad1_ThisaraMadhusanka";
// $password="thisara0987";
// $dbname="nvtibad1_10_nvq_attestation";

$servername="localhost";
$username="root";
$password="";
$dbname="nvq_attestation";

    $conn=new mysqli($servername,$username,$password,$dbname);
    if (!$conn){
        die("connection failed".mysqli_connect_error());
    }
?> 