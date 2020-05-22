<?php 
    require 'config.php';
    
    $fName="";
    $keywords="";
    $email="";
    $pass="";


    function randomPassword() 
    {
        $pass="";
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        for ($i = 0; $i < 8; $i++) 
        {
            $n = rand(0,strlen($alphabet)-1);
            $pass.= $alphabet[$n];
        }
        return $pass;
    }

    if(isset($_POST['upload']))
    {
        if($_FILES['fileToUpload']['name'] == "")
        {
            echo '<script> alert("Please Select Profile Picture"); </script>';
        }
        else if(isset($_FILES['fileToUpload']['name']))
        {
            $uploadOk=1;
            $fileName=$_FILES['fileToUpload']['name'];
            $fileName=str_replace(' ', '', $fileName);
            $errorMessage="";
            $fileSize="";
            $fileExt="";

            if($fileName != "") 
            {
                $targetDir = "Images/students/";
                $fileName = $targetDir . uniqid().basename($fileName);
                $fileSize = $_FILES['fileToUpload']['size'];
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
                $fileExt = strtolower($fileType);

                if($_FILES['fileToUpload']['size'] > 10000000)
                {
                    $errorMessage = "Sorry, your file is too large";
                    $uploadOk = 0;
                }

                if(strtolower($fileType) != "jpg" && strtolower($fileType) != "jpeg" && strtolower($fileType) != "png")
                {
                    $errorMessage = "Sorry, only ppt and pptx files are allowed";
                    $uploadOk = 0;
                }

                if($uploadOk) 
                {
                    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $fileName)) 
                    {
                        //file uploaded okay
                    }
                    else 
                    {
                        //file did not upload
                        $uploadOk = 0;
                    }
                }

            }

            if($uploadOk) 
            {
                $fName=strip_tags($_POST['fileNam']);
                $email=strip_tags($_POST['email']);
                $mobile=strip_tags($_POST['mobile']);
                $doj=$_POST['dateofjoin'];
                $qualification=$_POST['qualification'];
                $add=$_POST['address'];

                    $check=mysqli_query($con,"SELECT name FROM tblstudent WHERE name='$fName'");
                    if(mysqli_num_rows($check) == 0)
                    {
                        $pass=randomPassword();
                        //echo $fName." ".$fileName." ".$email." ".$mobile." ".$qualification." ".$add." ".$chk." ".$doj." ".$pass;
                        $query2=mysqli_query($con,"INSERT INTO `tblstudent`(`Name`, `Picture`, `Email`, `MobileNumber`, `Qualifications`, `Address`, `joiningdate`, `pass`, `Placed`)  VALUES ('$fName','$fileName','$email','$mobile','$qualification','$add','$doj','$pass','No')");
                        $id=$con->insert_id;
                        $query3=mysqli_query($con,"INSERT INTO tblpayment VALUES ('','$id','0','0')");
                        //echo $id." ".$rem." ".$rem;
                        echo '<script> alert("Please Remember Your Password \n Your Password is : '.$pass.'"); </script>';
                        //echo $fName." ".$fileName." ".$email." ".$mobile." ".$qualification." ".$address." ".$chk." ".$doj." ".$pass;
                        //header("Location : staff.php");
                        $fileName="";
                        $fName="";
                    }
                }  
        }
        else 
        {
            $fileName="";
            echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error!</strong>'." $errorMessage".'</div>';
        }
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Add</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style type="text/css">
        .box{
            background-image: url('./images/bg/backs.png');
            margin-top: 50px;
        }
    </style>
</head>
<body>

    


    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 box">
            
        
        
    
<form class="text-center p-5" method="post" enctype="multipart/form-data">

    <p class="h4 mb-4" style="color: darkblue;"><b>Student Registration</b></p>

    <!-- Name -->
    <label class="text-white" style="float: left;">Choose Profile Picture : </label>
    <input type="file" name="fileToUpload" id="fileToUpload" style="height: 45px;
    color: #fff;
    float: right;
    position: absolute;
    margin-left: -65px;"> <br> <br>

    <!-- Name -->
    <input type="text" id="defaultContactFormName" class="form-control mb-4" name="fileNam" placeholder="Enter Name of Student" required>

    <input type="text" id="defaultContactFormName" class="form-control mb-4" name="email" placeholder="Enter E-Mail id" required>

    <input type="text" id="defaultContactFormName" class="form-control mb-4" name="mobile" placeholder="Enter Mobile Number" required>

    <select name="qualification" id="defaultContactFormName" class="form-control mb-4" required="">
        <option value="">-Select Qualification-</option>
        <option value="Diploma">Diploma</option>
        <option value="Degree">Degree</option>
        <option value="Other">Other</option>
    </select>

    <textarea id="defaultContactFormName" class="form-control mb-4" name="address" placeholder="Address" required></textarea>

    <!-- Message -->
    <!--<div class="form-check-inline">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="courses[]" 
        value="Artificial Intelligence">Artificial Intelligence (AI)
    </label>
    </div>
    <div class="form-check-inline">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="courses[]" value="Machine Learning">Machine Learning (ML)
    </label>
    </div>
    <div class="form-check-inline">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="courses[]" value="Python Programming">Python Programming
    </label>
    </div>
    <br>
    <div class="form-check-inline">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="courses[]" value="Deep Learning">Deep Learning
    </label>
    </div>
    <br>
    <div class="form-check-inline">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="courses[]" value="Android Programming">Android Programming
    </label>
    </div> <br><br>-->

    <input type="text" id="defaultContactFormName" class="form-control mb-4" name="dateofjoin" placeholder="Enter Date of Joining (YYYY-MM-DD)" required>

    <!-- Send button -->
    <button class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal" name="upload" type="submit">Add</button>
    <button class="btn btn-danger btn-block" name="upload" type="reset">Cancel</button>

    <a href="staff.php"> < Back to Staff</a>

</form>
</div>
<div class="col-md-4">
    
</div>
</div>
</div>
</body>
</html>