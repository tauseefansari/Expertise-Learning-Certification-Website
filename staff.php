<?php 
    require 'config.php';

    $username="";
    $name="";
    $email="";
    $balance="";
    $paid="";
    $stid="";

    if(isset($_SESSION['staff']))
    {
        $username=$_SESSION['staff'];
    }

    $query=mysqli_query($con,"SELECT * FROM tblteacher WHERE email='$username'");
    $query2=mysqli_query($con,"SELECT * FROM tblstudent");
    $res=mysqli_fetch_array($query);
    $row=mysqli_fetch_array($query2);


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
                <div class="col-md-6 col-xl-2 offset-md-0 offset-xl-0 text-center" style="height: 630px;background-color: #0d0d0d;"><img src="<?php echo 'admin/admin/images/'.$res['Picture']; ?>" style="height: 160px;margin-top: 25px;border-radius: 75px;background-color: #e69090;width: 170px;">
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

                    <h1 class="text-left">Manage Students: </h1>    
                    <div class="row">
                    <?php
                        $counter=0;
                        $query3=mysqli_query($con,"SELECT * FROM tblstudent");
                        while($res=mysqli_fetch_array($query3))
                        {
                            $counter+=1;
                            if($counter > 4)
                                $counter=0;
                                echo '<div class="col-md-4" style="height: 280px; margin-top: 30px;background-color: #d0c6c6;">
                                    <img src="'.$res['Picture'].'" style="height: 150px;border-radius: 10px;width: 160px;margin-right: 40px;"> <br><br>
                                    <label> Name : <span> <b> '.$res['Name'].' </b> </span> </label><br>
                                    <a href="edit.php?id='.$res['ID'].'">
                                    <button style="color: #fff;" class="btn btn-danger" name="update" type="submit">Edit Details</button>
                                    </a>
                                    </div>';
                        }
                    ?>

    <!-- End: 1 Row 2 Columns -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>