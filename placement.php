<?php 
    require 'config.php';

    $username="";
    if(isset($_SESSION['staff']))
    {
        $username=$_SESSION['staff'];
    }

    $query=mysqli_query($con,"SELECT * FROM tblteacher WHERE email='$username'");
    $query2=mysqli_query($con,"SELECT * FROM tblstudent");
    $res=mysqli_fetch_array($query);
    $row=mysqli_fetch_array($query2);

    if(isset($_POST['place']))
    {
        $id=$_POST['sname'];
        $value=$_POST['placed'];
        $query=mysqli_query($con,"UPDATE tblstudent SET Placed='$value' WHERE ID='$id'");
    }

?>
<!DOCTYPE html>
<html
    style="margin: 20px;padding: 10px;background-image: url(&quot;assets/img/downloadd.jpg&quot;);background-color: rgba(17,17,17,0.5);width: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Staff</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body
    style="opacity: 0.83;filter: blur(0px) brightness(117%) contrast(113%);background-image: url(&quot;assets/img/downloadd.jpg&quot;);">
    <div></div>
    <!-- Start: 1 Row 2 Columns -->
    <div>
        <div class="container-fluid" style="height: 500px;">
            <div class="row">
                <div class="col-md-6 col-xl-2 offset-md-0 offset-xl-0 text-center"
                    style="height: 630px;background-color: #0d0d0d;"><img src="<?php echo 'admin/admin/images/'.$res['Picture']; ?>"
                        style="height: 160px;margin-top: 25px;border-radius: 75px;background-color: #e69090;width: 170px;">
                    <div class="row">
                        <div class="col" style="background-color: #0d0d0d;"><label class="col-form-label"
                                style="color: rgb(212,228,244);"><strong><?php echo $res['Name']; ?></strong></label>
                        </div>
                    </div>
                    <div class="row" style="background-color: #0d0d0d;">
                        <div class="col" style="margin-bottom: 6px;margin-top: 50px;">
                            <a href="staff.php"><button class="btn btn-primary" type="button"
                                    style="width: 150px;border-collapse: separate;">Manage Students</button></a></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-bottom: 6px;background-color: #0d0d0d;">
                            <a href="enroll.php"><button class="btn btn-primary" type="button"
                                    style="width: 150px;">Enroll Students</button></a></div>
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
                <div class="col" style="margin-top: 2px;width: 100%;background-color:palevioletred;">
                    <div class="row" style="background-color: #0e0d0d;">
                        <div class="col" style="margin-top: -2px;background-color: #0c0b0b;">
                            <a href="Studentadd.php"><button class="btn btn-primary" type="button"
                                    style="margin-left: 50px;background-color: rgb(114,9,15);width: 170px;height: 50px;margin-bottom: 15px;margin-top: 12px;">+
                                    Add Student</button></a>
                            <a href="logout.php"><button class="btn btn-danger" style="float: right;
                                margin-top: 20px;">Logout</button></a>
                        </div>
                    </div>

                    <br>
                    <h2 align="left">Student Placement : </h2>
                    <form method="post" action="#">
                    <div class="col-sm-6">
                        <div class="form-group mb-30">
                            <div class="styled-select">
                                <select name="sname" id="sname" class="form-control" required="">
                                    <option value="">- Student Name -</option>
                                    <?php 
                                        $query2=mysqli_query($con,"SELECT * FROM tblstudent");
                                        while($row=mysqli_fetch_array($query2)) 
                                        {
                                            echo '<option value="'.$row['ID'].'">'.$row['Name'].'</option> <br><br>';  
                                        }
                                    ?>
                                </select>
                            </div>
                            <br>
                        <div class="form-group mb-30">
                            <div class="styled-select">
                                <select name="cname" id="cname" class="form-control" required="">
                                    <option value="">- Comapny Name -</option>
                                    <option value="Morgan Stanley">Morgan Stanley</option>
                                    <option value="J.P. Morgan">J.P. Morgan</option>
                                    <option value="Capegemini">Capegemini</option>
                                    <option value="TCS">TCS</option>
                                    <option value="L&T">L&T</option>
                                </select>
                            </div>
                        <br>
                        <div class="form-group mb-30">
                            <div class="styled-select">
                                <select name="placed" id="placed" class="form-control" required="">
                                    <option value="">- Placement Status -</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" name="place" value="Update Placement Status" class="btn btn-success">
                <input type="reset" name="cancel" value="Cancel" class="btn btn-danger">
            </div>
        </form>




                </div>
                <!-- End: 1 Row 2 Columns -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script
                    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>