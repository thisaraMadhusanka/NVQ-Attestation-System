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
    <link rel="stylesheet" href="tablestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="hm-gradient h-100 ">

    <main>
        <!--MDB Tables-->
        <div class="container mt-4">

            <div class="card mb-4">

                <div class="card-body">
                    <!-- Grid row -->

                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12">

                            <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">Certificate table</h2>

                            <form action="">
                                <div class="input-group md-form form-sm form-2 mb-5 w-50 ml-5">
                                    <input class="form-control blue-border" type="text" placeholder="Search something here..." name="Search">
                                    <input type="submit" value="Search" name="submit" class="btn btn-primary col-md-3 ml-3">
                                    <a href="addCertificate.php" class="btn btn-primary col-md-4" style="right:-80%;position:absolute;"><i class="fa fa-plus" aria-hidden="true"></i> Add Certificate</a>
                                </div>

                            </form>

                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    <!--Table-->
                    <table class="table table-striped">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Certificate_Serial_Number</th>
                                <th>Student_NIC</th>
                                <th>Back_Serial_Number</th>
                                <th>Effective_Date</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <?php
                        $count = 0;
                        if (isset($_REQUEST['submit'])) {
                            $Search = $_REQUEST['Search'];
                            $query = "SELECT * FROM student_certificate where Certificate_Serial_Number='$Search'";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $count += 1;
                        ?>
                                <tbody>
                                    <tr>
                                        <th><?php echo $count ?></th>
                                        <td><?php echo $row['Certificate_Serial_Number'] ?></td>
                                        <td><?php echo $row['Student_NIC'] ?></td>
                                        <td><?php echo $row['Back_Serial_Number'] ?></td>
                                        <td><?php echo $row['Effective_Date'] ?></td>
                                        <td><i class="fa fa-pencil-square-o" aria-hidden="true"><a href="stupdate.php?updateid=<?php echo $row['Certificate_Serial_Number'] ?>" style="color:green;text-decoration:none;"></a></i></td>
                                       
                                    </tr>
                                </tbody>


                            <?php

                            }
                        } else {

                            ?>
                            <?php

                            $query = "SELECT * FROM student_certificate";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $count += 1;
                            ?>
                                <tbody>
                                    <tr>
                                    <th><?php echo $count ?></th>
                                        <td><?php echo $row['Certificate_Serial_Number'] ?></td>
                                        <td><?php echo $row['Student_NIC'] ?></td>
                                        <td><?php echo $row['Back_Serial_Number'] ?></td>
                                        <td><?php echo $row['Effective_Date'] ?></td>
                                        <td><a href="cetifiupdate.php?updateid=<?php echo $row['Certificate_Serial_Number'] ?>" style="color:green;text-decoration:none;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                    </tr>
                                </tbody>
                        <?php }
                        }
                        ?>
                        <!--Table body-->
                    </table>
                    <!--Table-->
                </div>
            </div>

    </main>
   
    <a href="homepage.php" class="btn btn-primary col-md-1" style="right:0%;position:absolute;margin:10%;"><i class="fa fa-arrow-circle-left"></i> Back</a>
     <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "ok") {
            echo '<h6 class="btn btn-primary ml-5">Deta send Succssfully</h6>';
        }
    }
    ?>
</body>

</html>