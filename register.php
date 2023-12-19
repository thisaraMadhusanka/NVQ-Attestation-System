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
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!------ Include the above in your HEAD tag ---------->

    <div class="container contact-form col-md-5">
        <div class="contact-image">
            <img src="image/logo.png"/>
        </div>
        <form method="post" onsubmit="return validateform()" name="myform" action="include/regback.php">
            <h3>NVQ Attestation System</h3>
            <div class="row col-md">
                <div class="col-md">
                    <div class="form-group">
                    <label for="username">Enter Your Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Your username *"/>
                    <label for="password">Enter Your Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Your Password *"/>
                    <label for="repassword">Enter Your Conform Password</label>
                    <input type="password" name="repassword" class="form-control" placeholder="Your Password *"/>
                    <h6 id="error"></h6>
                    <input type="submit" name="btnSubmit" class="btnContact" value="Register"/>
                    <h6>Do You have an Account <a href="index.php"> Sign In </a> Now</h6>
                </div>
                </div>
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
            if(document.myform.repassword.value==""){
                error.innerText="*Conform Password Feild is Emty";
                document.myform.repassword.focus();
                return false;
            }
            if(document.myform.repassword.value!=document.myform.repassword.value){
                error.innerText="*Conform Password is Dosn't Match";
                document.myform.repassword.focus();
                return false;
            }
        }
    </script>
</body>

</html>