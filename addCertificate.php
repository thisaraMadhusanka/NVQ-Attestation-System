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
        <form method="post" onsubmit="return validateform()" name="myform" action="include/addCetifiback.php">
            <h3>NVQ Attestation System</h3>
            <div class="row col-md">
                <div class="col-md">
                    <div class="form-group">
                        <label for="number">Certificate Serial Number</label>
                        <input type="text" name="number" class="form-control" placeholder="12356" />
                        <label for="Name">Select Your Nic</label>
                        <select name="select" id="select"  class="form-control mb-3" >
                        <option>select Nic</option>
                        <?php
                            $query = "SELECT * FROM student";
                            $result = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <option><?php echo $row['NIC'] ?></option>
                            <?php } ?>
                        </select>
                        <label for="bno">Back Seriol Number</label>
                        <input type="text" name="bno" class="form-control" placeholder="B123456 *" />
                        <label for="date">Enter Effective Date</label>
                        <input type="date" name="date" class="form-control" placeholder="" />
                        <h6 id="error"></h6>
                        <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "ok") {
                                echo '<h6 id="error">Deta send Succssfully</h6>';
                            }
                            if ($_GET['error'] == "userexit") {
                                echo '<h6 id="error">*User Certificate No is allredy Exit</h6>';
                            }
                        }
                        ?>
                        <input type="submit" name="submit" class="btnContact" value="Save" />
                        <!-- <h6>Do You have an Account <a href="index.php"> Sign In </a> Now</h6> -->

                        
                    </div>
                    <a href="student.php" class="btn btn-dark" style="right:-20%;position:absolute;margin:10%;"><i class="fa fa-arrow-circle-left"></i> Back</a>
                </div>
                
            </div>
            
        </form>
        
    </div>

    <script>
        let error = document.getElementById('error');

        function validateform() {
            if (document.myform.number.value == "") {
                error.innerText = "*Certificate number Feild is empty";
                document.myform.number.focus();
                return false;
            }
            if (document.myform.select.value == "select Nic") {
                error.innerText = "*Plase select Nic";
                document.myform.select.focus();
                return false;
            }
            if (document.myform.bno.value == "") {
                error.innerText = "*Back serial No Feild is Emty";
                document.myform.bno.focus();
                return false;
            }
            if (document.myform.date.value == "") {
                error.innerText = "*Date Feild is Emty";
                document.myform.date.focus();
                return false;
            }
    
        }
    </script>
</body>

</html>