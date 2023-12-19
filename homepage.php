<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NVQ Attestation System</title>
    <link rel="shortcut icon" href="image/logo.png">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php   
 include_once('include/connection.php');
session_start();
if(isset($_SESSION['uid'])){
    echo '<a href="include/logout.php" class="btn btn-secondary col-md-1" style="right:0%;top:0%;position:absolute;margin:10%;"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>';
}
?>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container contact-form col-md-5">
        <div class="contact-image">
            <img src="image/logo.png"/>
        </div>
        <form method="post" onsubmit="return validateform()" name="myform">
            <h3>NVQ Attestation System</h3>
            <div class="row col-md">
            <a  class="btn btn-primary btn-lg col-md-5 " href="student.php" style="text-decoration:none;text-align:center;color:#fff;font-weight:bold;padding-top:5%;">Add Student</a>
            <a  class="btn btn-warning btn-lg col-md-5" href="certificate.php" style="margin-left:15%;padding:5%;text-decoration:none;color:#fff;font-weight:bold;">Add Certificate</a>
               
            </div>
            
        </form>
    </div>

    <script>
        let error=document.getElementById('error');
        function validateform(){
        if(document.myform.username.value==""){
                error.innerText="*UserName Feild is empty";
                document.myform.username.focus();
                return false;
            }
            if(document.myform.password.value==""||document.myform.password.value.length<8){
                error.innerText="*Password Feild is Emty or Minimum eight charctor";
                document.myform.password.focus();
                return false;
            }
           
        }
    </script>
</body>

</html>