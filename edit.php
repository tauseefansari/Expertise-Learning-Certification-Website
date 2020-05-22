<?php 
    require 'config.php';

    $username="";
    $name="";
    $email="";
    $balance="";
    $paid="";
    $stid=$_GET['id'];

    if(isset($_SESSION['staff']))
    {
        $username=$_SESSION['staff'];
    }

    $query=mysqli_query($con,"SELECT * FROM tblteacher WHERE email='$username'");
    $query2=mysqli_query($con,"SELECT * FROM tblstudent WHERE ID='$stid'");
    $res=mysqli_fetch_array($query);
    $row=mysqli_fetch_array($query2);


    if(isset($_POST['update']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $doj=$_POST['doj'];
        $add=$_POST['address'];
        $mobile=$_POST['mobile'];
        $quali=$_POST['quali'];

        $query=mysqli_query($con,"UPDATE tblstudent SET name='$name',email='$email',Qualifications='$quali',joiningdate='$doj',address='$add',MobileNumber='$mobile' WHERE ID='$stid'");
        header('Location: '.$_SERVER['REQUEST_URI']);
    }


?>

<!DOCTYPE html>
<html style="margin: 20px;padding: 10px;background-image: url(&quot;assets/img/downloadd.jpg&quot;);background-color: rgba(17,17,17,0.5);width: 100%;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Staff</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="opacity: 0.83;filter: blur(0px) brightness(117%) contrast(113%);background-image: url(&quot;assets/img/downloadd.jpg&quot;);">
    <div></div>
    <!-- Start: 1 Row 2 Columns -->
    <div>
        <div class="container-fluid" style="height: 500px;">
            <div class="row">
                <div class="col-md-6 col-xl-2 offset-md-0 offset-xl-0 text-center" style="height: 630px;background-color: #0d0d0d;"><img src="<?php echo $res['Picture']; ?>" style="height: 160px;margin-top: 25px;border-radius: 75px;background-color: #e69090;width: 170px;">
                    <div class="row">
                        <div class="col" style="background-color: #0d0d0d;"><label class="col-form-label" style="color: rgb(212,228,244);"><strong><?php echo $res['Name']; ?></strong></label></div>
                    </div>
                    <div class="row" style="background-color: #0d0d0d;">
                        <div class="col" style="margin-bottom: 6px;margin-top: 50px;">
                            <a href="staff.php"><button class="btn btn-primary" type="button" style="width: 150px;border-collapse: separate;">Manage Students</button></a></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-bottom: 6px;background-color: #0d0d0d;">
                            <a href="enroll.php"><button class="btn btn-primary" type="button" style="width: 150px;">Enroll Students</button></a></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-bottom: 6px;background-color: #0d0d0d;">
                            <a href="payment.php"><button class="btn btn-primary" type="button" style="width: 150px;">Payments</button></a></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-bottom: 6px;background-color: #0d0d0d;">
                            <a href="placement.php"><button class="btn btn-primary" type="button" style="width: 150px;">Placements</button></a></div>
                    </div>
                    <div class="row" style="background-color: #111111;">
                        <div class="col" style="margin-bottom: 4px;background-color: #0d0d0d;">
                            <a href="certificates.php"><button class="btn btn-primary" type="button" style="width: 150px;">Certificate</button></a></div>
                    </div>
                </div>
                <div class="col" style="margin-top: 2px;width: 100%;background-color: #d0c6c6;">
                    <div class="row" style="background-color: #0e0d0d;">
                        <div class="col" style="margin-top: -2px;background-color: #0c0b0b;">
                            <a href="Studentadd.php"><button class="btn btn-primary" type="button" style="margin-left: 50px;background-color: rgb(114,9,15);width: 170px;height: 50px;margin-bottom: 15px;margin-top: 12px;">+ Add Student</button></a>  
                            <a href="logout.php"><button class="btn btn-danger" style="float: right;
                                margin-top: 20px;">Logout</button></a>
                        </div>
                    </div>

                    <h1 class="text-center">Edit Student Details: </h1>    
                    <form method="post" action="#">
                        <br>
                    <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div style="padding: 10px;color: antiquewhite;background: dimgray;border-radius: 15px;">
                    <form method="post">
                    <div class="control-group">
                        <label>Full Name</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <input class="form-control" type="text" required="" name="name" value="<?php echo $row['Name']; ?>"><small
                                class="form-text text-danger help-block"></small>
                        </div>
                    </div>
                    <div class="control-group">
                        <label>E-Mail</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <input class="form-control" value="<?php echo $row['Email']; ?>" type="text" required="" name="email" id="Email"><small class="form-text text-danger help-block"></small>
                        </div>

                        <div class="control-group">
                        <label>Address</label>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <input class="form-control" value="<?php echo $row['Address']; ?>" type="text" required="" name="address" id="address"><small class="form-text text-danger help-block"></small>
                        </div>

                        <div class="control-group">
                            <label>Date of Joining</label>
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <input class="form-control" name="doj" value="<?php echo $row['joiningdate']; ?>" type="text" required="" id="name"><small
                                    class="form-text text-danger help-block"></small>
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Courses</label>
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <input class="form-control" value="<?php echo $row['StudCourse']; ?>" name="courses" type="text" readonly required="" id="Courses"><small
                                    class="form-text text-danger help-block"></small></div>
                        </div>

                        <div class="control-group">
                            <label>Mobile </label>
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <input class="form-control" value="<?php echo $row['MobileNumber']; ?>" type="text" required="" id="name" name="mobile"><small class="form-text text-danger help-block"></small>
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Qualifications </label>
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <input class="form-control" value="<?php echo $row['Qualifications']; ?>" name="quali" type="text" required="" id="name"><small class="form-text text-danger help-block"></small>
                            </div>
                        </div>
                        <div id="success"></div>
                        <center>
                        <div class="form-group"><button class="btn btn-primary btn-xl" type="submit"
                                id="sendMessageButton" name="update">Update Details</button></div>
                        </center>
                        </form>
                    </div>
                </div>
                    </form>
                </div>
    <!-- End: 1 Row 2 Columns -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>