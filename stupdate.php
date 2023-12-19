<?php
include('include/connection.php')
?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!------ Include the above in your HEAD tag ---------->

    <div class="container contact-form col-md-5">
        <div class="contact-image">
            <img src="image/logo.png" />
        </div>
        <form method="post" onsubmit="return validateform()" name="myform" action="include/update.php">
            <h3>NVQ Attestation System</h3>
            <div class="row col-md">
                <div class="col-md">
                    
    <?php
        if(isset($_GET['updateid'])){
            $nic=$_GET['updateid'];

            $query="SELECT * FROM Student WHERE NIC='$nic'";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result)){

        ?>
                    <div class="form-group">
                        <label for="nic">Enter Your NIC</label>
                        <input type="hidden" name="oldnic" class="form-control" placeholder="Your NIC *"  value="<?php echo $row['NIC'] ?>"/>
                        <input type="text" name="nic" class="form-control" placeholder="Your NIC *"  value="<?php echo $row['NIC'] ?>"/>
                        <label for="Name">Enter Your Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Your Name *" value="<?php echo $row['Name'] ?>" />
                        <label for="Mobile">Enter Your Mobile</label>
                        <input type="text" name="mobile" class="form-control" placeholder="Your Mobile No *" value="<?php echo $row['Mobile'] ?>"/>
                        <h6 id="error"></h6>
                        <?php
        
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "ok") {
                                echo '<h6 id="error">Deta send Succssfully</h6>';
                            }
                            if ($_GET['error'] == "cantdelete") {
                                echo '<h6 id="error">*Cant Delete</h6>';
                            } if ($_GET['error'] == "userexit") {
                                echo '<h6 id="error">*User Certificate No is allredy Exit</h6>';
                            }
                        }
                        ?>
                        <input type="submit" name="stupdate" class="btn btn-primary mt-3" value="update" />
                        <a href="include/delete.php?deleteid=<?php echo $row['NIC'] ?>" class="btn btn-danger mt-0"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                        <!-- <h6>Do You have an Account <a href="index.php"> Sign In </a> Now</h6> -->
<?php
    }
}
?>
                        
                    </div>
                    <a href="student.php" class="btn btn-dark " style="right:-20%;position:absolute;margin:10%;"><i class="fa fa-arrow-circle-left"></i> Back</a>
                </div>
                
            </div>
            
        </form>
        
    </div>

    <script>
        let error = document.getElementById('error');

        function validateform() {
            if (document.myform.nic.value == "") {
                error.innerText = "*nic Feild is empty";
                document.myform.nic.focus();
                return false;
            }
            if (document.myform.name.value == "") {
                error.innerText = "*name Feild is Emty";
                document.myform.name.focus();
                return false;
            }
            if (document.myform.mobile.value == ""||document.myform.mobile.value.length<10) {
                error.innerText = "*Mobile no must be ten Digit Or Mobile no Feild is Emty  ";
                document.myform.mobile.focus();
                return false;
            }
        }
    </script>
</body>

</html>